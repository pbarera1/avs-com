<?php
/**
 * Renderer
 */
function render($templatePath, $data = [])
{
	if ($data) {
		$data = (object) $data;
	}
	include realpath($_SERVER["DOCUMENT_ROOT"]) . $templatePath;
}
