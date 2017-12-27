<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>编辑兼职信息</title>
</head>

<body>
    <form>
        <div class="item">
            <label>标题:</label>
            <input type="text" name="title" id="title" value="<?php echo ($data["title"]); ?>" />
        </div>
        <div class="item">
            <label>作者:</label>
            <input type="text" name="author" id="author" value="<?php echo ($data["author"]); ?>" />
        </div>
        <div class="item">
            <label>发布时间:</label>
            <input type="text" name="rtime" id="rtime" value="<?php echo ($data["rtime"]); ?>" />
        </div>
        <div class="item">
            <label class="layui-form-label">兼职内容</label>
            <div class="layui-input-block">
                <textarea id="content" name="content" class="layui-textarea"><?php echo ($data["content"]); ?></textarea>
            </div>
        </div>
        <label class="layui-form-label">状态</label>
        <div class="layui-input-inline">
            <select name="city" id="type">
                    <option value="0" selected>发布中</option>
                    <option value="1">已结</option>
                </select>
        </div>
        <div class="item">
            <input type="text" value="<?php echo ($data["id"]); ?>" id="id" hidden>
            <button id="edit_job" type="button">修改</button>
            <button id="delect_job" type="button">删除</button>
        </div>
    </form>
</body>
<script src="/uu/Public/admin/js/jquery-1.11.1.min.js"></script>
<script>
    $(function() {

        // alert('发布兼职');
        $('#edit_job').click(function() {
            var title = $('#title').val();
            var author = $('#author').val();
            var rtime = $('#rtime').val();
            var content = $('#content').val();
            var id = $('#id').val();
            var type = $("select[id='type']").val();
            $.ajax({
                url: '<?php echo U("index/edit_job");?>',
                type: 'post',
                dataType: 'json',
                data: {
                    'title': title,
                    'author': author,
                    'rtime': rtime,
                    'content': content,
                    'type': type,
                    'id': id
                },
                success: function(data) {
                    if (data.code == 200) {
                        alert(data.msg);
                    } else {
                        alert(data.msg);
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            })
        })

    })
</script>

</html>