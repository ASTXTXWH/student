<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
   <div id="subject">
       <div class="theme">
            <span class="sTitle">欢迎来到学生信息管理系统</span>
       </div>
       <div class="bottomBody">
            <div class="loginBox">
                <div class="lsignin">
                    <img src="images/book.png" alt="书">
                </div>
                <div class="rsignin">
                    <div id="app">
                    <form action="" method="post">
                        <div class="top">
                            <img src="images/login.png" alt="用户名">
                            <input type="text" name="name" :placeholder="placeholders" class="fillet" autocomplete='off' required/>
                        <div>
                            <span id="judge" class="sspan"></span>
                        <div>
                            <img src="images/password.png" alt="密码">
                            <input type="password" name="pwd" :placeholder="placeholdersd" class="fillet" required/>
                        </div>
                        <a class="wspan" href="login.php">点击图片换一张</a>
                        <div>
                            <img src="images/code.png" alt="验证码">
                            <input type="text" placeholder="请输入验证码" class="fillet" name="code" autocomplete='off'/>
                            <img src="./view/code.php"  onclick="this.src='./view/code.php'"/>
                        </div>
                        <span class="sspan" id="scode"></span>
                        <div class="top">
                            <label for="administrators">
                                <input type="radio" name="mode" id="administrators" value="0" v-model="radio" checked>管理员
                            </label>
                            <label for="student">
                                <input type="radio" name="mode" id="student" value="1" v-model="radio">学生
                            </label>
                        </div>
                        <div class="top">
                            <input type="submit" :name="sub" value="Login" class="dlbutton"/>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
       </div>
   </div>
</body>
<?php
    session_start();
    //ob_start();
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    $sub=$_POST['sub'];
    $sup=$_POST['sup'];
    $code=$_POST['code'];
    if($sub){
        if($code==''){
            echo "<script>document.getElementById('scode').innerHTML='请输入验证码'</script>";
        }
        else{
            if(strtolower($_SESSION["captcha1"]) == strtolower($code)){
                echo "<script>document.getElementById('scode').innerHTML=' '</script>";
                $_SESSION["code"] = "";
                include './view/connectsql.php';
                if($link){
                    $sql="select * from `administrators` where tname='$name' and tpwd='$pwd'";
                    $result=mysqli_query($link,$sql);
                    $row=mysqli_num_rows($result);
                    if(!$row){
                        echo "<script>document.getElementById('judge').innerHTML='用户名或密码错误'</script>";
                    }
                    else{
                        echo "<script>location='./view/home.php?name=$name'</script>";
                    }
              }
              else{
                echo "<script>alert('数据库连接失败')</script>";
              }
            }else{
                echo "<script>document.getElementById('scode').innerHTML='验证码错误'</script>";
            }
        }
    }
    if($sup){
        if($code==''){
            echo "<script>document.getElementById('scode').innerHTML='请输入验证码'</script>";
        }
        else{
            if(strtolower($_SESSION["captcha1"]) == strtolower($code)){
                echo "<script>document.getElementById('scode').innerHTML=' '</script>";
                $_SESSION["code"] = "";
                include './view/connectsql.php';
                if($link){
                    $sql="select * from `19student` where studentid='$name' and studentpwd='$pwd'";
                    $result=mysqli_query($link,$sql);
                    $row=mysqli_num_rows($result);
                    $row2=mysqli_fetch_assoc($result);
                    $sname=$row2['name'];
                    if(!$row){
                        echo "<script>document.getElementById('judge').innerHTML='用户名或密码错误'</script>";
                    }
                    else{
                        echo "<script>location='./view/studentview/stuhome.php?name=$sname'</script>";
                    }
              }
              else{
                echo "<script>alert('数据库连接失败')</script>";
              }
            }else{
                echo "<script>document.getElementById('scode').innerHTML='验证码错误'</script>";
            }
        }
    }
?>
<script src="js/vue.js"></script>
    <script>
        const app = new Vue({
            el: '#app',
            data: {
                placeholders: '请输入用户名',
                placeholdersd: '请输入密码',
                sub: 'sub',
                radio: 0,
                test: ' '
            },
            watch: {
                radio() {
                    if (this.radio === '0'){
                        this.placeholders = '请输入用户名',
                        this.placeholdersd = '请输入密码',
                        this.sub = 'sub'
                    } else{
                        this.placeholders = '请输入学号',
                        this.placeholdersd = '初始密码为出生日期后四位',
                        this.sub = 'sup'
                    }
                }
            },
        })  
    </script>
</html>