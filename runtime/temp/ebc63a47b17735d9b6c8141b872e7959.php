<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\PYS\mengchong\public/../application/index\view\bbs\zhengwen.html";i:1493206134;}*/ ?>

<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<link rel="apple-touch-startup-image" href="__ROOT__/qq/zn/icon.png" />
<link rel="apple-touch-icon" href="__ROOT__/qq/zn/icon57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="__ROOT__/qq/zn/icon72.png" />
<link rel="apple-touch-icon" sizes="114x114" href="__ROOT__/qq/zn/icon114.png" />
<link rel="apple-touch-icon" sizes="144x144" href="__ROOT__/qq/zn/icon144.png" />
<link href="__ROOT__/qq/zn/style/common.css" rel="Stylesheet" type="text/css" />
<link href="__ROOT__/qq/zn/style/topic.css" rel="Stylesheet" type="text/css" />
<link href="__ROOT__/qq/zn/style/smile.css" rel="Stylesheet" type="text/css" />
<link href="__ROOT__/qq/zn/style/imageUpload.css" rel="Stylesheet" type="text/css" />
<title>萌宠 正文页</title>
<meta name="keywords" content="萌宠" />
<meta name="description" content="萌宠" />
</head>
<body>

<script type="text/javascript" src="__ROOT__/qq/zn/script/zepto.min.js"></script>
<script type="text/javascript" src="__ROOT__/qq/zn/script/common.js"></script>

<div id="dd_more">
	<a href="liebiao.html" class="dd_bt1 dd_bt">全部圈子</a>
	<a rel="nofollow" href="#" class="dd_bt2 dd_bt">我的圈圈</a>
	<a rel="nofollow" href="#" class="dd_bt3 dd_bt">我的好友</a>
	<a rel="nofollow" href="#" class="dd_bt4 dd_bt">退出登陆</a>
</div>
<div id="dd_msg">
		<script type="text/javascript" src="__ROOT__/qq/zn/script/msg.js"></script>
	<div class="msgLoading"></div>
	<p class="tC"><a href="../ShowMessage.html">查看更多&gt;</a></p>
</div>
<header id="header" class="ch m">

		<a rel="nofollow" href="javascript:;" id="returnq" onclick="history.back()"><em>返回</em></a>

	<?php if($state==1): ?>
	<!--{}-->
	<!--未登录-->
	<div class="nolog">
		<a rel="nofollow" href="<?php echo url('login/login'); ?>">登录</a>
		|
		<a rel="nofollow" href="<?php echo url('login/reg'); ?>">注册</a>
	</div>
	<?php else: ?>
	<div class="nolog">
		欢迎<?php echo $username; ?>
	</div>
	<?php endif; ?>
	
</header>

<section class="m" id="content">

	<!--楼层-->
	<div id="ajaxList">

	<!--楼层-->
	<div class="tItem cnt" quotedCommentId="45470767" id="45470767">
			<a href="../Home/755355.html" class="name"><?php echo $topicdata['tuname']; ?></a>
		<!--<span class="lv">等级</span>-->
			<em class="isLz"></em>
		<div class="tmain">
			<p style="font-family: 黑体;, tahoma, helvetica, arial, sans-serif;line-height:21px;background-color:#ffffff;color: #4bb1cf">【<?php echo $topicdata['topic']; ?>】</p><p style="font-family:宋体, tahoma, helvetica, arial, sans-serif;line-height:21px;background-color:#ffffff;color: #00E8D7"><?php echo $topicdata['tcontents']; ?></p>
		</div>
		<a href="javascript:void(0);" class="rbt wb" notClick="true">看看回复</a>
		<span class="msg"><?php echo $topicdata['time']; ?></span>
		<br class="c"/>
			<!--楼中楼内容-->
			<div class="lzl hid">
				<em class="ico"></em>
				<!--刷新和收起-->
				<div class="op">
					<a href="javascript:;" class="cl">收起回复</a>
					<!--<a href="javascript:void(0);" data-url="http://m.100bt.com/zn/LoadReply.html?topicId=10899981&commentId=45470767" class="rf">刷新</a>-->
					<br class="c"/>
				</div>
				<!--楼中楼数据-->
				<ul>
					<?php foreach($replydata as $val): ?>
					<li><span class="msg"><?php echo $val['rtime']; ?></span>&nbsp;|&nbsp;<a href="../Home/755355.html" class="name"><?php echo $val['rname']; ?></a><p style="font-family:宋体, tahoma, helvetica, arial, sans-serif;line-height:21px;background-color:#ffffff;color: #00CC00;"><?php echo $val['rcontents']; ?></p><hr></li>

					<!--<li><p style="font-family:宋体, tahoma, helvetica, arial, sans-serif;line-height:21px;background-color:#ffffff;"><?php echo $val['ruid']; ?></p><p style="font-family:宋体, tahoma, helvetica, arial, sans-serif;line-height:21px;background-color:#ffffff;"><?php echo $val['rcontents']; ?></p><span class="msg"><?php echo $val['rtime']; ?></span></li>-->
					<?php endforeach; ?>
				</ul>

			</div>
			<!--END 楼中楼内容-->
		
	</div>




	</div>
	<!--底部评论-->

	<?php if($state==1): ?>
	<div class="z3" style="text-align:center">
	</div>
	<!--未登录-->

	<?php else: ?>
	<form action="<?php echo url('bbs/addreply'); ?>" method="post">
	<div id="bReply" class="reply">
		<textarea class="editor" placeholder="在这里输入你要发表的内容…" name="rcontents"></textarea>
		<!--<textarea class="editor" placeholder="在这里输入你要发表的内容…" name="rcontentsa" style="height: 30px"></textarea>-->
		<input type="hidden" value=<?php echo $topicdata['tid']; ?> name="rtid">
		<input type="hidden" value=<?php echo $topicdata['tsid']; ?> name="rsid">
		<!-- 用户登录的时候 -->
		<!--木有登录的时候-->

	</div>
	<div class="z3" style="text-align:center">
		<!--<a href="../LoginPage.html" class="bb"></a>-->
		<button class="bb" type="submit">评论</button>
		<button class="gb" type="reset">重置</button>
		&nbsp;
		<!--<a href="../RegisterPage.html" class="gb">重置</a>-->
	</div>
	</form>
	<?php endif; ?>


	<div id="uploadPrew"></div>
</section>

<!--<footer id="footer">-->
 <!--<a href="index.html">首页</a>  <a href="liebiao.html">文章列表页</a>  <a href="zhengwen.html">正文页</a>-->
<!--</footer>-->
<a href="#header" id="bTop" title="返回顶部"></a>

</body>
<script>
	var topicId = "10899981";
	var roleId = "";
	var ttqId = "20";
	//禁封的么?
	function checkForbidInfo(){
		return true;
	};
</script>
<script type="text/javascript" src="__ROOT__/qq/zn/script/smile.js"></script>
<script type="text/javascript" src="__ROOT__/qq/zn/script/imageUpload.js"></script>
<script type="text/javascript" src="__ROOT__/qq/zn/script/topic.js"></script>
<!-- 收藏话题/上传图片的引导脚本 -->

</html>