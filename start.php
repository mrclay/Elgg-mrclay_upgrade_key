<?php

// use almost no resources for non-upgrade requests

if (defined('UPGRADING') && elgg_get_config('upgrade_key')) {
	require dirname(__FILE__) . '/start-upgrading.php';
}
