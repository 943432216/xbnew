<?php
/*
Powered by ly200.com		http://www.ly200.com
广州联雅网络科技有限公司		020-83226791
*/

include($site_root_path.'/inc/manage/config/0.php');	//加载配置文件，0：企业网站，1：商城网站
include($site_root_path.'/inc/manage/reload_permit.php');	//载入权限配置

$_SESSION['ly200_AdminLanguage']='cn';
if(is_file($site_root_path."/inc/lang/{$_SESSION['ly200_AdminLanguage']}.php")){
	include($site_root_path."/inc/lang/{$_SESSION['ly200_AdminLanguage']}.php");
}else{
	include($site_root_path.'/inc/lang/cn.php');
}
?>