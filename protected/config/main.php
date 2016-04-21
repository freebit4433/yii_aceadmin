<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',


	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.srbac.controllers.SBaseController',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'zhangtao',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'srbac' => array(
			'userclass'=>'employee', //可选,默认是 User
			'userid'=>'id', //可选,默认是 userid
			'username'=>'name', //可选，默认是 username
			'debug'=>true, //可选,默认是 false
			'pageSize'=>10, //可选，默认是 15
			'superUser' =>'admin', //可选，默认是 Authorizer
			'css'=>'srbac.css', //可选，默认是 srbac.css
			'layout'=>
				'application.views.layouts.main', //可选,默认是
			// application.views.layouts.main, 必须是一个存在的路径别名
			'notAuthorizedView'=>
				'srbac.views.authitem.unauthorized', // 可选,默认是unauthorized.php
			//srbac.views.authitem.unauthorized, 必须是一个存在的路径别名
			'alwaysAllowed'=>array(    //可选,默认是 gui
				'SiteLogin','SiteLogout','SiteIndex','SiteAdmin',
				'SiteError', 'SiteContact'),
			'userActions'=>array(//可选,默认是空数组
				'Show','View','List'),
			'listBoxNumberOfLines' => 15, //可选,默认是10
			'imagesPath' => 'srbac.images', //可选,默认是 srbac.images
			'imagesPack'=>'noia', //可选,默认是 noia
			'iconText'=>true, //可选,默认是 false
			'header'=>'srbac.views.authitem.header', //可选,默认是
			// srbac.views.authitem.header, 必须是一个存在的路径别名
			'footer'=>'srbac.views.authitem.footer', //可选,默认是
			// srbac.views.authitem.footer, 必须是一个存在的路径别名
			'showHeader'=>true, //可选,默认是false
			'showFooter'=>true, //可选,默认是false
			'alwaysAllowedPath'=>'srbac.components', //可选,默认是 srbac.components
			// 必须是一个存在的路径别名
		),

	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/

		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'authManager' => array(
			'class'=>'CDbAuthManager',
			'connectionID'=>'db',
			'itemTable' => 'authitem',//认证项表名称
			'itemChildTable' => 'authitemchild',//认证项父子关系
			'assignmentTable' => 'authassignment',//认证项赋权关系
		),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
		),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		//'adminEmail'=>'webmaster@example.com',
		'menuList' => require(dirname(__FILE__).'/menuList.php'),
	),
);
