<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Create a shortcut for params.
$params = $this->item->params;
JHtml::addIncludePath(JPATH_COMPONENT . '/helpers/html');
$canEdit = $this->item->params->get('access-edit');
$info    = $params->get('info_block_position', 0);
?>

<?php $img = json_decode($this->item->images,true); ?>

<div class="block-prf">
	<div class="block-prf_wrapper">
		<a style="display: block; border-radius:4px; overflow: hidden; padding-top:0; background: url('/<?= $img['image_intro'] ?>') center center no-repeat; background-size: cover" href="<?php echo JRoute::_(ContentHelperRoute::getArticleRoute($this->item->slug, $this->item->catid, $this->item->language)); ?>" class="block-prf_padder pricecategory">
			<div class="price-header"><?php echo JLayoutHelper::render('joomla.content.blog_style_default_item_title', $this->item); ?></div>

<!--			<div class="price-img">--><?php // echo JLayoutHelper::render('joomla.content.intro_image', $this->item); ?><!--</div>-->

			<div class="pricetextintro"><?php echo $this->item->introtext; ?></div>

			<span class="morebtnprice">Подробнее</span>
		</a>
	</div>
</div>

