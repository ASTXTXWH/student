<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/home.css">
    <script type="text/javascript" src="../js/shrink.js"></script>   
</head>
<body>
    <div class="bodydata">
        <div class="upper">
            <img src="../images/home.png" alt="后台"><span class="middle">网站后台</span>
            <div class="rbom">
                <img src="../images/homename.png" alt="用户">
                <span class="tuser">登录用户:</span><span class="tname"><?php echo $_GET['name']?></span>
                <img src="../images/quit.png" alt="退出" onclick="quitlogin()">   
                <a href="../login.php" name="quit">退出</a>
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
                            <img src="../images/information.png" alt="信息" class="lcont">
                                <span class="liright">学生信息</span>
                            <img src="../images/upward.png" alt="向上" id="du">
                        </a>
                        <div id="btnshow" style="display: block;">
                            <ul class="classifys">
                                <li>
                                    <a href="./query.php" target="x">
                                        <img src="../images/query.png" alt="查询">
                                        <span class="liright">查询</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./addhome.php" target="x">
                                        <img src="../images/add.png" alt="增加">
                                        <span class="liright">增加</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./update-home.html" target="x">
                                        <img src="../images/update.png" alt="修改">
                                        <span class="liright">修改</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./delete-home.html" target="x">
                                        <img src="../images/delete.png" alt="删除">
                                        <span class="liright">删除</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:divShow2();" id="btnhref2" class="btna">
                            <img src="../images/hname.png" alt="功能" class="lcont" />
                                <span class="liright">密码维护</span>
                            <img src="../images/down.png" alt="向下" id="pu" />
                        </a>
                        <div id="btnshow2" style="display: none;">
                            <ul class="classifys">
                                <li>
                                    <a href="./userdata.php" target="x">
                                        <img src="../images/update.png" alt="查询">
                                        <span class="liright">用户密码</span>
                                    </a>
                                </li>
                            </ul>
                            <ul class="classifys">
                                <li>
                                    <a href="./studentdata.html" target="x">
                                        <img src="../images/update.png" alt="查询">
                                        <span class="liright">学生密码</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:divShow3();" id="btnhref3" class="btna">
                            <img src="../images/domain.png" alt="功能" class="lcont" />
                                <span class="liright">后续功能</span>
                            <img src="../images/down.png" alt="向下" id="gu" />
                        </a>
                        <div id="btnshow3" style="display: none;">
                            <ul class="classifys">
                                <li></li>
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
</html>