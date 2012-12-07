<?php
$options = array(
	Zend_Db::AUTO_QUOTE_IDENTIFIERS => false
);
$params = array(
	'host'           => '127.0.0.1',
	'username'       => 'root',
	'password'       => '',
	'dbname'         => 'test',
	'options'        => $options
);


$db = Zend_Db::factory('Pdo_Mysql', $params);
Zend_Db_Table::setDefaultAdapter($db);  
