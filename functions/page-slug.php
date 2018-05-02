<?php

/**
 * Get Title Tag
 */
function get_title_tag() {
	$currentPage = trim($_SERVER['REQUEST_URI'], '/');

	if (empty($currentPage)) return 'Advanced Visual Systems - Home';

	$currentPage = explode('/', $currentPage);
	array_unshift($currentPage, 'Advanced Visual Systems');

	$currentPage = implode(" - ", $currentPage);
	$currentPage = ucwords($currentPage);

	return $currentPage;
}

/**
 * Check if on dev env
 */
function is_dev() {
	if (stripos($_SERVER["HTTP_HOST"], 'new.avs') !== false) return true;
	return false;
}

/**
 * Return Meta Description
 */
function get_meta() {
	if (stripos($_SERVER["HTTP_HOST"], 'forms') === true) {
		return 'Contact an AVS representative with any questions you have! We can\'t wait to hear from you.';
	} else if (stripos($_SERVER["HTTP_HOST"], 'contact') === true) {
		return 'Advanced Visual Systems has been in the Boston area for over 25 years providing groundbreaking software and solutions to the data visualization industry.';
	} else if (stripos($_SERVER["HTTP_HOST"], 'openviz') === true) {
		return 'The OpenViz API consists of a flexible data management pipeline that feeds many millions of in-memory data points into a high performance rendering engine for scalable graphics generation.';
	} else if (stripos($_SERVER["HTTP_HOST"], 'express') === true) {
		return 'AVS/Express is a comprehensive and versatile data visualization tool for both non-programmers and experienced developers.';
	} else if (stripos($_SERVER["HTTP_HOST"], 'solutions') === true) {
		return 'AVS has invested over 25 years of research and development into data visualization software and how end users use data.';
	} else if (stripos($_SERVER["HTTP_HOST"], 'support') === true) {
		return 'Advanced Visual Systems support has your back! Find supported operating systems or log a ticket in our support help center.';
	} else {
		return 'AVS has been providing data visualization software and solutions to fortune 500 companies for over 25 years';
	}
 }
