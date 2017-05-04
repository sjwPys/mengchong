<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:64:"E:\PYS\mengchong\public/../application/admin\view\rbac\user.html";i:1493187012;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <!--<base href="__ROOT__/">-->
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
<form method="post" action="">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 用户列表</strong></div>
        <div class="padding border-bottom">
            <ul class="search">
                <li>
                    <button type="button"  class="button border-green" id="checkall"><span class="icon-check"></span> 全选</button>
                    <button type="submit" class="button border-red"><span class="icon-trash-o"></span> 批量删除</button>
                </li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="120">ID</th>
                <th>用户名</th>
                <th>用户角色</th>
                <th>登陆时间</th>
                <th>是否启用</th>
                <th>操作</th>
            </tr>
            <?php foreach($data as $k=>$v){?>
            <tr>
                <td><input type="checkbox" name="id[]" value="1" />
                    <?php echo $v['uid']?></td>
                <td><?php echo $v['uname']?></td>
                <td><?php echo $v['roleName']?></td>
                <td><?php echo $v['login_time']?></td>
                <td>
                    <?php if($v['status'] == 1){?>启用
                    <?php }else{?>停用
                    <?php }?>
                </td>
                <td>
                    <div class="button-group">
                        <!--<a href="<?php echo url('rbac/userRole','id = 1'); ?>">分配角色</a>-->
                        <a class="button border-red" href="">编辑</a>
                        <a class="button border-red" href="javascript:void(0)" onclick="return del(1)">
                            <span class="icon-trash-o"></span> 删除
                        </a>
                    </div>
                </td>
            </tr>
            <?php }?>
            <tr>
                <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">2</a><a href="">3</a><a href="">下一页</a><a href="">尾页</a> </div></td>
            </tr>
        </table>
    </div>
</form>
<script type="text/javascript">

    function del(id){
        if(confirm("您确定要删除吗?")){

        }
    }

    $("#checkall").click(function(){
        $("input[name='id[]']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    })

    function DelSelect(){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){
            var t=confirm("您确认要删除选中的内容吗？");
            if (t==false) return false;
        }
        else{
            alert("请选择您要删除的内容!");
            return false;
        }
    }

</script>
</body></html>