<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\PYS\mengchong\public/../application/admin\view\rbac\roleNode.html";i:1493204284;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <base href="__ROOT__/admin/">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="css/pintuer.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="js/jquery.js"></script>
    <script src="js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加角色</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="<?php echo url('rbac/ins_rn'); ?>">
            <div class="form-group">
                <div class="label">
                    <label>角色名称：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" value="<?php echo $roleData['rname']?>" disabled='true' />
                    <input type="hidden" class="input w50" value="<?php echo $roleData['rid']?>" name="role_id" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>选择权限：</label>
                </div>
                <div class="field">
                    <?php foreach($nodeData as $k=>$v){?>
                        <input type="checkbox" name="node_id[]" value="<?php echo $v['nid']; ?>" 
                            <?php if(in_array($v['nid'],$data)){
                                echo 'checked';
                            } ?>
                         >
                        <?php echo $v['nname'];}?>
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <button class="button bg-main icon-check-square-o" type="submit"> 添加</button>
                </div>
            </div>
        </form>
    </div>
</div>

</body></html>