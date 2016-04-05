<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=yii',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',

);

//CREATE DATABASE yii CHARACTER SET = utf8;
//CREATE TABLE employee(
//id SMALLINT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//name VARCHAR(100) NOT NULL,
//password VARCHAR(100) NOT NULL,
//type TINYINT NOT NULL,
//ctime INT UNSIGNED NOT NULL
//);