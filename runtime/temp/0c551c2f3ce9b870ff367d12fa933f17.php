<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:67:"E:\PYS\mengchong\public/../application/index\view\service\show.html";i:1493002349;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <link rel="stylesheet" type="text/css" href="__ROOT__/css/xiangqing.css"/>
	    <script src="__ROOT__/js/jquery-3.1.1.js"></script>
	</head>
	<body style="background: #f1f1f1;">
		<div class="box">
			<header>
					<div class="h_left">
					<a href="javascript:void(0)" onclick="history.back()"><img src="__ROOT__/images/service/3_03.png"/></a>
				     </div>
				<div class="h_center">
					<h2>商品详情</h2>
				</div>
				<div class="h_right">
					<img src="__ROOT__/images/service/4_03.png"/>
				</div>
			</header>
			<section>
				<div class="list">
					<dl>
						<dt><img src="__ROOT__/images/service/2_03.png"/></dt>
						<dd>
							<h2><?php echo $data['mname']?>(<?php echo $data['maddress']?>)</h2>
							<p><img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
							</p>
							<span>销量<?php echo $data['xiaoliang']?></span>
							<i><em></em><img src="__ROOT__/images/service/5_07.png"/></i>
			            </dd>
					</dl>
				</div>
				<div class="city">
					<div class="c_l">
						<a href="<?php echo url('service/map',['address'=>$data['maddress']]); ?>"><img src="__ROOT__/images/service/5_11.png"/></a>
						<span><?php echo $data['mmessage']?></span>
					</div>
					<div class="c_r">
						<a href="tel://13833830746"><img src="__ROOT__/images/service/5_14.png"/></a>
					</div>
				</div>
				<div class="youhui">
					<h3>优惠信息</h3>
					<div class="y_r">
						<img src="__ROOT__/images/service/2_15.png"/>
						<img src="__ROOT__/images/service/2_18.png"/>
						<img src="__ROOT__/images/service/7_03.png"/>
					</div>
				</div>
				<div class="banner">
					<ul>
						<li class="active"><a href="javacript:;" >服务列表</a></li>
						<li><a href="javacript:;">商户信息</a></li>
						<li><a href="javacript:;">美容师信息</a></li>
						<li><a href="javacript:;">评价</a></li>
					</ul>
				</div>
				<div class="big_s">
				<div class="shop">
					<div class="s_l">
						<ul>
							<li>狗狗洗澡</li>
							<li>狗狗造型</li>
							<li>狗狗SPA</li>
						</ul>
					</div>
					<div class="s_r">
						<div class="s_r_one">
							<h2>标准洗澡</h2>
							<p>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
							</p><span>销量22</span>
						    <div class="price">
						    	<span id="price">35.00</span>
						    	<strong>40</strong>
						    	<button id="pay">购买</button>
						    </div>
						</div>
						<div class="s_r_two" style="display: none;">
							<h2>普通洗澡</h2>
							<p>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
							</p><span>销量22</span>
						    <div class="price">
						    	<span>0.00001起</span>
						    	<strong>40</strong>
						    	<button>购买</button>
						    </div>
						</div>
						<div class="s_r_three" style="display: none;">
							<h2>高级洗澡</h2>
							<p>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
								<img src="__ROOT__/images/service/2_06.png"/>
							</p><span>销量22</span>
						    <div class="price">
						    	<span>5000起</span>
						    	<strong>40</strong>
						    	<button>购买</button>
						    </div>
						</div>
						<div class="s_r_four" style="display: none;">
							<h2>标准洗澡</h2>
							<p><img src="__ROOT__/images/service/2_06.png"/><img src="__ROOT__/images/service/2_06.png"/><img src="__ROOT__/images/service/2_06.png"/><img src="__ROOT__/images/service/2_06.png"/><img src="__ROOT__/images/service/2_06.png"/><img src="__ROOT__/images/service/2_06.png"/></p><span>销量22</span>
						    <div class="price">
						    	<span>100.00起</span>
						    	<strong>40</strong>
						    	<button>购买</button>
						    </div>
						</div>
					</div>
				</div>
					<div class="shop_o">
						<hr/>
						<p>营业时间：<?php echo $data['mtime']?></p>
						<p>停车信息：<?php echo $data['stopcar']?></p>
						<p>网络信息：<?php echo $data['wifi']?></p>
						<hr/>
						<span>商户简介</span><br/>
						<?php echo $data['mcontent']?>

					</div>
					<div class="shop_t">123</div>
					<div class="shop_h">456</div>
				</div>
			</section>
		</div>
	</body>
	<script>
        $(".banner ul li").click(function(){
            var index=$(this).index();
            $(this).addClass('active').siblings().removeClass('active');
            $(".big_s>div").hide().eq(index).show();
        })
	$(".shop ul li").click(function(){
		var index=$(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$(".shop .s_r>div").hide().eq(index).show();
		
	})
		$("#pay").click(function () {
			var price = $('#price').html();
			alert(price)
        })


	</script>
</html>
