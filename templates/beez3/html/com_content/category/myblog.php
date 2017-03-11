<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');

JHtml::_('behavior.caption');
?>
<link rel="stylesheet" type="text/css" media="all" href="/modules/mod_portfolio/css/portfolio.css">
<script src="/modules/mod_portfolio/js/portfolio.js"></script>

<div id="portfoliopage" class="pagepreloader">
<div id="floatingBarsG">
	<div class="blockG" id="rotateG_01"></div>
	<div class="blockG" id="rotateG_02"></div>
	<div class="blockG" id="rotateG_03"></div>
	<div class="blockG" id="rotateG_04"></div>
	<div class="blockG" id="rotateG_05"></div>
	<div class="blockG" id="rotateG_06"></div>
	<div class="blockG" id="rotateG_07"></div>
	<div class="blockG" id="rotateG_08"></div>
</div>
</div>

<div class="container-webka" id="notshowheader">
	<?php if ($this->params->get('show_category_title')) : ?>
		<h2 class="subheading-category">
			<?php echo $this->category->title; ?>
		</h2>
	<?php endif; ?>
</div>

<div class="container-webka" style="padding:0;">
<div class="wrapper-porfolio clearfix" style="margin-top:-10px">
	<?php if (!empty($this->intro_items)) : ?>
		<?php foreach ($this->intro_items as $key => &$item) : ?>
			<?php
			$this->item = & $item;
			echo $this->loadTemplate('item');
			?>
		<?php endforeach; ?>
	<?php endif; ?>
</div>
</div>