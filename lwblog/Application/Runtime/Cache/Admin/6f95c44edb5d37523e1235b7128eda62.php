<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>老王博客-后台管理中心</title>
    <link rel="stylesheet" href="/blog2/Public/Admin/layui/css/layui.css">
    <link rel="stylesheet" href="/blog2/Public/Admin/css/global.css">
    <link rel="stylesheet" href="/blog2/Public/Admin/css/page.css">
    <script type="text/javascript" src="/blog2/Public/Admin/layui/layui.js"></script>
    <style>
        #classify a {
            display: block;
            float: left;
            width: 85px;
            height: 40px;
        }
        
        h2 {
            color: #009688;
        }
        
        #add {
            display: block;
            /* width: 70px;height: 35px; */
            width: 70px;
            height: 30px;
            margin-right: 20px;
            background: #009688;
            margin-left: 90%;
            text-align: center;
            padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="layui-tab layui-tab-brief main-tab-container">
        <div class="layui-tab" style="padding:10px;width:100%;">
            <ul class="layui-tab-title" style="width:300px;  margin:0px auto;">
                <li class="layui-this">
                    <h2><a href="aboutauthor.html">管理员</a></h2>
                </li>
            </ul>
            <div class="layui-tab-content">
                <form class="layui-form">
                    <input type="text" id="id" value="<?php echo ($data["id"]); ?>" hidden>
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名</label>
                        <div class="layui-input-block">
                            <input type="text" name="name" id="name" value="<?php echo ($data["name"]); ?>" lay-verify="required" autocomplete="off" class="layui-input">

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码</label>
                        <div class="layui-input-block">
                            <input type="password" name="password" id="password" value="<?php echo ($data["password"]); ?>" lay-verify="required" autocomplete="off" class="layui-input">

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button class="layui-btn" lay-submit="" lay-filter="feedback_edit" id="admin_edit" type="button">修改</button>
                            <a class="layui-btn" lay-filter="feedback_edit" href="javascript:history.back(-1)">返回</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="/blog2/Public/admin/js/jquery-1.11.1.min.js"></script>
    <script>
        $(function() {

            // alert('发布兼职');
            $('#admin_edit').click(function() {
                var name = $('#name').val();
                var password = $('#password').val();
                var id = $('#id').val();
                // alert(infomation+introduction+id); 
                $.ajax({
                    url: '<?php echo U("admin/admin_edit");?>',
                    type: 'post',
                    dataType: 'json',
                    data: {
                        'password': password,
                        'name': name,
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


</body>

</html>