<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the sliders style, you would use the following include:
 * <jdoc:include type="module" name="test" style="slider" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 *
 * This module chrome file creates custom output for modules used with the Visia template.
 * The first function wraps modules using the "container" style in a DIV. The second function
 * uses the "bottommodule" style to change the header on the bottom modules to H6. The third
 * function uses the "sidebar" style to change the header on the sidebar to H3.
 */

/*
 * none (output raw module content)
 */


function modChrome_icon_title_left($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	$headerClass = htmlspecialchars($params->get('header_class', ''));
	$moduleClass = htmlspecialchars($params->get('moduleclass_sfx')); 

	if (!empty ($module->content)) { ?>

		<div class="moduletable-icon-left<?php if ($moduleClass) echo ' '.$moduleClass; ?>">
			<?php if ($module->showtitle != 0) { ?>
			<h3><i class="<?php echo $headerClass; ?>">&nbsp;&nbsp;</i><?php echo $module->title; ?></h3>
			
			<?php } ?>
			
			<?php echo $module->content; ?>
		</div>

	<?php }

}


function modChrome_icon_title_center($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	$headerClass = htmlspecialchars($params->get('header_class', ''));
	$moduleClass = htmlspecialchars($params->get('moduleclass_sfx')); 

	if (!empty ($module->content)) { ?>

		<a href="#"><div class="moduletable-icon-center<?php if ($moduleClass) echo ' '.$moduleClass; ?>">
			<?php if ($module->showtitle != 0) { ?>
			<!--<a href="#">--><i class="<?php echo $headerClass; ?>">&nbsp;</i><!--</a>-->
			<div class="clr"></div><br />
			<h3><?php echo $module->title; ?></h3>
			<div class="clr"></div>
			<?php } ?>
			
			<?php echo $module->content; ?>
		</div></a>

	<?php }

}


function modChrome_title_center_noIcon($module, &$params, &$attribs)
{
	$headerLevel = isset($attribs['headerLevel']) ? (int) $attribs['headerLevel'] : 3;
	$headerClass = htmlspecialchars($params->get('header_class', ''));
	$moduleClass = htmlspecialchars($params->get('moduleclass_sfx')); 

	if (!empty ($module->content)) { ?>

		<div class="moduletable-icon-noicon <?php if ($moduleClass) echo ' '.$moduleClass; ?>">
			<?php if ($module->showtitle != 0) { ?>
			<h3><?php echo $module->title; ?> </h3>
			<div class="clr"></div><br />
			<?php } ?>
			
			<?php echo $module->content; ?>
		</div>

	<?php }

}





?>