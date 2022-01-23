<?php

return [
	'plugin' => [
		'name' => 'Cookiebanner',
		'version' => '4.0.0',
	],
	'actions' => [
		'cookiebanner/agree' => ['access' => 'public'],
	],
	'view_extensions' => [
		'css/elgg' => [
			'cookiebanner/css' => [],
		],
		'page/elements/head' => [
			'cookiebanner/cookiebanner' => [],
		],
	],
];
