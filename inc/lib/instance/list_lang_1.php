<?php
$instance_img_width=160;	//成功案例图片宽度
$instance_img_height=160;	//成功案例图片高度
$list_row_count=4;	//每行显示的产品件数
$list_line_count=5;	//显示的行数
$query_string=query_string('page');
$turn_page_query_string=$website_url_type==0?"?$query_string&page=":'page-';

if(!isset($instance_row)){
	$page_count=$list_row_count*$list_line_count;
	$where='Language=1';	//基本搜索条件
	include($site_root_path.'/inc/lib/instance/get_list_row.php');
}

ob_start();
?>
<div id="lib_instance_list">
	<?php
	$j=1;
	for($i=0; $i<count($instance_row); $i++){
		$url=get_url('instance', $instance_row[$i]);
	?>
	<div class="item" style="width:<?=sprintf('%01.2f', 100/$list_row_count);?>%;">
		<ul style="width:<?=$instance_img_width+2;?>px;">
			<li class="img" style="width:<?=$instance_img_width;?>px; height:<?=$instance_img_height;?>px"><div><a href="<?=$url;?>"><img src="<?=$instance_row[$i]['PicPath_0'];?>"/></a></div></li>
			<li class="name"><a href="<?=$url;?>"><?=$instance_row[$i]['Name'];?></a></li>
		</ul>
	</div>
	<?php if($j++%$list_row_count==0){echo '<div class="blank12"></div>';};?>
	<?php }?>
	<div class="clear"></div>
</div>
<div class="blank6"></div>
<div id="turn_page"><?=turn_page($page, $total_pages, $turn_page_query_string, $row_count, '<<', '>>', $website_url_type);?></div>
<?php
$instance_list_lang_1=ob_get_contents();
ob_clean();
?>