<?php

/**
 * Get Page Slug
 */
function get_page_slug()
{
	$currentPage = explode('?', $_SERVER['REQUEST_URI'])[0];
	$currentPage = preg_replace('/\//', '', $currentPage);

	if (empty($currentPage)) {
		$currentPage = 'Home';
	} else {
		$currentPage = ucwords($currentPage);
	}

	return $currentPage;
}

/**
 * Check if on local env
 */
function is_dev() {
	if (stripos($_SERVER["HTTP_HOST"], 'localhost')) return true;
	return false;
}
