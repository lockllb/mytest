<?php

/******************************
 * $File:index.php
 * $Description: ���� ϵͳ�����ļ�
 * $Author: ahui 
 * $Time:2010-06-06
 * $Update:Ahui
 * $UpdateDate:2012-06-10  
 * Copyright(c) 2010 - 2012 by deayou.com. All rights reserved
******************************/
require_once ("core/deayou.config.php");

error_reporting(E_ALL ^ E_NOTICE); 

//����ϵͳ��������
require_once("core/deayou.inc.php");

//�Ƿ����ip���Է���
if(file_exists(DEAYOU_PATH."ipconfig.php")){
	require_once DEAYOU_PATH."ipconfig.php";
	if(ip_control_all($allow_ip_all)){
		echo '����IP���ܷ���,�������Ա��ϵ.'; exit;
	}
}

//����p2p��������ļ�
if(file_exists("core/deayou.dyp2p.php")){
	require_once("core/deayou.dyp2p.php");
}

$magic->assign("_G",$_G);

//����ϵͳ�����ļ�
require_once("core/deayou.core.php");
?>
