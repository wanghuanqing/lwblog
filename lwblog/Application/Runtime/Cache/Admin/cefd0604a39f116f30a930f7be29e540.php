<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>兼职信息列表</title>
</head>

<body>
    <div id="dataContent" class="">
        <!--内容区域 ajax获取-->
        <table style="" class="layui-table" lay-even="">
            <colgroup>
                <col width="180">
                <col>
                <col width="150">
                <col width="180">
                <col width="90">
                <col width="90">
                <col width="50">
                <col width="50">
            </colgroup>
            <thead>
                <tr>
                    <th>id</th>
                    <th>标题</th>
                    <th>作者</th>
                    <th>时间</th>
                    <th>状态</th>
                    <th colspan="2">操作</th>
                </tr>
            </thead>
            <tbody>
                <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["id"]); ?></td>
                        <td><?php echo ($vo["title"]); ?></td>
                        <td><?php echo ($vo["author"]); ?></td>
                        <td><?php echo ($vo["rtime"]); ?></td>
                        <td><?php echo ($vo["type"]); ?></td>

                        <td>
                            <a href="<?php echo U('index/editjob',array('id'=>$vo['id']));?>" class="layui-btn layui-btn-small layui-btn-normal"><i class="layui-icon">&#xe642;编辑</i></a>
                        </td>
                        <td>
                            <!-- 同步 -->
                            <!-- <a href="<?php echo U('index/deleteArticle',array('id'=>$vo['id']));?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;</i></a> -->
                            <!-- 异步 -->
                            <a onclick="delete_job(this)" id="<?php echo ($vo["id"]); ?>" class="layui-btn layui-btn-small layui-btn-danger"><i class="layui-icon">&#xe640;删除</i></a>

                        </td>
                    </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
        <div id="page">
            <?php echo ($page); ?>
        </div>
    </div>
</body>
<script src="/schoolinfo/Public/admin/js/jquery-1.11.1.min.js"></script>
<script>
    function delete_job(obj) {
        var id = obj.id;
        //alert(id);
        $.ajax({
            url: '<?php echo U("index/delete_job");?>',
            type: "post",
            dataType: 'json',
            data: {
                'id': id
            },
            success: function(data) {
                // alert(data.msg);
                if (data.code == 200) {
                    alert(data.msg);
                    window.location = 'datalist.html'
                } else {
                    alert(data.msg);
                }
            }
        })
    }
</script>

</html>