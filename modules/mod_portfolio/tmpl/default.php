<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

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
	
<div class="wrapper-porfolio clearfix">
	<?php echo $module->content;?>
</div>

<div style="clear:both"></div>


