<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/home.css">
    <script type="text/javascript" src="../../js/shrink.js"></script>   
</head>
<body>
    <div class="bodydata">
        <div class="upper">
            <img src="../../images/home.png" alt="后台"><span class="middle">网站后台</span>
            <div class="rbom">
                <img src="../../images/homename.png" alt="用户">
                <span class="tuser">登录用户:</span><span class="tname"><?php echo $_GET['name']?></span>
                <img src="../../images/quit.png" alt="退出" onclick="quitlogin()">   
                <a href="../../login.php" name="quit">退出</a>
            </div>
        </div>
        <div class="margin-main">
            <div class="margin-top">
                管理菜单
            </div>
            <div class="sidebar-list">
                <ul class="classify">
                    <li>
                        <a href="javascript:divhidden();" id="btnhref" class="btna">
                            <img src="../../images/hname.png" alt="信息" class="lcont">
                                <span class="liright">用户信息</span>
                            <img src="../../images/upward.png" alt="向上" id="du">
                        </a>
                        <div id="btnshow" style="display: block;">
                            <ul class="classifys">
                                <li>
                                    <a href="./updateuser.html" target="x">
                                        <img src="../../images/update.png" alt="修改">
                                        <span class="liright">信息修改</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./updatepwd.php" target="x">
                                        <img src="../../images/update.png" alt="修改">
                                        <span class="liright">密码修改</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="bodyhtml">
            <iframe width="1300" height="650" name="x" scrolling= "auto " frameborder= "0 ">
		    </iframe>
        </div>
    </div>
</body>
<script>
// alert('请尽快修改密码');
    function divShow(){
    document.getElementById("btnshow").style.display="block";
    document.getElementById("du").src="../../images/upward.png";
    document.getElementById("btnhref").href ="javascript:divhidden()";
}
function divhidden(){
    document.getElementById("btnshow").style.display="none";
    document.getElementById("du").src="../../images/down.png";
    document.getElementById("btnhref").href ="javascript:divShow()"; 
}
</script>
</html>