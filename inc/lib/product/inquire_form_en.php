<?php
if($_POST['data']=='inquire_en'){
	$un_keyword_ary=array('www', 'http');	//带有本关键词的内容不存入数据库
	$ProId=$_POST['ProId'];
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$Email=$_POST['Email'];
	$Address=$_POST['Address'];
	$City=$_POST['City'];
	$State=$_POST['State'];
	$Country=$_POST['Country'];
	$PostalCode=$_POST['PostalCode'];
	$Phone=$_POST['Phone'];
	$Fax=$_POST['Fax'];
	$Subject=$_POST['Subject'];
	$Message=$_POST['Message'];
	
	$str=$FirstName.$LastName.$Subject.$Message;	//过滤内容
	$in=0;
	foreach($un_keyword_ary as $value){
		if(@substr_count($str, $value)){
			$in=1;
			break;
		}
	}
	
	($in==1 || $FirstName=='' || $LastName=='' || $Subject=='' || $Message=='') && js_location($jump_url);
	
	$db->insert('product_inquire', array(
			'ProId'		=>	$ProId,
			'FirstName'	=>	$FirstName,
			'LastName'	=>	$LastName,
			'Email'		=>	$Email,
			'Address'	=>	$Address,
			'City'		=>	$City,
			'State'		=>	$State,
			'Country'	=>	$Country,
			'PostalCode'=>	$PostalCode,
			'Phone'		=>	$Phone,
			'Fax'		=>	$Fax,
			'Subject'	=>	$Subject,
			'Message'	=>	$Message,
			'Ip'		=>	get_ip(),
			'PostTime'	=>	$service_time
		)
	);
	
	js_location('/', 'Thank you, we will get back to you within 24 hours!');
}

$ProId=(int)$_GET['ProId']?(int)$_GET['ProId']:(int)$_POST['ProId'];
!$ProId && $ProId=@implode(',', $_POST['ProId']);
!$ProId && $ProId=0;

$product_img_width=160;	//产品图片宽度
$product_img_height=160;	//产品图片高度
$contents_width=720;	//显示内容的div的宽度

$product_row=$db->get_all('product', "ProId in(0,$ProId,0)", '*', 'MyOrder desc, ProId desc');

ob_start();
?>
<script language="javascript" src="/js/checkform.js"></script>
<div id="lib_product_inquire">
	<div class="product_list">
		<?php
		for($i=0; $i<count($product_row); $i++){
			$url=get_url('product', $product_row[$i]);
		?>
		<div class="item" style="width:<?=$contents_width;?>px;">
			<div class="img" style="width:<?=$product_img_width;?>px; height:<?=$product_img_height;?>px"><div><a href="<?=$url;?>" target="_blank"><img src="<?=$product_row[$i]['PicPath_0'];?>"/></a></div></div>
			<div class="info" style="width:<?=$contents_width-$product_img_width-15;?>px;">
				<div class="proname"><a href="<?=$url;?>" target="_blank"><?=$product_row[$i]['Name'];?></a></div>
				<div class="flh_180"><?=format_text($product_row[$i]['BriefDescription']);?></div>
			</div>
			<div class="cline"><div class="line"></div></div>
		</div>
		<?php }?>
	</div>
	<div class="form" style="width:<?=$contents_width;?>px;">
		<form action="<?=$_SERVER['PHP_SELF'].'?'.query_string();?>" method="post" name="inquire_en_form" OnSubmit="return checkForm(this);">
			<div class="rows">
				<label>First Name: <font class='fc_red'>*</font></label>
				<span><input name="FirstName" type="text" class="form_input" check="First Name is required!~*" size="25" maxlength="20"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Last Name: <font class='fc_red'>*</font></label>
				<span><input name="LastName" type="text" class="form_input" check="Last Name is required!~*" size="25" maxlength="20"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Email: <font class="fc_red">*</font></label>
				<span><input name="Email" value="" type="text" class="form_input" check="Email is required!~email|Email entered doesn't match with confirm Email value!*" size="50" maxlength="100"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Address: <font class="fc_red">*</font></label>
				<span><input name="Address" value="" type="text" class="form_input" check="Address is required!~*" size="70" maxlength="200"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>City: <font class="fc_red">*</font></label>
				<span><input name="City" value="" type="text" class="form_input" check="City is required!~*" size="40" maxlength="50"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>State: <font class="fc_red">*</font></label>
				<span><input name="State" value="" type="text" class="form_input" check="State is required!~*" size="40" maxlength="50"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Country: <font class="fc_red">*</font></label>
				<span><?=ouput_table_to_select('country', 'Country', 'Country', 'Country', 'Country asc, CId asc', 0, 1, '', '', 'Please select Country', 'Please select Country!~*');?></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Postal Code: <font class="fc_red">*</font></label>
				<span><input name="PostalCode" value="" onkeyup="set_number(this, 0);" onpaste="set_number(this, 0);" type="text" class="form_input" check="Postal Code is required!~*" size="10" maxlength="10"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Phone: <font class="fc_red">*</font></label>
				<span><input name="Phone" value="" type="text" class="form_input" check="Phone is required!~*" size="40" maxlength="20" /></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Fax: <font class="fc_red">*</font></label>
				<span><input name="Fax" value="" type="text" class="form_input" check="Fax is required!~*" size="40" maxlength="20" /></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Subject: <font class='fc_red'>*</font></label>
				<span><input name="Subject" type="text" class="form_input" check="Subject is required!~*" size="50" maxlength="100"></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label>Message: <font class='fc_red'>*</font></label>
				<span><textarea name="Message" class="form_area contents" check="Message is required!~*"></textarea></span>
				<div class="clear"></div>
			</div>
			<div class="rows">
				<label></label>
				<span><input name="Submit" type="submit" class="form_button" value="Submit"></span>
				<div class="clear"></div>
			</div>
			<input type="hidden" name="ProId" value="<?=$ProId;?>" />
			<input type="hidden" name="data" value="inquire_en" />
		</form>
	</div>
</div>
<?php
$product_inquire_form_en=ob_get_contents();
ob_end_clean();
?>