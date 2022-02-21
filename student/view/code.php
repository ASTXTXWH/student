<?php
    session_start();
 
    $image = imagecreatetruecolor(100,30);   
    $bgcolor = imagecolorallocate($image,200,200,200);
    imagefill($image, 0, 0, $bgcolor);
    
    $content = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $captcha1 = "";
    for ($i = 0; $i < 4; $i++) {
        $fontsize=10;
        $fontcolor=imagecolorallocate($image, mt_rand(0, 120), mt_rand(0, 120), mt_rand(0, 120));
        $fontcontent=substr($content, mt_rand(0, strlen($content)), 1);
        $captcha1 .= $fontcontent;
        $x=($i * 100 / 4) + mt_rand(5, 10);
        $y=mt_rand(5, 10);
        imagestring($image, $fontsize, $x, $y, $fontcontent, $fontcolor);
    }
    $_SESSION["captcha1"] = $captcha1;

    for ($$i = 0; $i < 200; $i++) {
        $l1=imagecolorallocate($image, mt_rand(50, 200), mt_rand(50, 200), mt_rand(50, 200));
        imagesetpixel($image, mt_rand(1, 99), mt_rand(1, 29), $l1);
    }
    for ($i = 0; $i < 3; $i++) {
        $l2=imagecolorallocate($image, mt_rand(50, 200), mt_rand(50, 200), mt_rand(50, 200));
        imageline($image, mt_rand(1, 99), mt_rand(1, 29), mt_rand(1, 99), mt_rand(1, 29), $l2);
    }
    
    header('Content-type: image/png');
    imagepng($image);
    imagedestroy($image);
?>