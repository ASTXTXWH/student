<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        html,body{height:100%; margin:0;}
        .bodyhtml-head{
            width: 100%;height: 40px;line-height: 40px;color: white;
        }
        a{text-decoration:none;color: white;}
        .inputtext{
            text-align: center;color: white;
            margin-top: 100px;
        }
        .sub{margin-left:10px;}
        table{margin: auto;}
        .dateform{margin-top: 30px;}
        img{vertical-align:middle}
        .middle{vertical-align:middle;}

        .redn{
            color: red;
        }
    </style>         
</head>
<body>
            <div class="bodyhtml-head">
            <span class="middle">后台管理</span>
                <img src="../../images/right.png" alt="向右">
                <span class="middle">用户信息</span>
                <img src="../../images/right.png" alt="向右">
                <span class="middle">密码修改</span>
            </div>           
            <div class="inputtext">
                <form action="" method="post">
                    <table>
                    <tr>
                            <td><input type="text" name="kid" placeholder="请输入学号：" autocomplete='off' required></td>
                            <td><span id="namepwd" class="redn"></span></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="pwd" placeholder="请输入旧密码：" autocomplete='off' required></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="fpwd" placeholder="请输入新密码：" autocomplete='off' required></td>
                            <td><span id="namefpwd" class="redn"></span></td>
                        </tr>
                        <tr><td><input type="text" name="spwd" placeholder="再次输入新密码：" autocomplete='off' required></td><td></td></tr>
                        <tr><td> <input type="submit" name="sub"></td><td></td></tr>
                    </table>
                </form>
            </div> 
        <?php
            $kid=$_POST['kid'];
            $pwd=$_POST['pwd'];
            $fpwd=$_POST['fpwd'];
            $spwd=$_POST['spwd'];
            $sub=$_POST['sub'];
            if($sub){
                if($fpwd !== $spwd){
                    echo "<script>document.getElementById('namefpwd').innerHTML='新密码不相同'</script>"; 
                }else{
                    include '../connectsql.php';
                    if($link){
                        $sql="select * from `19student` where studentid='$kid' and studentpwd='$pwd' ";
                        $result=mysqli_query($link,$sql);
                        $row=mysqli_num_rows($result);
                        $row2=mysqli_fetch_assoc($result);
                        if(!$row){
                            echo "<script>document.getElementById('namepwd').innerHTML='学号或密码错误'</script>";
                        }else{
                            $sql="update `19student` set studentpwd='$fpwd' where studentid='$kid'";
                            $result=mysqli_query($link,$sql);
                            if($result){
                                echo "<script>alert('密码修改成功');</script>";
                            }else{
                                echo "<script>alert('密码修改失败');</script>";
                            }
                        }
                    }else{
                        echo "<script>alert('数据库连接失败')</script>";
                    }
                }
            }
        ?>   
</body>
</html>