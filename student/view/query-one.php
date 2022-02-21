<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <style type="text/css">
        .bodyhtml-head{
            width: 100%;height: 40px;line-height: 40px;color: white;
        }
        table{
            text-align: center;
            color: white;
        }
        a{text-decoration:none;color: blue;}
        img{vertical-align:middle}
        .middle{vertical-align:middle;}
        .setcolor{color: white}
        .aligncenter{margin-left: 50px;}
        .ksali{
            margin-left: 200px;
        }
        .lpl{display: inline-block;}
    </style>
<body>
            <div class="bodyhtml-head">
                <span class="middle">后台管理</span>
                <img src="../images/right.png" alt="向右">
                <span class="middle">学生信息</span>
                <img src="../images/right.png" alt="向右">
                <span class="middle">查询</span>
                <span class="ksali">查询单条数据：
                    <div class="lpl">
                        <form action="query-one.php" method="post">
                            <input type="text" name="kid" placeholder="请输入学号" autocomplete='off' required>
                            <input type="submit">
                        </form>
                    </div>
                </span>
                <span class="aligncenter">
                    <a href="./query.php" name="sd">返回</a>
                </span>
            </div>
            <div>
            <?php
                $kid=$_POST['kid'];
               include 'connectsql.php';
               if($link){
                    $sql="select * from `19student` where studentid='$kid'";
                    $result=mysqli_query($link,$sql);
                    $row2=mysqli_num_rows($result);
                        if(!$row2){
                            echo "<script>alert('查询失败,学号不存在');location='./query.php'</script>";
                        }else{
                               
                        }
                        echo '<table border="1">
                        <tr><th width="60">编号</th>
                        <th width="100">学号</th>
                        <th width="70">姓名</th>
                        <th width="60">性别</th>
                        <th width="60">民族</th>
                        <th width="60">班级</th>
                        <th width="100">政治面貌</th>
                        <th width="100">宿舍</th>
                        <th width="140">出生日期</th>
                        <th width="140">手机号码</th>
                        <th width="120">QQ号码</th>
                        <th width="140">籍贯</th>
                        <th width="60">状态</th>
                        </tr>';
                            while($row=mysqli_fetch_assoc($result)){
                                echo '<tr>';
                                echo '<td>'.$row['Id'].'</td>';
                                echo '<td>'.$row['studentid'].'</td>';
                                echo '<td>'.$row['name'].'</td>';
                                echo '<td>'.$row['sex'].'</td>';
                                echo '<td>'.$row['nation'].'</td>';
                                echo '<td>'.$row['class'].'</td>';
                                echo '<td>'.$row['politics'].'</td>';
                                echo '<td>'.$row['dormitory'].'</td>';
                                echo '<td>'.$row['birthday'].'</td>';
                                echo '<td>'.$row['Telephone'].'</td>';
                                echo '<td>'.$row['qq'].'</td>';
                                echo '<td>'.$row['side'].'</td>';
                                echo '<td>'.$row['state'].'</td>';
                                echo "</tr>";
                            }
                        echo '</table>';       
                }
                else{
                    echo "<script>alert('连接失败')</script>";
                }
            ?> 
            </div>
</body>
</html>
            
        