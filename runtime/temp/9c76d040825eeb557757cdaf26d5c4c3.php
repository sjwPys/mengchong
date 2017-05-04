<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"E:\PYS\mengchong\public/../application/admin\view\weixin\add.html";i:1493259896;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="__ROOT__/admin/css/pintuer.css">
<link rel="stylesheet" href="__ROOT__/admin/css/admin.css">
<script src="__ROOT__/admin/js/jquery.js"></script>
<script src="__ROOT__/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加内容</button>
  </div>
  <table class="table table-hover text-center">
    <tr>
      <th width="10%">ID</th>
      <th width="20%">标题</th>
      <th width="15%">图片url</th>
      <th width="20%">描述</th>
      <th width="15%">操作</th>
    </tr>
   
<?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?>

    <tr>
      <td><><?php echo $user['id']; ?></td>     
      <td><img src="images/11.jpg" alt="" width="120" height="50" /></td>     
      <td><?php echo $user['title']; ?></td>
      <td><img src="<?php echo $user['pic_url']; ?>" width="100px"></td>
      <td><?php echo $user['content']; ?></td>
      <td><div class="button-group">
      <a class="button border-main" href="#add"><span class="icon-edit"></span> 修改</a>
      <a class="button border-red" href="<?php echo url('weixin/del',['id'=>$user['id']]); ?>" onclick="return del(1,1)"><span class="icon-trash-o"></span> 删除</a>
      </div></td>
    </tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
    <tr>
      <td colspan="5" align="center"><?php echo $data->render(); ?></td>
    </tr>
    
  </table>
  


</div>
<script type="text/javascript">
function del(id,mid){
  if(confirm("您确定要删除吗?")){
  
  }
}
</script>
<div class="panel admin-panel margin-top" id="add">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="index">    
      <div class="form-group">
        <div class="label">
          <label>标题：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="title" data-validate="required:请输入标题" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>图片URL：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="pic_url" value=""  />
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="content" style="height:120px;" value=""></textarea>
          <div class="tips"></div>
        </div>
      </div>
      
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>