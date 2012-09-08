<?php

if (elgg_get_config('upgrade_key') !== get_input('key', '', false) && !elgg_is_admin_logged_in()) {
	register_error('To perform this action you must be logged in as an admin or include your upgrade key.');
	forward();
}
elgg_register_plugin_hook_handler('view', 'page/upgrade', 'mrclay_upgrade_token_filter_views');

function mrclay_upgrade_token_filter_views($hook, $type, $content, $params) {
	// propagate user-given key in meta-refresh
	$key = (string) get_input('key', '', false);
	$key = htmlspecialchars(urlencode($key), ENT_QUOTES, 'UTF-8');

	return str_replace(
		"/upgrade.php?upgrade=upgrade\"",
		"/upgrade.php?upgrade=upgrade&amp;key=$key\"",
		$content);
}
