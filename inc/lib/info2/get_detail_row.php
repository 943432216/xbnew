<?php
/*
url可带参数：
InfoId:文章ID
*/

if(!isset($info_row)){
	$InfoId=(int)$_GET['InfoId'];
	$info_row=$db->get_one('info2', "InfoId='$InfoId'");
}
?>