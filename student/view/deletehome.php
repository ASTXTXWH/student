<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        html,body{height:100%; margin:0;}
        .bodyhtml-head{width: 100%;height: 40px;line-height: 40px;color: white;}
        a{text-decoration:none;color: white;}
        .inputtext{
            text-align: center;
            margin-top: 100px;
            color: white;
        }
        .sub{margin-left:10px;}
        img{vertical-align:middle}
        .middle{vertical-align:middle;}
        table{margin: auto;}
        .dateform{margin-top: 30px;}
    </style>  
</head>
<body>
        <div class="bodyhtml-head">
        <span class="middle">后台管理</span>
            <img src="../images/right.png" alt="向右">
            <span class="middle">学生信息</span>
            <img src="../images/right.png" alt="向右">
            <span class="middle">删除</span>
        </div>           
            <div class="inputtext">
                <form action="" method="post">
                    请输入学生的学号：<input type="text" name="tid" placeholder="请输入学号" autocomplete='off' required>
                    <input type="submit" class="sub">
                </form>
                <?php
                   $tid=$_POST['tid'];
                   if($tid){
                        include './connectsql.php';
                        if($link){
                            $sql="select * from `19student` where studentid='$tid'";
                            $result=mysqli_query($link,$sql);
                            $row=mysqli_num_rows($result);
                            $row2=mysqli_fetch_assoc($result);
                            if(!$row){
                                echo "<script>alert('查询失败,学号不存在');location='./delete-home.html'</script>";
                            }else{
                               
                            }
                        }else{
                            echo "<script>alert('数据库连接失败')</script>";
                        }
                   }
                ?>
                <div class="dateform" id="df">
                    <h4>当前学生信息</h4>
                    <form action="./delete.php" method="post">
                    <table border="1">
                        <tr><th width="120">学号</th><th><input type="text" name="studentid" required autocomplete='off' value="<?php echo $row2['studentid'] ?>" readonly="readonly"></th></tr>
                        <tr><th>姓名</th><th><input type="text" name="name" required autocomplete='off' value="<?php echo $row2['name'] ?>" readonly="readonly"></th></tr>
                        <tr><th>性别</th><th><input type="text" name="sex" required autocomplete='off' value="<?php echo $row2['sex'] ?>" readonly="readonly"></th></tr>
                        <tr><th>民族</th><th><input type="text" name="nation" autocomplete='off' value="<?php echo $row2['nation'] ?>" readonly="readonly"></th></tr>
                        <tr><th>班级</th><th><input type="text" name="class" required autocomplete='off' value="<?php echo $row2['class'] ?>" readonly="readonly"></th></tr>
                        <tr><th>政治面貌</th><th><input type="text" name="politics" autocomplete='off' value="<?php echo $row2['politics'] ?>" readonly="readonly"></th></tr>
                        <tr><th>宿舍</th><th><input type="text" name="dormitory" autocomplete='off' value="<?php echo $row2['dormitory'] ?>" readonly="readonly"></th></tr>
                        <tr><th>出生日期</th><th><input type="text" name="birthday" autocomplete='off' value="<?php echo $row2['birthday'] ?>" readonly="readonly"></th></tr>
                        <tr><th>手机号码</th><th><input type="text" name="Telephone" autocomplete='off' value="<?php echo $row2['Telephone'] ?>" readonly="readonly"></th></tr>
                        <tr><th>QQ号码</th><th><input type="text" name="qq" autocomplete='off' value="<?php echo $row2['qq'] ?>" readonly="readonly"></th></tr>
                        <tr><th>籍贯</th><th><input type="text" name="side" autocomplete='off' value="<?php echo $row2['side'] ?>" readonly="readonly"></th></tr>
                        <tr><th>状态</th><th><input type="text" name="state" autocomplete='off' value="<?php echo $row2['state'] ?>" readonly="readonly"></th></tr>
                        <tr><th>请谨慎提交</th><th><input type="submit" class="sub"></th></tr>
                    </table>
                    </form>
                </div>
            </div>   
</body>
</html>