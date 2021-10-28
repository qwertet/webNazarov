<?php
$array = [//просто массив
	'main' => [
		'page' => 'main',
		'html' => 'main.html',
		'name' => 'Главная'
	],
	'products' => [
			'page' => 'products',
			'html' => 'products.html',
			'name' => 'Продукция',
			'sub' => [
					'page21' => ['html' => '', 'name' => 'page21'], //подпункты
					'page22' => ['html' => '', 'name' => 'page22'],
					'page23' => ['html' => '', 'name' => 'page23'],
					'page24' => ['html' => '', 'name' => 'page24'],
			]
	],
	'about' => [
			'page' => 'about',
			'html' => 'about.html',
			'name' => 'О компании',
			'sub' => [
					'page21' => ['page' => 'page21', 'html' => '', 'name' => 'page21'],
					'page22' => ['page' => 'page22', 'html' => '', 'name' => 'page22'],
					'page23' => ['page' => 'page23', 'html' => '', 'name' => 'page23'],
					'page24' => ['page' => 'page24', 'html' => '', 'name' => 'page24'],
			]
	],
	'contact' => [
			'page' => 'contact',
			'html' => 'contact.html',
			'name' => 'Связаться',
			'sub' => [
					'page21' => ['page' => 'page21', 'html' => '', 'name' => 'page21'],
					'page22' => ['page' => 'page22', 'html' => '', 'name' => 'page22'],
					'page23' => ['page' => 'page23', 'html' => '', 'name' => 'page23'],
					'page24' => ['page' => 'page24', 'html' => '', 'name' => 'page24'],
			]
	]

];
