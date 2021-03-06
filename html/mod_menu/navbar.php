<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
?>
<?php // The menu class is deprecated. Use nav instead. ?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>
	

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

		<ul class="nav nav-justified<?php echo $class_sfx;?>"<?php
			$tag = '';

			if ($params->get('tag_id') != null)
			{
				$tag = $params->get('tag_id') . '';
				echo ' id="' . $tag . '"';
			}
		?>>
		<?php
		foreach ($list as $i => &$item)
		{
			$class = 'item-' . $item->id;

			if (($item->id == $active_id) OR ($item->type == 'alias' AND $item->params->get('aliasoptions') == $active_id))
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

			if (!empty($class))
			{
				$class = ' class="' . trim($class) . '"';
			}

			echo '<li' . $class . '>';

			// Render the menu item.
			switch ($item->type) :
				case 'separator':
				case 'url':
				case 'component':
				case 'heading':
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
			elseif ($item->shallower)
			{
				// The next item is shallower.
				echo '</li>';
				echo str_repeat('</ul></li>', $item->level_diff);
			}
			else
			{
				// The next item is on the same level.
				echo '</li>';
			}
		}
		?></ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>		
		