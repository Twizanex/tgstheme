<?php
/**
 * TGS Theme 2 CSS
 *
 * @package TGSTheme2
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @author Jeff Tilson
 * @copyright THINK Global School 2010
 * @link http://www.thinkglobalschool.com/
 *
 */
?>

#activity-updates a.update_link {
	display: inline-block;
	color:white;
	font-weight: bold;
	padding:1px 8px 2px 24px;
	margin-top:9px;
	cursor: pointer;
	background: red url("<?php echo elgg_get_site_url(); ?>mod/tgstheme/_graphics/refresh.png") no-repeat 5px 3px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
}
#activity-updates a.update_link:hover {
	background: #4690D6 url("<?php echo elgg_get_site_url(); ?>mod/tgstheme/_graphics/refresh.png") no-repeat 5px -22px;
	color:white;
	text-decoration: none;
}

.elgg-right-sidebar {
	position: relative;
	padding: 20px 10px 10px 10px;
	float: left;
	width: 400px;
	margin: 0 0 10px 0;
}

.elgg-layout-one-sidebar-right {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/tgstheme/_graphics/sidebar_background.gif) repeat-y left top;
}

.tgs-footer {
	background: #aaa;
	width: 100%;
	padding: 5px;
	color: #222222;
	font-size: 10px;
}

table.tgstheme-profile {
	width: 100%;
}

table.tgstheme-profile .profile-left {
	width: 100px;
}

table.tgstheme-profile .profile-right {
	padding-left: 10px;
}

.tgstheme-profile-icon {
	margin-bottom: 5px;
	border: 5px solid #FFF;
	-moz-box-shadow: 0 0 4px #000;
	-webkit-box-shadow: 0 0 4px #000;
	box-shadow: 0 0 4px #000;
}

.tgstheme-profile-links {
	text-align: right;
	font-size: 11px;
	margin-top: 4px;
}

.tgstheme-module {
	background: #FFF;
}

.tgstheme-group-listing {
	clear: both;
	border-bottom: 1px solid #ccc;
	padding: 5px;
}

.tgstheme-group-icon {
	float: left;
	margin-right: 10px;
}

.tgstheme-group-info {
	float: left;
	width: 50%;
}

.tgstheme-group-updated {
	float: right;
	text-align: right;
}

.tgstheme-group-updated .time-updated {
	font-weight: bold;
	color: #888;
}

table#tgstheme-profile-stats td {
	font-weight: bold;
}

table#tgstheme-profile-stats td.label {
	color: #333333;
	text-align:right;
	padding-right:10px;
}

table#tgstheme-profile-stats td.stat {
	color: #91131E;
}

/* ***************************************
    COMPOSER
*************************************** */

/* These menus always make room for icons: */
.elgg-menu-composer li > a > .elgg-icon {
	margin-left: -20px;
	margin-right: 4px;
	vertial-align: middle;
}

.elgg-menu-composer {
	display:inline-block;
	height: 22px;
	font-family: 'Shanti', sans-serif;
	text-transform:uppercase;
	font-size:1em;
	font-weight:normal;
}

.elgg-menu-composer > li {
	font-weight:normal;
	margin-left: 10px;
}

.elgg-menu-composer > li > a {
	line-height: 16px;
	padding-left: 20px;
}

.elgg-menu-composer > li > a:hover {
	text-decoration: underline;
}

.elgg-menu-composer > li.ui-state-active > a {
	cursor: default;
	color: black;
	text-decoration: none;
}

.elgg-menu-composer > .ui-state-active > a:before,
.elgg-menu-composer > .ui-state-active > a:after {
	position: absolute;
	display: block;
	border-width: 8px;
	border-style: solid;
	content: " ";
	height: 0;
	width: 0;
	left: 0;
}

.elgg-menu-composer > .ui-state-active > a:before {
	top: 11px;
	border-color: transparent transparent #B4BBCD transparent;
}

.elgg-menu-composer > .ui-state-active > a:after {
	top: 12px;
	border-color: transparent transparent white transparent;
}

/* STATS */

table#stats-table td.label {
	text-shadow: 1px 1px 1px #AAAAAA;
}

table#stats-table td.stat {
	font-weight: bold;
	color: #800518;
}

/* NEW PAGE COMPONENT: COMPOSER */

.ui-tabs-hide {
	display:none;
}

.elgg-composer {
}

.elgg-composer > .ui-tabs-panel {
	margin-top: 5px;
	border: 1px solid #B4BBCD;
	padding: 10px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
}

/* PROFILE TWEAK */

#profile-owner-block ul.elgg-menu {
	margin-top: 15px;
}

/* Parentportal */
.parentportal-header-two-column {
	padding-top: 10px;
}

.elgg-menu-site .elgg-menu-item-home .elgg-icon {
	margin-right: 0px;
}

/* Spot Logo */
.spot-logo {
	position: absolute;
	left: 0;
}

/* Likes Tweak */
.elgg-menu .elgg-menu-item-likes-count {
	margin-left: 15px !important; 
}

/* Custom menu tweaks */
#custommenu {
	margin-top: -4px;
}

#custommenu ul.elgg-menu {
	margin-top: -2px;
}

/* Entity Menu Improvements */

.entity_anchor_hidden {
	display: none !important;
}

.tgstheme-entity-menu {
	float: right;
	height: 25px;
}

.tgstheme-entity-menu .tgstheme-entity-menu-actions {
	display: none;
}

.tgstheme-entity-menu-actions .elgg-menu-entity {
	margin-left: 0px;
}

.elgg-icon-settings-menu {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/tgstheme/_graphics/elgg_sprites.png) no-repeat left;
	width: 16px;
	height: 16px;
	background-position: 0 -738px;
	float: right;
	margin-left: 5px;
}

.elgg-menu-entity-buttons {
	float: none;
	height: auto;
	margin-top: 11px;
}

.elgg-menu-entity-core {
	height: auto;
	float: none;
	text-align: left;
	width: 100%;
	border-bottom: 1px dotted #CDCDCD;
	padding-bottom: 4px;
}

.elgg-menu-entity-core.core-only-child {
	border-bottom: none;
	padding-bottom: 0px;
}

.elgg-menu-entity-core li {
	margin-left: 0;
	margin-right: 15px;
}

.elgg-menu-entity-hidden {
	display: none;
}

.elgg-menu-entity-actions {
	height: auto;
	float: none;
	margin-top: 8px;
	margin-bottom: 8px;
	text-align: left;
}

.elgg-menu-entity-actions li {
	background: transparent url(<?php echo elgg_get_site_url(); ?>mod/tgstheme/_graphics/elgg_sprites.png) no-repeat left;
	background-position: 0 -1008px;
	height: 16px;
	margin-top: 5px;
}

.elgg-menu-entity-actions li:hover {
	background-position: 0 -990px;
}

.elgg-menu-entity-actions li a {
	margin-left: 20px;
}

.tgstheme-entity-menu-actions .notch {
    position: absolute;
    top: -10px;
    right: 3px;
    margin: 0;
    border-top: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #FFFFFF;
    padding: 0;
    width: 0;
    height: 0;
    /* ie6 height fix */
    font-size: 0;
    line-height: 0;
     /* ie6 transparent fix */
    _border-right-color: pink;
    _border-left-color: pink;
    _filter: chroma(color=pink);
}

.tgstheme-entity-menu-actions .border-notch { 
	border-bottom-color: #333333; top: -11px;
}

.tgstheme-entity-menu-actions {
	background-color: #FFFFFF;
	border: 1px solid #999999;
	box-shadow: 0 0 2px #BBBBBB;
	-webkit-box-shadow: 0 0 2px #BBBBBB;
	-moz-box-shadow: 0 0 2px #BBBBBB;
	min-height: 24px;
	padding: 8px 10px 4px;
	position: absolute;
	z-index: 9004;
}

span.actions-caret {
	position: relative;
	bottom: 1px;
	margin-left: 3px;
}

span.actions-text {
	border-right: 1px dotted #999999;
	padding-right: 3px;
}

.entity-action-toggler {
	font-size: 1em;
	padding: 3px 3px 3px 5px !important;
}

.entity-action-toggler span {
	color: #333333;
	font-size: 11px !important;
	text-transform: uppercase !important;
}

.elgg-module-featured > .elgg-head .entity-action-toggler span {
	color: #333333;
}

.entity-action-toggler:hover span, 
.entity-action-toggler:focus span {
	color: #FFFFFF !important;
}

/* Owner Block Improvements */
#tgstheme-ownerblock-sidebar-menu {
	min-height: 24px;
}

#tgstheme-ownerblock-sidebar-menu-full {
	display: none;
}

.ownerblock-show-more, .ownerblock-show-less {
	background: #666666;
	color: white;
	text-align: right;
	font-size: 0.8em;
	border-radius: 10px 0 0 0;
	float: right;
	margin-top: 2px;
}

.ownerblock-show-more:after {
	font-size: smaller;
	content: "\25BC";
}

.ownerblock-show-less:after {
	font-size: smaller;
	content: "\25B2";
}

.ownerblock-show-more:hover, .ownerblock-show-less:hover {
	background: #444444 !important;
	color: white !important;
}

#tgstheme-ownerblock-sidebar-menu ul li.elgg-menu-item-more-ownerblock,
#tgstheme-ownerblock-sidebar-menu ul li.elgg-menu-item-less-ownerblock {
	position: inherit;
}

.tgstheme-share-email-module {
	width: 500px;
}

.tgstheme-share-email-from {
	color: #999;
}

.tgstheme-share-email-from:focus {
	border: 1px solid #CCCCCC;
	box-shadow: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	color: #999999;
}

/* Fancybox Overrides */

#fancybox-wrap {
	z-index: 9002 !important;
}

#fancybox-loading {
	z-index: 9003 !important;
}

/* Home page modules */

.home-popup { 
	position: absolute;
	border: 1px solid #bbb;
    background-color: #fff;
    width: 200px;
	padding: 5px;
	height: auto;
	top: -2em;
	text-align: left;
	display: block;
}

.home-small {
	font-size: 85% !important; 
}

/** General topbar tweaks **/

.tgstheme-topbar-dropdown:after {
	content: "▼";
	font-size: 8px;
	margin-left: 4px;
	position: relative;
	bottom: 2px;
}

/** User name topbar style **/
.tgstheme-topbar-username {
	margin-left: 10px;
	float: right;
}


/** Topbar settings menu **/
.elgg-menu-item-profile {
	height: 35px;
}

.elgg-menu-item-profile .elgg-child-menu {
	display: none;
	position: absolute;
	right: -1px;
	top: 32px;
	width: auto;
	z-index: 1;
	min-width: 180px;
	border: 1px solid #999;
	border-top: 0;
	
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
	
	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}

.elgg-menu-item-profile:hover > .elgg-child-menu {
	display: block;
}

.elgg-menu-item-profile .elgg-child-menu > li > a {
	border-bottom: 1px dotted #CCCCCC;
}

.elgg-menu-item-profile .elgg-child-menu > li:last-child > a {
	border-bottom: none;
}


.elgg-menu-item-profile .elgg-child-menu > li > a {
	background: white;
	color: #555;
	height:24px;
	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;
	
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}
.elgg-menu-item-profile .elgg-child-menu > li > a:hover {
	background: #2D3F46;
	color: white;
}

/** Tweaks for topbar settings icons **/
.elgg-menu-item-profile .elgg-child-menu .elgg-icon-settings {
	background-position: 0 -738px;
}

.elgg-menu-item-profile .elgg-child-menu > li:last-child > a,
.elgg-menu-item-profile .elgg-child-menu > li:last-child > a:hover {
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.elgg-menu-item-profile .elgg-child-menu > li > a {
    font-family: 'Shanti',sans-serif;
    font-size: 1em;
    font-weight: normal;
    height: 30px;
    padding: 6px 10px 0;
    text-transform: uppercase;
}
.elgg-menu-item-profile .elgg-child-menu > li > a:hover {
    text-decoration: none;
}

/** Messages Topbar **/
.elgg-menu-item-messages a {
	padding: 2px 8px 0 15px !important;
}

/** Ajax topbar **/
.elgg-page-topbar > .elgg-inner {
	display: none;
}

.parentportal-header .elgg-search-header {
	right: 15px;
}

.elgg-search.tgstheme-search-topbar .elgg-icon-search {
	top: 0px;
}

/** Tidypics **/
.elgg-menu-item-tagging {
	background-position: 0 -1044px !important;
}

div.tidypics-upload-image-element .tidypics-upload-image-progress .tidypics-upload-image-progress-bar {
	background: darkred !important;
}

/** Bookmarklet **/
body#elgg-bookmarklet-body {
	background-color: transparent;
	overflow: hidden;
}

div#elgg-bookmarklet-wrapper {
	width: 400px;
}

div#elgg-bookmarklet-form {
	padding: 10px;
}

/** Fix for: https://github.com/Elgg/Elgg/issues/5336 **/
span.message.warning {
	color: #777777;
	display: inline-block;
	font-weight: bold;
	margin-bottom: 7px;
}