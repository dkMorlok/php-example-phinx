<?php

date_default_timezone_set('Europe/Prague');

return [
	'paths' => [
		'migrations' => __DIR__ . '/data/migrations',
		'seeds' => __DIR__ . '/data/seeders',
	],
	'environments' => [
		'default_migration_table' => '_phinx_log',
		'default_database' => 'testing',
		'testing' => [
			'adapter' => 'mysql',
			'host' => '127.0.0.1',
			'name' => 'testing',
			'user' => 'testing',
			'pass' => 'testing',
			'port' => 3306,
			'charset' => 'utf8',
			'collation' => 'utf8_general_ci'
		]
	]
];
