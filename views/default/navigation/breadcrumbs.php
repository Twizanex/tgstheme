<?php
/**
 * Displays breadcrumbs.
 * 
 * OVERRIDE (remove top level breadcrumbs)
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['breadcrumbs'] (Optional) Array of arrays with keys 'title' and 'link'
 * @uses $vars['class']
 *
 * @see elgg_push_breadcrumb
 */

if (isset($vars['breadcrumbs'])) {
	$breadcrumbs = $vars['breadcrumbs'];
} else {
	$breadcrumbs = elgg_get_breadcrumbs();

	// Hack for now.. ignore these contexts
	$ignore_contexts = array('photos');

	/** Remove top level breadcrumbs when registered via elgg_push_breadcrumb **/
	if (!in_array(elgg_get_context(), $ignore_contexts) && count($breadcrumbs) === 1) {
		unset($breadcrumbs[0]);
	}
}

$class = 'elgg-menu elgg-breadcrumbs';
$additional_class = elgg_extract('class', $vars, '');
if ($additional_class) {
	$class = "$class $additional_class";
}

if (is_array($breadcrumbs) && count($breadcrumbs) > 0) {
	echo "<ul class=\"$class\">";
	foreach ($breadcrumbs as $idx => $breadcrumb) {
		if (!empty($breadcrumb['link'])) {
			$crumb = elgg_view('output/url', array(
				'href' => $breadcrumb['link'],
				'text' => elgg_get_excerpt($breadcrumb['title'], 50),
				'is_trusted' => true,
			));
		} else {
			$crumb = "<span>" . elgg_get_excerpt($breadcrumb['title'], 50) . "</span>";
		}
		echo "<li>$crumb</li>";
	}
	echo '</ul>';
}
