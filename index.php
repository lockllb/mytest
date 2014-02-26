<?php

/******************************
 * $File:index.php
 * $Description: 帝友 系统核心文件
 * $Author: ahui 
 * $Time:2010-06-06
 * $Update:Ahui
 * $UpdateDate:2012-06-10  
 * Copyright(c) 2010 - 2012 by deayou.com. All rights reserved
******************************/
require_once ("core/deayou.config.php");

error_reporting(E_ALL ^ E_NOTICE); 

//帝友系统核心配置
require_once("core/deayou.inc.php");

//是否控制ip可以访问
if(file_exists(DEAYOU_PATH."ipconfig.php")){
	require_once DEAYOU_PATH."ipconfig.php";
	if(ip_control_all($allow_ip_all)){
		echo '您的IP不能访问,请与管理员联系.'; exit;
	}
}

//帝友p2p借贷配置文件
if(file_exists("core/deayou.dyp2p.php")){
	require_once("core/deayou.dyp2p.php");
}

$magic->assign("_G",$_G);

//帝友系统核心文件
require_once("core/deayou.core.php");
?>
