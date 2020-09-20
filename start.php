<?php

elgg_register_event_handler('init','system','cookiebanner_init');

function cookiebanner_init() {
	elgg_extend_view('css/elgg','cookiebanner/css');
	elgg_extend_view('page/elements/topbar_wrapper','cookiebanner/cookiebanner', 99);

	elgg_register_action("cookiebanner/agree", dirname(__FILE__) . '/actions/cookiebanner/agree.php', 'public');
}
