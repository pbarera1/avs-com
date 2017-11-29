<?php
// Grab all the php function_exists

$files = glob($root . '/functions/*.php');

foreach ($files as $file) {
	require($file);
}
