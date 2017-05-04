<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"E:\PYS\mengchong\public/../application/index\view\service\map.html";i:1492823537;}*/ ?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
        body, html {width: 100%;height: 100%;margin:0;font-family:"微软雅黑";}
        #allmap{width:100%;height:500px;}
        p{margin-left:5px; font-size:14px;}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=b6dArrybSliYCnr6PIPKw3HpglGnUpv6"></script>
    <title>根据关键字本地搜索</title>
</head>
<body>
<div id="allmap"></div>
<p>返回北京市“<?php echo $add?>”关键字的检索结果，并展示在地图上</p>
<input type="hidden" id="add" value="<?php echo $add?>">

</body>
</html>
<script src="__ROOT__/js/jquery.min.js"></script>
<script type="text/javascript">
    // 百度地图API功能
    var add = $("#add").val();
//    alert(add);
    var map = new BMap.Map("allmap");
    map.centerAndZoom(new BMap.Point(116.404, 39.915), 11);
    var local = new BMap.LocalSearch(map, {
        renderOptions:{map: map}
    });
    local.search(add+"宠物");
</script>
