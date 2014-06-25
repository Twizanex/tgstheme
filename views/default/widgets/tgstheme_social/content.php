<?php
/**
 * TGS Theme 2 Social Widget
 *
 * @package TGSTheme2
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010 - 2013
 * @link http://www.thinkglobalschool.com/
 */

$menu = elgg_view_menu('social-menu', array(
	'sort_by' => 'priority',
	'class' => 'elgg-menu-hz'
));

echo $menu;