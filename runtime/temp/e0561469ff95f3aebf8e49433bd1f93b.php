<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\PYS\mengchong\public/../application/index\view\login\login.html";i:1493862450;}*/ ?>
<?php
use think\Session;
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="m.boqii.com">
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>&#x6C38;&#x6500;&#x96C6;&#x56E2;&#x7528;&#x6237;&#x767B;&#x5F55;</title>
<script type="text/javascript">
        (function(){
            var bp = document.createElement('script');
            var curProtocol = window.location.protocol.split(':')[0];
            if (curProtocol === 'https') {
                bp.src = '__ROOT__/login/zz.bdstatic.com/linksubmit/push.js'/*tpa=https://zz.bdstatic.com/linksubmit/push.js*/;
            }
            else {
                bp.src = '__ROOT__/login/push.zhanzhang.baidu.com/push.js'/*tpa=http://push.zhanzhang.baidu.com/push.js*/;
            }
            bp.async = "async";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(bp, s);
        })();
        </script>
        <link href="__ROOT__/login/css/fc10f6847e0c38498fbb.vendors.min.css"  rel="stylesheet">
        <link href="__ROOT__/login/css/6c0c6d59e6f7da928086.login.min.css"  rel="stylesheet"></head><body>
        <span id="session">
        <?php $session = Session::get('url'); ?>
        </span>
        <form action="" id="forms"></form>
        <div id="wrap"><div class="list_top box_shadow"><div class="top_back"><a href="javascript:;" onclick="history.back()"></a></div><div class="details_title">&#x7528;&#x6237;&#x767B;&#x5F55;</div>
        <div class="add_bc"><a href="<?php echo url('login/reg'); ?>" class="dl register_user">&#x6CE8;&#x518C;</a></div></div><div class="add_address_body">
        
        <div class="reg"><div class="tel"><em class="user"></em>

        <input type="text" name="UserName" id="uname" placeholder="&#x624B;&#x673A;&#x53F7;/&#x90AE;&#x7BB1;"></div>

        <div class="pass">
        <em></em>

        <input type="password" name="Password" id="upassword" placeholder="&#x5BC6;&#x7801;">
    
        <p class="isSee"></p>
        </div>
        </div>

        <div class="reg_btn"><a href="javascript:void(0)" id="login_btn">&#x767B; &#x5F55;</a></div>
        <div class="login_pass"><a href="<?php echo url('login/login_sms'); ?>" >&#x77ED;&#x4FE1;&#x9A8C;&#x8BC1;&#x7801;&#x767B;&#x5F55;</a>|<a href="<?php echo url('login/find_password'); ?>" >&#x5FD8;&#x8BB0;&#x5BC6;&#x7801;&#xFF1F;</a></div></div><div class="thirdLogin weibo"><div class="thirdTitle"><span class="loginName">&#x4F7F;&#x7528;&#x5FAE;&#x535A;&#x8D26;&#x53F7;&#x767B;&#x5F55;</span></div>
        <div class="thirdIcon">
        <a href="javascript:void(0);" class="sina" id="sina">
        <span></span>
        </a></div></div>
        <div class="thirdLogin weixin"><div class="thirdTitle"><span class="loginName">&#x4F7F;&#x7528;&#x5FAE;&#x4FE1;&#x5FEB;&#x6377;&#x767B;&#x9646;</span></div><div class="thirdIcon"><a href="javascript:;" class="weichat_login"><span></span></a></div></div><div class="overlay"><section class="modal modal-normal"><div class="modal-bd">&#x8BF7;&#x9000;&#x51FA;&#x65E0;&#x75D5;&#x6D4F;&#x89C8;&#x6A21;&#x5F0F;</div><div class="modal-ft"><a href="javascript:;" class="left-btn">&#x786E;&#x5B9A;</a></div></section></div></div>
        <script data-fixed="" defer="defer" async="true" type="text/javascript" src="__ROOT__/login/7xq22v.com2.z0.glb.qiniucdn.com/h5shopga.js" ></script>
        <script type="text/javascript">var _py = _py || []; _py.push(['a', '83s..kWM5IA5gIUIhz2_VJGhaYX']);
   _py.push(['domain','http://s.boqii.com/stats.ipinyou.com']); _py.push(['e','']);
   -function(d) {
     var s = d.createElement('script'),
     e = d.body.getElementsByTagName('script')[0];
     e.parentNode.insertBefore(s, e),
     f = 'https:' == location.protocol;
     s.src = (f ? 'https' : 'http') + '://'+(f?'http://s.boqii.com/fm.ipinyou.com':'http://s.boqii.com/fm.p0y.cn')+'/j/adv.js';
   }(document);
   </script>
   <noscript>
   <img src="__ROOT__/login/stats.ipinyou.com/adv.gif-a=83s..kWM5IA5gIUIhz2_VJGhaYX&e=.gif" style=""></noscript>
   <script src="js/fc194781f111c9adf2b8.vendors.min.js" ></script>
   <script src="js/a0163908cee0a6e2bd22.login.min.js" ></script></body></html>
   <script src="__ROOT__/js/jquery-2.1.1.min.js"></script>
   <script>
        $('#login_btn').click(function(){
            var session = $('#session').html();
            // alert(session);return;
                if(session != '')
                    {
                        location.href="__ROOT__/index.php"+session;
                        // return true;
                    }
            var uname = $('#uname').val();
            var upassword = $('#upassword').val(); 
            $.ajax({
                type:'post',
                url:"<?php echo URL('login/login_do'); ?>",
                data:{'uname':uname,'upassword':upassword},
                dataType:'json',
                success:function(msg){
                   // alert(msg);
                    // alert(msg);return;
                    if (msg == 1) 
                    {
                        // alert('登陆成功');
                        location.href="<?php echo url('index/index'); ?>";
                    }
                    else if (msg == 3) 
                    {
                        alert('未注册，请注册');
                        // location.href="<?php echo url('login/reg'); ?>";
                        // return false;
                    }
                    else if (msg == 2)
                    {
                        alert('用户名或密码输入错误，请重新输入');
                        location.href="<?php echo url('login/login'); ?>";
                    }
                    else
                    {
                        alert('用户名或密码输入错误，请重新输入');
                        location.href="<?php echo url('login/login'); ?>";
                    }  
                }
            })
        })

        $('#sina').click(function(){
            // alert(1);
            window.location.href="<?php echo url('index/login/reg'); ?>";
        })
   </script>