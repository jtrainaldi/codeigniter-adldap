<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config['account_suffix']		= '@domain.local';
$config['base_dn']				= 'DC=domain,DC=local';
$config['domain_controllers']	= array ("server1.domain.local");
$config['ad_username']			= 'administrator';
$config['ad_password']			= 'password';
$config['real_primarygroup']	= true;
$config['use_ssl']				= false;
$config['use_tls'] 				= false;
$config['recursive_groups']		= true;


/* End of file adldap.php */
/* Location: ./system/application/config/adldap.php */