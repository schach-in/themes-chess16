<?php 

/**
 * chess16 theme
 * common functions
 *
 * Part of »Zugzwang Project«
 * https://www.zugzwang.org/modules/chess16
 *
 * @author Gustaf Mossakowski <gustaf@koenige.org>
 * @copyright Copyright © 2022-2023 Gustaf Mossakowski
 * @license http://opensource.org/licenses/lgpl-3.0.html LGPL-3.0
 */


/**
 * set a default for realm if it does not exist
 *
 * @return string
 */
function mt_chess16_realm_default() {
	global $zz_page;

	if (!empty($zz_page['error_code'])) return 'error';

	$path = wrap_setting('request_uri');
	if (str_starts_with($path, wrap_setting('base_path')))
		$path = substr($path, strlen(wrap_setting('base_path')));
	$path = explode('/', trim($path, '/'));
	return $path[0];
}
