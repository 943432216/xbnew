<?php
//*********************************网站后台综合相关参数设置（start here）************************************************************
$Ly200Cfg=array(
	'ly200'			=>	array(
							'up_file_base_dir'	=>	'/u_file/',   //网站所有上传的文件保存的基本目录
							'price_symbols'		=>	$mCfg['ExchangeRate'][$mCfg['ExchangeRate']['Default']]['Symbols'],	//后台所有用到价格的符号
							'img_add_watermark'	=>	0,	//后台对上传的图片是否加水印
							'un_allow_up_ext'		=>	array('php', 'php3', 'php4', 'bat', 'com', 'exe', 'dll', 'asp', 'asa', 'cgi', 'jsp'),	//不允许上传的文件格式
							'lang_array'			=>	array('lang_0'),	//网站语言版本，第一项值为默认语言版本，语言版本名称于：$Ly200Lang['ly200']['array_lang']
							'logo_img'				=>1,
						),
	'logo_img'		=> array(
							'add'						=>		1,
	),
	
	//文章管理系统
	'info'			=>	array(
							'add'						=>	1,	//添加
							'mod'						=>	1,	//修改
							'del'						=>	1,	//删除
							'order'					=>	1,	//排序
							'move'					=>	1,	//移动
							'is_in_index'			=>	0,	//首页显示
							'is_hot'					=>	0,	//热点文章
							'ext_url'				=>	0,	//外部链接
							'author'					=>	0,	//作者
							'provenance'			=>	0,	//来源
							'burden'					=>	0,	//责任编辑
							'brief_description'	=>	1,	//简短介绍
							'acc_time'				=>	1,	//时间
							'upload_pic'			=>	0,	//上传图片
							'pic_width'				=>	160,//缩略图宽度
							'pic_height'			=>	160,//缩略图高度
							'seo_tkd'				=>	1,	//SEO Title,Keywords,Description
							'page_url'				=>	'Title',	//PageUrl值计算字段
							'page_count'			=>	20,	//列表页每页显示数量
							'category'				=>	array(
														'dept'				=>	1,	//级数
														'list_display'		=>	1,	//展开分类
														'add'					=>	1,	//添加
														'mod'					=>	1,	//修改
														'mod_name'			=>	1,	//是否允许修改类别名称
														'del'					=>	1,	//删除
														'order'				=>	0,	//排序
														'description'		=>	0,	//类别说明
														'upload_pic'		=>	0,	//上传图片
														'pic_width'			=>	160,//缩略图宽度
														'pic_height'		=>	160,//缩略图高度
														'seo_tkd'			=>	1,	//SEO Title,Keywords,Description
														'page_url'			=>	'Category',	//PageUrl值计算字段
													),
						),
						
	//文章管理系统
	'info2'			=>	array(
							'add'						=>	1,	//添加
							'mod'						=>	1,	//修改
							'del'						=>	1,	//删除
							'order'					=>	1,	//排序
							'move'					=>	1,	//移动
							'is_in_index'			=>	0,	//首页显示
							'is_hot'					=>	0,	//热点文章
							'ext_url'				=>	0,	//外部链接
							'author'					=>	0,	//作者
							'provenance'			=>	0,	//来源
							'burden'					=>	0,	//责任编辑
							'brief_description'	=>	1,	//简短介绍
							'acc_time'				=>	1,	//时间
							'upload_pic'			=>	0,	//上传图片
							'pic_width'				=>	160,//缩略图宽度
							'pic_height'			=>	160,//缩略图高度
							'seo_tkd'				=>	1,	//SEO Title,Keywords,Description
							'page_url'				=>	'Title',	//PageUrl值计算字段
							'page_count'			=>	20,	//列表页每页显示数量
							'category'				=>	array(
														'dept'				=>	1,	//级数
														'list_display'		=>	1,	//展开分类
														'add'					=>	1,	//添加
														'mod'					=>	1,	//修改
														'mod_name'			=>	1,	//是否允许修改类别名称
														'del'					=>	1,	//删除
														'order'				=>	0,	//排序
														'description'		=>	1,	//类别说明
														'upload_pic'		=>	0,	//上传图片
														'pic_width'			=>	160,//缩略图宽度
														'pic_height'		=>	160,//缩略图高度
														'seo_tkd'			=>	1,	//SEO Title,Keywords,Description
														'page_url'			=>	'Category',	//PageUrl值计算字段
													),
						),
	
	//成功案例管理系统
	'instance'		=>	array(
							'add'						=>	1,	//添加
							'add_mode'				=>	0,	//添加模式，0：按语言版本分别发布，1：同时发布多语言
							'mod'						=>	1,	//修改
							'del'						=>	1,	//删除
							'order'					=>	1,	//排序
							'move'					=>	1,	//移动
							'is_in_index'			=>	0,	//首页显示
							'is_classic'			=>	0,	//经典案例
							'pic_count'				=>	1,	//图片数量，0-5张，设置为0则不需上传图片
							'pic_alt'				=>	0,	//图片Alt
							'pic_size'				=>	array('350X350', 'default'=>'160X160'),	//缩略图尺寸
							'brief_description'	=>	0,	//简短介绍
							'seo_tkd'				=>	1,	//SEO Title,Keywords,Description
							'description'			=>	1,	//详细介绍
							'page_url'				=>	'Name',	//PageUrl值计算字段
							'page_count'			=>	20,	//列表页每页显示数量
							'category'				=>	array(
															'dept'				=>	1,	//级数
															'list_display'		=>	1,	//展开分类
															'add'					=>	1,	//添加
															'mod'					=>	1,	//修改
															'mod_name'			=>	1,	//是否允许修改类别名称
															'del'					=>	1,	//删除
															'order'				=>	1,	//排序
															'description'		=>	0,	//类别说明
															'upload_pic'		=>	0,	//上传图片
															'pic_width'			=>	160,//缩略图宽度
															'pic_height'		=>	160,//缩略图高度
															'seo_tkd'			=>	1,	//SEO Title,Keywords,Description
															'page_url'			=>	'Category',	//PageUrl值计算字段
													),
						),
	
	//下载管理系统
	'download'		=>	array(
							'add'						=>	1,	//添加
							'mod'						=>	1,	//修改
							'del'						=>	1,	//删除
							'order'					=>	1,	//排序
							'move'					=>	1,	//移动
							'upload_pic'			=>	0,	//上传图片
							'pic_width'				=>	160,//缩略图宽度
							'pic_height'			=>	160,//缩略图高度
							'brief_description'	=>	0,	//简短介绍
							'seo_tkd'				=>	0,	//SEO Title,Keywords,Description
							'description'			=>	0,	//详细介绍
							'page_url'				=>	'Name',	//PageUrl值计算字段
							'page_count'			=>	20,	//列表页每页显示数量
							'category'				=>	array(
															'dept'				=>	1,	//级数
															'list_display'		=>	1,	//展开分类
															'add'					=>	1,	//添加
															'mod'					=>	1,	//修改
															'mod_name'			=>	1,	//是否允许修改类别名称
															'del'					=>	1,	//删除
															'order'				=>	1,	//排序
															'description'		=>	0,	//类别说明
															'upload_pic'		=>	0,	//上传图片
															'pic_width'			=>	160,//缩略图宽度
															'pic_height'		=>	160,//缩略图高度
															'seo_tkd'			=>	1,	//SEO Title,Keywords,Description
															'page_url'			=>	'Category',	//PageUrl值计算字段
														),
						),
	
	//文章管理系统
	'article'		=>	array(
							'amdo'					=>	array('group_1','group_2','group_3','group_4','group_5','group_6'),	//允许添加，修改标题，删除，排序的分组
							'seo_tkd'				=>	1,	//SEO Title,Keywords,Description
							'page_url'				=>	'Title',	//PageUrl值计算字段
						),
	
	//产品管理系统
	'product'		=>	array(
							'add'						=>	1,	//添加
							'mod'						=>	1,	//修改
							'del'						=>	1,	//删除
							'copy'					=>	1,	//复制
							'order'					=>	1,	//排序
							'move'					=>	1,	//移动
							'item_number'			=>	0,	//编号
							'model'					=>	0,	//型号
							'is_in_index'			=>	1,	//首页显示
							'is_hot'					=>	0,	//热卖
							'is_recommend'			=>	0,	//推荐
							'is_new'					=>	0,	//新品
							'sold_out'				=>	0,	//下架
							'color_ele'				=>	0,	//颜色，从product_color表选择
							'color_ele_mode'		=>	1,	//颜色选择模式，0：单选，1：多选
							'size_ele'				=>	0,	//尺寸，从product_size表选择
							'size_ele_mode'		=>	1,	//尺寸选择模式，0：单选，1：多选
							'brand_ele'				=>	0,	//品牌，从product_brand表单选
							'stock'					=>	0,	//库存
							'start_from'			=>	0,	//起订量
							'weight'					=>	0,	//重量
							'pic_count'				=>	5,	//图片数量，0-8张，设置为0则不需上传图片
							'pic_alt'				=>	0,	//图片Alt
							'pic_size'				=>	array('411X317','405X250', 'default'=>'217X166','111X85'),	//缩略图尺寸（购物网站必须开启90*90的缩略图，根据需要开启70*70的缩略图）
							'price'					=>	0,	//价格，以下3项为本项的扩展，关闭本项，即以下3项设置均失效
							'price_list'			=>	array('price_0', 'price_1'),	//价格名称下标列表，对应Price_0、Price_1、Price_2、Price_3字段，最多4个，价格名称由语言文件设置
							'special_offer'		=>	1,	//特价
							'wholesale_price'		=>	0,	//批发价，即多件优惠
							'wholesale_price_n'	=>	3,	//批发价默认选项数量
							'brief_description'	=>	1,	//简短介绍
							'seo_tkd'				=>	1,	//SEO Title,Keywords,Description
							'description'			=>	1,	//详细介绍
							'page_url'				=>	'Name',	//PageUrl值计算字段
							'page_count'			=>	20,	//列表页每页显示数量
							'color'					=>	array(
															'add'					=>	1,	//添加
															'mod'					=>	1,	//修改
															'del'					=>	1,	//删除
															'order'				=>	1,	//排序
															'upload_pic'		=>	0,	//上传图片
															'pic_width'			=>	30,//缩略图宽度
															'pic_height'		=>	30,//缩略图高度
														),
							'size'				=>	array(
														'add'				=>	1,	//添加
														'mod'				=>	1,	//修改
														'del'				=>	1,	//删除
														'order'			=>	1,	//排序
													),
							'brand'				=>	array(
														'add'					=>	1,	//添加
														'mod'					=>	1,	//修改
														'del'					=>	1,	//删除
														'order'				=>	1,	//排序
														'description'		=>	0,	//类别说明
														'upload_logo'		=>	0,	//上传图片
														'logo_width'		=>	160,//缩略图宽度
														'logo_height'		=>	160,//缩略图高度
														'seo_tkd'			=>	1,	//SEO Title,Keywords,Description
														'page_url'			=>	'Brand',	//PageUrl值计算字段
													),
							'category'			=>	array(
														'dept'				=>	1,	//级数
														'list_display'		=>	1,	//展开分类
														'add'					=>	1,	//添加
														'mod'					=>	1,	//修改
														'mod_name'			=>	1,	//是否允许修改类别名称
														'del'					=>	1,	//删除
														'order'				=>	1,	//排序
														'description'		=>	0,	//类别说明
														'upload_pic'		=>	0,	//上传图片
														'pic_width'			=>	160,//缩略图宽度
														'pic_height'		=>	160,//缩略图高度
														'seo_tkd'			=>	1,	//SEO Title,Keywords,Description
														'page_url'			=>	'Category',	//PageUrl值计算字段
													),
							'ext'				=>	array(
														/*
														产品资料扩展参数定义，二维数组下标对应数据库的字段名称和表单名称，字段长度：input=char 100，select=char 100，textarea=char 255，ckeditor=text
														如项示例：
														文本框：		'Volume'	=>	array(0, 25, 50, array('')),
														单选框：		'Applicable'=>	array('电脑硬件|路由设备|打印机', '电脑硬件'),
														多选框：		'SalesArea'	=>	array('广东|广西|海南', '广东|海南'),
														文件框：		'Manual',
														下拉框：		'Materials'	=>	array('钢|铁|塑料|皮革', '塑料'),
														文本段：		'Feature'	=>	array(1, 5, 50, array('')),
														编辑器：		'Warranty'	=>	array(1, array('')),
														*/
														'input_text'	=>	array(	//input[type='text']，参数：是否多语言，表单长度，允许最多输入字符数，默认值
																				'value_1'=>array(0,50,50,array('')),
																				'value_2'=>array(0,50,50,array('')),
																				'value_3'=>array(0,50,50,array('')),
																				'value_4'=>array(0,50,50,array('')),
																			),
														'input_radio'	=>	array(	//input[type='radio']，参数：选项列表，默认值
																			),
														'input_checkbox'=>	array(	//input[type='checkbox']，参数：选项列表，默认值；表单名称将自动加上[]，所以如果只有一个选项的，如选择是与否，不要使用此功能
																			),
														'input_file'	=>	array(	//input[type='file']
																			),
														'select'		=>	array(	//下拉表单，参数：选项列表，默认值；本功能用单选功能同样可以实现，区别在于本项可以不选任何值，单选则不一定
																			),
														'textarea'	=>	array(	//textarea，参数：是否多语言，行数，列数，默认值
																			),
														'ckeditor'	=>	array(	//编辑器，参数：是否多语言，默认值
																			),
													),
						),
	
	//在线留言管理系统
	'feedback'		=>	array(
							'del'						=>	1,	//删除
							'reply'					=>	1,	//是否需要回复
							'display'				=>	0,	//前台显示控制
							'page_count'			=>	20,	//列表页每页显示数量
						),
	
	//在线询盘管理系统
	'product_inquire'	=>	array(
							'del'						=>	1,	//删除
							'page_count'			=>	20,	//列表页每页显示数量
						),
	
	//产品评论管理系统
	'product_review'	=>	array(
							'del'						=>	1,	//删除
							'reply'					=>	1,	//是否需要回复
							'display'				=>	1,	//前台显示控制
							'page_count'			=>	20,	//列表页每页显示数量
						),
	
	//国家地区管理系统
	'country'			=>	array(
							'add'					=>	1,	//添加
							'mod'					=>	1,	//修改
							'del'					=>	1,	//删除
							'reset'				=>	1,	//重置
						),
	
	//广告图片管理系统
	'ad'				=>	array(
							'add'					=>	0,	//添加
							'mod'					=>	1,	//修改
							'del'					=>	0,	//删除
						),
	
	//在线调查管理系统
	'survey'			=>	array(
							'add'					=>	0,	//添加，通常添加、删除、排序都不需要用到，因为只有一个调查主题
							'mod'					=>	1,	//修改
							'del'					=>	0,	//删除
							'order'				=>	0,	//排序
							'survey_item_n'	=>	5,	//添加时的默认选项数量
						),
	//邮件列表管理系统
	'newsletter'	=>	array(
							'del'				=>	1,	//删除
							'page_count'		=>	20,	//列表页每页显示数量
						),
	
	//友情链接管理系统
	'links'			=>	array(
							'add'					=>	1,	//添加
							'mod'					=>	1,	//修改
							'del'					=>	1,	//删除
							'order'				=>	1,	//排序
							'upload_logo'		=>	0,	//上传图片
							'logo_width'		=>	120,//缩略图宽度
							'logo_height'		=>	60,//缩略图高度
							'page_count'		=>	20,	//列表页每页显示数量
						),
	
	//翻译链接管理系统
	'translate'		=>	array(
							'add'					=>	1,	//添加
							'mod'					=>	1,	//修改
							'del'					=>	1,	//删除
							'order'				=>	1,	//排序
							'upload_logo'		=>	1,	//上传图片
							'logo_width'		=>	16,//缩略图宽度
							'logo_height'		=>	11,//缩略图高度
							'page_count'		=>	20,	//列表页每页显示数量
						),
	
	
	//日志管理系统
	'manage_log'		=>	array(
							'del'					=>	1,	//删除
							'page_count'		=>	40,	//列表页每页显示数量
						),
	
	//数据库管理系统
	'database'		=>	array(
							'del'					=>	1,	//删除备份文件
							'file_size'			=>	5*1024*1024,	//备份文件每卷的大小
							'save_dir'			=>	'/_mysql_backup/',	//文件保存基本目录
						),
);
//*********************************网站后台综合相关参数设置（end here）**************************************************************

//*********************************后台左菜单显示相关参数（start here）**************************************************************
$menu=array(
	'global_set'			=>	1,	//全局设置
	'online'					=>	0,	//在线客服管理
	'send_mail_set'		=>	1,	//发送邮件设置
	
	'info_category'		=>	1,	//文章类别
	'info'					=>	1,	//文章管理
	
	'info2_category'		=>	1,	//文章类别
	'info2'					=>	1,	//文章管理
	
	'instance_category'	=>	0,	//成功案例类别
	'instance'				=>	0,	//成功案例管理
	
	'download_category'	=>	0,	//下载中心类别
	'download'				=>	0,	//下载中心管理
	
	'article_group_0'		=>	1,	//信息页
	'article_group_1'		=>	1,	//信息页
	'article_group_2'		=>	1,	//信息页
	'article_group_3'		=>	0,	//信息页
	'article_group_4'		=>	0,	//信息页
	'article_group_5'		=>	0,	//信息页
	'article_group_6'		=>	0,	//信息页
	
	'product_color'		=>	0,	//产品颜色
	'product_size'			=>	0,	//产品尺寸
	'product_brand'		=>	0,	//产品品牌
	'product_category'	=>	1,	//产品类别
	'product'				=>	1,	//产品管理
	
	'feedback'				=>	1,	//在线留言管理
	'product_inquire'		=>	0,	//在线询盘管理
	'product_review'		=>	0,	//产品评论管理
	'newsletter'			=>	0,	//邮件列表管理
	'send_mail'				=>	0,	//发送邮件
	
	'admin'					=>	1,	//后台用户管理
	'admin_update_pwd'	=>	1,	//修改密码
	
	'country'				=>	0,	//国家地区管理
	'ad'						=>	1,	//广告管理
	'survey'					=>	0,	//在线调查管理
	'links'					=>	1,	//友情链接管理
	'translate'				=>	0,	//翻译链接管理
	'search_keyword'		=>	0,	//热门搜索管理
	'html'					=>	0,	//静态化
	
	'manage_log'			=>	1,	//日志管理
	'database'				=>	1,	//数据库管理
	'phpmyadmin'			=>	1,	//phpmyadmin
);

$manage_menu=array(
	'set'		=>	array(
						'online'					=>	array('set/online.php', 'set.online.online_manage'),
						'global_set'			=>	array('set/global.php', 'set.global.set'),
						'send_mail_set'		=>	array('set/send_mail.php', 'set.send_mail.set'),
					),
	'info'		=>	array(
						'info_category'		=>	array('info/category.php', 'info.category_manage'),
						'info'					=>	array('info/index.php', 'info.info_manage'),
					),
	'info2'		=>	array(
						'info2_category'		=>	array('info2/category.php', 'info2.category_manage'),
						'info2'					=>	array('info2/index.php', 'info2.info2_manage'),
					),
	'instance'	=>	array(
						'instance_category'	=>	array('instance/category.php', 'instance.category_manage'),
						'instance'				=>	array('instance/index.php', 'instance.instance_manage'),
					),
	'download'	=>	array(
						'download_category'	=>	array('download/category.php', 'download.category_manage'),
						'download'				=>	array('download/index.php', 'download.download_manage'),
					),
	'article'	=>	array(
						'article_group_0'		=>	array('article/index.php?GroupId=0', 'article.group_0'),
						'article_group_1'		=>	array('article/index.php?GroupId=1', 'article.group_1'),
						'article_group_2'		=>	array('article/index.php?GroupId=2', 'article.group_2'),
						'article_group_3'		=>	array('article/index.php?GroupId=3', 'article.group_3'),
						'article_group_4'		=>	array('article/index.php?GroupId=4', 'article.group_4'),
						'article_group_5'		=>	array('article/index.php?GroupId=5', 'article.group_5'),
						'article_group_6'		=>	array('article/index.php?GroupId=6', 'article.group_6'),
					),
	'product'	=>	array(
						'product_color'		=>	array('product/color.php', 'product.color_manage'),
						'product_size'			=>	array('product/size.php', 'product.size_manage'),
						'product_brand'		=>	array('product/brand.php', 'product.brand_manage'),
						'product_category'	=>	array('product/category.php', 'product.category_manage'),
						'product'				=>	array('product/index.php', 'product.product_manage'),
					),
	'feedback'	=>	array(
						'feedback'				=>	array('feedback/index.php', 'feedback.feedback_manage'),
						'product_inquire'		=>	array('product_inquire/index.php', 'product_inquire.product_inquire_manage'),
						'product_review'		=>	array('product_review/index.php', 'product_review.product_review_manage'),
						'newsletter'			=>	array('newsletter/index.php', 'newsletter.newsletter_manage'),
						'send_mail'			=>	array('send_mail/index.php', 'send_mail.send_mail_system'),
					),
	'admin'		=>	array(
						'admin'					=>	array('admin/index.php', 'admin.admin_manage'),
						'admin_update_pwd'	=>	array('admin/password.php', 'admin.update_password'),
					),
	'other'		=>	array(
						'country'				=>	array('country/index.php', 'country.country_manage'),
						'ad'						=>	array('ad/index.php', 'ad.ad_manage'),
						'survey'					=>	array('survey/index.php', 'survey.survey_manage'),
						'links'					=>	array('links/index.php', 'links.links_manage'),
						'translate'				=>	array('translate/index.php', 'translate.translate_manage'),
						'search_keyword'		=>	array('search_keyword/index.php', 'search_keyword.search_keyword_manage'),
						'html'					=>	array('html/index.php', 'html.html_manage'),
					),
	'ext'		=>	array(
						'manage_log'			=>	array('manage_log/index.php', 'manage_log.log_manage'),
						'database'				=>	array('database/index.php', 'database.database_manage'),
						'phpmyadmin'			=>	array('phpmyadmin/index.php', 'phpmyadmin.phpmyadmin', 1),
					)
);
//*********************************后台左菜单显示相关参数（start here）**************************************************************
?>