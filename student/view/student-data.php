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
        .sub{margin-left:10px;}
        table{margin: auto;color: white}
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
                <img src="../images/right.png" alt="向右">
                <span class="middle">密码维护</span>
                <img src="../images/right.png" alt="向右">
                <span class="middle">学生密码</span>
            </div>           

        <?php
            $uid=$_POST['uid'];
            $sub=$_POST['sub'];
            if($sub){
                    include './connectsql.php';
                    if($link){
                        $sql="select * from `19student` where studentid='$uid'";
                        $result=mysqli_query($link,$sql);
                        $row=mysqli_num_rows($result);
                        $row2=mysqli_fetch_assoc($result);
                        if(!$row){
                            echo "<script>alert('学号不存在');location='./studentdata.html'</script>";
                        }else{
        
                        }
                    }else{
                        echo "<script>alert('数据库连接失败')</script>";
                    }
            }
        ?> 
                <div class="dateform" id="df">
                    <form action="./student-pwd.php" method="post">
                    <table border="1">
                        <tr><th colspan="2">请修改密码</th></tr>
                        <tr><th width="120">学号</th><th><input type="text" name="studentid" required autocomplete='off' value="<?php echo $row2['studentid'] ?>" readonly="readonly"></th></tr>
                        <tr><th>姓名</th><th><input type="text" name="name" required autocomplete='off' value="<?php echo $row2['name'] ?>" readonly="readonly"></th></tr>
                        <tr><th>密码</th><th><input type="text" name="pwd" required autocomplete='off' value="<?php echo $row2['studentpwd'] ?>"></th></tr>
                        <tr><th colspan="2"><input type="submit" class="sub"></th></tr>
                    </table>
                    </form>
                </div>  
</body>
</html>