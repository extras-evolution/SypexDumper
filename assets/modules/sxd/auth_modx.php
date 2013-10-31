<?php
// Sypex Dumper 2 authorization file for MODx 1.0.x
include_once(dirname(__FILE__)."/../../cache/siteManager.php");
require_once(dirname(__FILE__).'/../../../'.MGR_DIR.'/includes/protect.inc.php');
require_once(dirname(__FILE__).'/../../../'.MGR_DIR.'/includes/config.inc.php');

session_name($site_sessionname);
session_start();

if(isset($_SESSION['modx.session.created.time']) && 
	isset($_SESSION['modx.mgr.session.cookie.lifetime']) && 
	($_SESSION['modx.mgr.session.cookie.lifetime'] == 0 || time() < $_SESSION['modx.session.created.time'] + $_SESSION['modx.mgr.session.cookie.lifetime'])  && 
	!empty($_SESSION['mgrPermissions']['bk_manager'])){
	
	if($this->connect($database_server, '', $database_user, $database_password)){
		// Проверяем юзера
		$this->CFG['my_db'] = trim($dbase, '`');
		$this->CFG['exitURL'] = '../'.MGR_DIR.'/';
		$auth = 1;
	}
}
?>