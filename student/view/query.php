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
                        <form action="./query-one.php" method="post">
                            <input type="text" name="kid" placeholder="请输入学号" autocomplete='off' required>
                            <input type="submit">
                        </form>
                    </div>
                </span>
            </div>
            <div>
            <?php
               include 'function.php';
               include 'connectsql.php';
               if($link){
                   $page = max(input('get', 'page','d'), 1);
                   $size = 20;
                   $sql = 'SELECT count(*) FROM `19student`';
                   $re=$link->query($sql);
                   $data2=$re->fetch_all();
                   if(!$res = mysqli_query($link, $sql)) {
                       exit("SQL[$sql]执行失败：" . mysqli_error($link));	
                   }
                   $total = (int) mysqli_fetch_row($res)[0];
                   $sql2 = 'SELECT * FROM `19student` ORDER BY `Id` ASC LIMIT ' . page_sql($page,$size);
                   if(!$res = mysqli_query($link,$sql2)) {
                       exit("SQL[$sql]执行失败：" . mysqli_error($link));
                   }
                   $data = mysqli_fetch_all($res, MYSQLI_ASSOC);
                   mysqli_free_result($res);
                   $result=mysqli_query($link,$sql2);
                   if(empty($data) && $page > 1) {
                       header('Location: query.php?page=1');
                   exit;
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
            <div class="setcolor">
                <?php
                echo '<span">共'.$data2[0][0].'条记录</span>';
                    echo page_html('query.php?page=', $total,$page,$size)
                ?> 
            </div>
</body>
</html>
            
        