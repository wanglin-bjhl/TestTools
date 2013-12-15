<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="keywords" content="美女主播,美女视频,美女直播,秀场,视频聊天,视频交友,美女视频聊天,美女视频直播秀"/>
	<meta name="description" content="秀800美女主播导航是一站式真人互动视频直播导航网站。汇集9158,六间房,56我秀,酷狗繁星,激动星秀等众多知名网站的实时美女视频直播信息。支持数十万人同时在线视频聊天、在线K歌跳舞、视频交友。赶快加入，免费赏鉴万千美女更能在线与美女在线聊天。" /> 
	<meta name="robots" content="<?php Yii::getPathOfAlias('webroot')?>/robots.txt" />
	
	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<!-- meilizhubo -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xiu800/base_min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/xiu800/page_index.css" />
	
	<?php
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/jquery.js");
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/jquery.cookie.js");
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/xiu800_index.js");
	?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">
	<div id="header">
		<!-- div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>  -->
		<div class="top-tool" id="suggestAddToFav">
			<div class="user-tool-bar">
				<a class="btn-close" href="javascript:void(0);" onclick="closeSuggestAddToFav();">关闭</a>
				按<span class="fcql fwb"> Ctrl+D </span>,把<span class="fwb">秀800</span>放入收藏夹，或点击 <a href="http://xiu800.cn/downloadDesktopUrl.html" title="下载后请将图标复制到您的桌面" class="fcql fwb ftu">+桌面图标</a>，赏鉴万千美女！ <a  class="fcw ftu" href="javascript:neverShowSuggestAddToFav();">不再提醒</a>
			</div>
		</div>
	</div><!-- header -->

	<!-- 
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Zhubo', 'url'=>array('/zhubo/admin')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	 -->
	</div><!-- mainmenu -->
	<!-- 面包屑导航
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?>
	<?php endif?>
	-->
	<?php echo $content; ?>

	<div class="clear"></div>
	
	<a id="returnTop" href="javascript:void(0);" title="回到顶部" onfocus="this.blur()">回到顶部</a>
	<?php
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/xiu800_index.js");
		Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl."/js/xiu800_show.js");
	?>
	<!-- Baidu Button BEGIN -->
	<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=7&amp;mini=1&amp;pos=left&amp;uid=1358571" ></script>
	<script type="text/javascript" id="bdshell_js"></script>
	<script type="text/javascript">
		var bds_config={
			"bdTop":205,
			"bdText":"快来快来,我发现了一个好网站哦~全是美女,还都直播,实时的哦~~~http://xiu800.cn @秀800 ",
			"bdDesc":"秀800美女主播导航是一站式真人互动视频直播导航网站。汇集9158,六间房,56我秀,酷狗繁星,激动星秀等众多知名网站的实时美女视频直播信息。支持数十万人同时在线视频聊天、在线K歌跳舞、视频交友。赶快加入，免费赏鉴万千美女更能在线与美女在线聊天。"
		};
		document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
	</script>
	<!-- Baidu Button END -->
	
	<script id="bdaddtocite_shell"></script>
	<script>
		var bdShare_config_addtocite = {
			"type":"slide"
			,"pos":"right"
			,"color":"darkblue"
			,"top":"205"
			,"uid":"1358571"
		};
		document.getElementById("bdaddtocite_shell").src="http://bdimg.share.baidu.com/static/js/addtocite_shell.js?t=" + Math.ceil(new Date()/3600000);
	</script>
	<script type="text/javascript">
		var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
		document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F3b2f0cbc562eba2a7a6ee8de0c0da981' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-37058206-1']);
		_gaq.push(['_trackPageview']);
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>

	<div id="footer">
		<div class="foot-box clear">
		<div class="t-links">
			<dl>
				<dt>友情链接</dt>
				<dd>
					<a href="http://mm.56.com/" target="_blank" title="美女主播">美女主播</a>
				</dd>
				<dd>
					<a href="http://xiu.56.com/" target="_blank" title="我秀">我秀</a>
				</dd>
				<dd>
					<a href="http://www.6.cn/" target="_blank" title="6间房">6间房</a>
				</dd>
				<dd>
					<a href="http://x.joy.cn/" target="_blank" title="星秀">星秀</a>
				</dd>
				<dd>
					<a href="http://fanxing.kugou.com/" target="_blank" title="酷狗繁星">酷狗繁星</a>
				</dd>
				<dd>
					<a href="http://www.5bo.com/" target="_blank" title="5BO">5BO</a>
				</dd>
				<dd>
					<a class="ftu" href="mailto:sites@xiu800.cn?subject=申请友情链接：贵网站名称" target="_blank" title="申请友链">[+申请友链]</a>
				</dd>
			</dl>
		</div>
		<div class="t-copy">
			<div class="t-share">
				<a href="http://weibo.com/xiu800" target="_blank"><img class="i-sinawb" src="<?php Yii::getPathOfAlias('webroot')?>/images/transparent.gif" alt="新浪微博" /></a>
				<a href="http://t.qq.com/xiu800" target="_blank"><img class="i-txwb" src="<?php Yii::getPathOfAlias('webroot')?>/images/transparent.gif" alt="腾讯微博" /></a>
			</div>
			<p>© 2012-2021 meilizhubo.CN<br />
				All rights reserved. <br />
				京ICP备12050577号
			</p>
		</div>
	</div>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>