<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['is_system_on'] = 'y';
$config['multiple_sites_enabled'] = 'n';
$config['save_tmpl_files'] = 'y';
// ExpressionEngine Config Items
// Find more configs and overrides at
// https://docs.expressionengine.com/latest/general/system_configuration_overrides.html

$config['app_version'] = '4.3.0';
$config['encryption_key'] = '056e86aba31a63b7977ae12915356b4c9af0b969';
$config['session_crypt_key'] = 'f252e35c4c71970394b5b71110b80b834bf8a61f';
$config['database'] = array(
	'expressionengine' => array(
		'hostname' => 'localhost',
		'database' => 'blogsite',
		'username' => 'root',
		'password' => 'acdc1234',
		'dbprefix' => 'exp_',
		'char_set' => 'utf8mb4',
		'dbcollat' => 'utf8mb4_unicode_ci',
		'port'     => ''
	),
);

// EOF