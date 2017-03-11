<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$id = '';

if (($tagId = $params->get('tag_id', '')))
{
	$id = ' id="' . $tagId . '"';
}

// The menu class is deprecated. Use nav instead
?>
<nav class="topInnerMenuMain clearfix m_fixed">
	<div>
		<a href="/" class="logotypeInnerMain"><span>Blog-kopilka.ru</span></a>
		<a href="/" class="logotypeInner smallMain"><span>Blog-kopilka.ru</span></a>
		<ul class="webkamenu_inner m_hide"<?php echo $id; ?>>
			<?php foreach ($list as $i => &$item)
			{
				$class = 'item-' . $item->id;

				if ($item->id == $default_id)
				{
					$class .= ' default';
				}


				if (($item->id == $active_id) || ($item->type == 'alias' && $item->params->get('aliasoptions') == $active_id))
				{
					$class .= ' current';
				}

				if (in_array($item->id, $path))
				{
					$class .= ' active';
				}
				elseif ($item->type == 'alias')
				{
					$aliasToId = $item->params->get('aliasoptions');

					if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
					{
						$class .= ' active';
					}
					elseif (in_array($aliasToId, $path))
					{
						$class .= ' alias-parent-active';
					}
				}

				if ($item->type == 'separator')
				{
					$class .= ' divider';
				}

				if ($item->deeper)
				{
					$class .= ' deeper';
				}

				if ($item->parent)
				{
					$class .= ' parent';
				}

				echo '<li class="' . $class . '">';

				switch ($item->type) :
					case 'separator':
					case 'component':
					case 'heading':
					case 'url':
						require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
						break;

					default:
						require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
						break;
				endswitch;

				// The next item is deeper.
				if ($item->deeper)
				{
					echo '<ul class="nav-child unstyled small">';
				}
				// The next item is shallower.
				elseif ($item->shallower)
				{
					echo '</li>';
					echo str_repeat('</ul></li>', $item->level_diff);
				}
				// The next item is on the same level.
				else
				{
					echo '</li>';
				}
			}


			$user = JFactory::getUser();
			$isroot = $user->authorise('core.admin');
			if($isroot == true){
				echo '<li><a href="/blog/bid-list">Заявки</a></li>';
			}


			?></ul>
		<div class="minimizedMenu BtnsMenuAdaptive">
			<i class="material-icons miniMenuIcon btnVertMenu">more_vert</i>
			<i class="material-icons miniMenuIcon btnCloseMenu" style="display: none;">close</i>
		</div>
	</div></nav>
<div class="minimizedMenu miniwrapper" style="position:fixed;top:56px;left:0px;z-index:4;">
	<ul>
		<?php
		foreach ($list as $i => &$item)
		{
			$class = 'item-' . $item->id;

			if ($item->id == $default_id)
			{
				$class .= ' default';
			}


			if (($item->id == $active_id) || ($item->type == 'alias' && $item->params->get('aliasoptions') == $active_id))
			{
				$class .= ' current';
			}

			if (in_array($item->id, $path))
			{
				$class .= ' active';
			}
			elseif ($item->type == 'alias')
			{
				$aliasToId = $item->params->get('aliasoptions');

				if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
				{
					$class .= ' active';
				}
				elseif (in_array($aliasToId, $path))
				{
					$class .= ' alias-parent-active';
				}
			}

			if ($item->type == 'separator')
			{
				$class .= ' divider';
			}

			if ($item->deeper)
			{
				$class .= ' deeper';
			}

			if ($item->parent)
			{
				$class .= ' parent';
			}

			echo '<li class="' . $class . '">';

			switch ($item->type) :
				case 'separator':
				case 'component':
				case 'heading':
				case 'url':
					require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
					break;

				default:
					require JModuleHelper::getLayoutPath('mod_menu', 'default_url');
					break;
			endswitch;

			// The next item is deeper.
			if ($item->deeper)
			{
				echo '<ul class="nav-child unstyled small">';
			}
			// The next item is shallower.
			elseif ($item->shallower)
			{
				echo '</li>';
				echo str_repeat('</ul></li>', $item->level_diff);
			}
			// The next item is on the same level.
			else
			{
				echo '</li>';
			}
		}
		if($isroot == true){
			echo '<li><a href="/blog/bid-list">Заявки</a></li>';
		}
		?>
	</ul>
</div>
<div style="height:56px;width:100%;display: none" class="small_devider"></div>