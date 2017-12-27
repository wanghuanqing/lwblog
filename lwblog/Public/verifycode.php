<?php
//开启session支持
session_start();
//16进制数:123456789abcdef 
//比如我们的需求是有一个4位验证码。最好能随机生成四个字符然后连接成一个验证码.$_COOKIE
$str = "";
//随机数 产生验证码
for($i=0;$i<4;$i++){
    $str .= dechex(mt_rand(1,15));
}
$_SESSION['verify'] = $str;

header("Content-type:image/png");
$im = imagecreatetruecolor(50,35);
$blue = imagecolorallocate($im,75,243,245);
imagefill($im,0,0,$blue);
$white = imagecolorallocate($im,255,255,255);
imagestring($im,5,10,10,$str,$white);
imagepng($im);
imagedestroy($im);
