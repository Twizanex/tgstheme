<?php
/**
 * TGS Theme 2 Extra Info Widget
 *
 * @package TGSTheme2
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2013
 * @link http://www.thinkglobalschool.com/
 */

$title = elgg_get_plugin_setting('module_title', 'tgstheme');

echo elgg_view('modules/ajaxmodule', array(
	'title' => $module_title,
	'tag' => elgg_get_plugin_setting('module_tag', 'tgstheme'),
	'subtypes' => array(elgg_get_plugin_setting('module_subtype', 'tgstheme')),
	'listing_type' => 'simpleicon',
	'restrict_tag' => TRUE,
	'limit' => 2,
	'module_id' => 'home-page-info-module',
	'hide_empty' => TRUE,
));