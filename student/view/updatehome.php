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
            text-align: center;
            color: white;
            margin-top: 100px;
        }
        .sub{margin-left:10px;}
        table{margin: auto;}
        .dateform{margin-top: 30px;}
        img{vertical-align:middle}
        .middle{vertical-align:middle;}
    </style>         
</head>
<body>
            <div class="bodyhtml-head">
            <span class="middle">后台管理</span>
                <img src="../images/right.png" alt="向右">
                <span class="middle">学生信息</span>
                <img src="../images/right.png" alt="向右">
                <span class="middle">修改</span>
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
                                echo "<script>alert('查询失败,学号不存在');location='./update-home.html'</script>";
                            }else{
                               
                            }
                        }else{
                            echo "<script>alert('数据库连接失败')</script>";
                        }
                   }
                ?>
                <div class="dateform" id="df">
                    <h4>请修改信息</h4>
                    <form action="./update.php" method="post">
                    <table border="1">
                        <tr><th width="120">学号</th><th><input type="text" name="studentid" required autocomplete='off' value="<?php echo $row2['studentid'] ?>" readonly="readonly"></th></tr>
                        <tr><th>姓名</th><th><input type="text" name="name" required autocomplete='off' value="<?php echo $row2['name'] ?>"></th></tr>
                        <tr><th>性别</th><th><input type="text" name="sex" required autocomplete='off' value="<?php echo $row2['sex'] ?>" readonly="readonly"></th></tr>
                        <tr><th>民族</th><th><input type="text" name="nation" autocomplete='off' value="<?php echo $row2['nation'] ?>"></th></tr>
                        <tr><th>班级</th><th><input type="text" name="class" required autocomplete='off' value="<?php echo $row2['class'] ?>"></th></tr>
                        <tr><th>政治面貌</th><th><input type="text" name="politics" autocomplete='off' value="<?php echo $row2['politics'] ?>"></th></tr>
                        <tr><th>宿舍</th><th><input type="text" name="dormitory" autocomplete='off' value="<?php echo $row2['dormitory'] ?>"></th></tr>
                        <tr><th>出生日期</th><th><input type="text" name="birthday" autocomplete='off' value="<?php echo $row2['birthday'] ?>"></th></tr>
                        <tr><th>手机号码</th><th><input type="text" name="Telephone" autocomplete='off' value="<?php echo $row2['Telephone'] ?>"></th></tr>
                        <tr><th>QQ号码</th><th><input type="text" name="qq" autocomplete='off' value="<?php echo $row2['qq'] ?>"></th></tr>
                        <tr><th>籍贯</th><th><input type="text" name="side" autocomplete='off' value="<?php echo $row2['side'] ?>"></th></tr>
                        <tr><th>状态</th><th><input type="text" name="state" autocomplete='off' value="<?php echo $row2['state'] ?>"></th></tr>
                        <tr><th colspan="2"><input type="submit" class="sub"></th></tr>
                    </table>
                    </form>
                </div>
            </div>   
</body>
<!-- <script>
        function test(){
            document.getElementById("df").style.display="none";
        }
</script> -->
</html>