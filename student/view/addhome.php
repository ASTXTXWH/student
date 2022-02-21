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
            text-align: center;margin-top: 50px;color: white;
        }
        table{
            width: 300px;
            margin: auto;
        }
        .sub{margin-left:10px;}
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
                <span class="middle">增加</span>
            </div>           
            <div class="inputtext">
                <h4>请录入信息</h4>
                <form action="./add.php" method="post">
                    <table border="1">
                        <tr><th width="120">学号</th><th><input type="text" name="studentid" required autocomplete='off'></th></tr>
                        <tr><th>姓名</th><th><input type="text" name="name" required autocomplete='off'></th></tr>
                        <tr><th>性别</th><th><input type="text" name="sex" placeholder="男" required autocomplete='off'></th></tr>
                        <tr><th>民族</th><th><input type="text" name="nation" placeholder="汉族" autocomplete='off'></th></tr>
                        <tr><th>班级</th><th><input type="text" name="class" placeholder="1班" required autocomplete='off'></th></tr>
                        <tr><th>政治面貌</th><th><input type="text" name="politics" placeholder="共青团员" autocomplete='off'></th></tr>
                        <tr><th>宿舍</th><th><input type="text" name="dormitory" placeholder="1栋101" autocomplete='off'></th></tr>
                        <tr><th>出生日期</th><th><input type="text" name="birthday" placeholder="2000-01-01" autocomplete='off'></th></tr>
                        <tr><th>手机号码</th><th><input type="text" name="Telephone" autocomplete='off'></th></tr>
                        <tr><th>QQ号码</th><th><input type="text" name="qq" autocomplete='off'></th></tr>
                        <tr><th>籍贯</th><th><input type="text" name="side" placeholder="四川成都" autocomplete='off'></th></tr>
                        <tr><th>状态</th><th><input type="text" name="state" placeholder="在校" autocomplete='off'></th></tr>
                        <tr><th colspan="2"><input type="submit" class="sub"></th></tr>
                    </table>
                </form>
            </div>
</body>
</html>