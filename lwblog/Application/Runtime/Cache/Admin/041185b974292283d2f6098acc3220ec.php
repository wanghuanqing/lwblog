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
            margin: 329px auto;
            border: 1px solid rgb(219, 207, 207);
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
            background: #009688;
            margin: 0 30%;
        }
        
        #messagename,
        #messagepassword,
        #messageverify {
            color: red;
        }
    </style>
</head>

<body style="background:rgb(219, 207, 207)">
    <div class="login-item">
        <form action="<?php echo U('index/loginadmin');?>" method="post">
            <div class="item">
                <label>账号:</label>
                <input type="text" name="name" id="name" /><span id="messagename"></span>
            </div>
            <div class="item">
                <label>密码:</label>
                <input type="password" name="password" id="password" /><span id="messagepassword"></span>
            </div>
            <!-- <div class="item">
                <label>验证码:</label>
                <input type="text" name="verify" id="verify" />
                <span><img id="sverify" src="verification.php"/></span><span id="messageverify"></span>
            </div> -->
            <div class="item">
                <button id="btn" type="submit">提交</button>
            </div>
        </form>
    </div>
</body>


</html>