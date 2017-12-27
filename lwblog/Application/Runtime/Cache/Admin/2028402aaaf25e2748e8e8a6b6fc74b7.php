<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>登录</title>
    <style>
        .login-item {
            width: 500px;
            height: 250px;
            margin: 50px auto;
            border: 1px solid black;
        }
        
        .item {
            font-size: 18px;
            width: 350px;
            height: 50px;
            line-height: 25px;
            margin: 0 auto;
            margin-top: 15px;
        }
        
        .item input {
            height: 28px;
            margin-left: 20px;
        }
        
        .item img {
            margin-bottom: -12px;
        }
        
        .item button {
            width: 80px;
            height: 28px;
        }
        
        #messagename,
        #messagepassword,
        #messageverify {
            color: red;
        }
    </style>
</head>

<body>
    <div class="login-item">
        <form id="form" action="<?php echo U('student/addstudent');?>" method="post">
            <div class="item">
                <label>用户名:</label>
                <input type="text" name="name" id="name" /><span id="messagename"></span>
            </div>
            <div class="item">
                <label>手机号：</label>
                <input type="text" name="tel" id="tel" /><span id="messagetel"></span>
            </div>
            <div class="item">
                <label>密码:</label>
                <input type="password" name="password" id="password" /><span id="messagepassword"></span>
            </div>
            <div class="item">
                <label>确认密码:</label>
                <input type="password" name="repassword" id="repassword" /><span id="remessagepassword"></span>
            </div>

            <!-- <div class="item">
                <label>验证码:</label>
                <input type="text" name="verify" id="verify" />
                <span><img id="sverify" src="verification.php"/></span><span id="messageverify"></span>
            </div> -->
            <div class="item">
                <button id="btn" type="button">提交</button>
            </div>
        </form>
    </div>
</body>
<script src="/u/Public/admin/js/jquery-1.11.1.min.js"></script>
<script>
    $(function() {
        $('#btn').click(function() {
            var name = $('#name').val();
            var tel = $('#tel').val();
            var password = $('#password').val();
            var repassword = $('#repassword').val();
            //alert(tel);
            $.ajax({
                url: $('#form').attr('action'),
                type: 'post',
                dataType: 'json',
                data: {
                    'name': name,
                    'tel': tel,
                    'password': password
                },
                success: function(data) {
                    if (data.code == 200) {
                        alert(data.msg);
                        location = 'login.html';
                    } else {
                        alert(data.msg);
                    }
                }
            })
        })
    })
</script>


</html>