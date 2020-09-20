<?php

elgg_register_event_handler('init','system','cookiebanner_init');

function cookiebanner_init() {
	elgg_extend_view('css/elgg','cookiebanner/css');
	elgg_extend_view('page/elements/head','cookiebanner/cookiebanner');
}
