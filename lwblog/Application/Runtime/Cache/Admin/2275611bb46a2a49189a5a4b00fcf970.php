<?php if (!defined('THINK_PATH')) exit();?><!-- <!DOCTYPE html>
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
            margin: 80px auto;
            border: 1px solid rgb(219, 207, 207);
        }
        
        .item {
            font-size: 18px;
            width: 265px;
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
            border: none;
            width: 95px;
            height: 35px;
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
    <h1 style="font-size: 50px;
    width: 50%;
    margin: 200px auto 0px;
    text-align: center;">管理员登录</h1>
    <div class="login-item">
        <form action="<?php echo U('admin/loginadmin');?>" method="post">
            <div class="item">
                <label>账号:</label>
                <input type="text" name="name" id="name" /><span id="messagename"></span>
            </div>
            <div class="item">
                <label>密码:</label>
                <input type="password" name="password" id="password" /><span id="messagepassword"></span>
            </div>
            <div class="item">
                <button id="btn" type="submit">登录</button>
            </div>
        </form>
    </div>
</body>


</html> -->


<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>login</title>
<link rel="stylesheet" type="text/css" href="/blog2/Public/admin/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="/blog2/Public/admin/css/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="/blog2/Public/admin/css/component.css" />
</head>
<body>
		<div class="container demo-1">
			<div class="content">
				<div id="large-header" class="large-header">
					<canvas id="demo-canvas"></canvas>
					<div class="logo_box">
						<h3>欢迎你</h3>
						<form action="<?php echo U('admin/loginadmin');?>" method="post" name="f" >
							<div class="input_outer">
								<span class="u_user"></span>
								<input type="text" name="name" id="name" class="text" style="color: #FFFFFF !important"  placeholder="请输入账户">
							</div>
							<div class="input_outer">
								<span class="us_uer"></span>
								<input  name="password" id="password" class="text" style="color: #FFFFFF !important; position:absolute; z-index:100;"value="" type="password" placeholder="请输入密码">
							</div>
                            <div class="mb2">
                                <!-- <a class="act-but submit" href="javascript:;" style="color: #FFFFFF">登录</a> -->
                                <button class="act-but submit" style="color: #FFFFFF" id="btn" type="submit">登录</button>
                
                            </div>
						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<script src="/blog2/Public/admin/js/TweenLite.min.js"></script>
		<script src="/blog2/Public/admin/js/EasePack.min.js"></script>
		<script src="/blog2/Public/admin/js/rAF.js"></script>
		<script src="/blog2/Public/admin/js/demo-1.js"></script>
</div>
	</body>
</html>