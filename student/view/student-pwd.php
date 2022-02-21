<?php
    $studentid=$_POST['studentid'];
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
     include './connectsql.php';
     if($link){
        $sql="update `19student` set studentpwd='$pwd' where studentid='$studentid'";
        $result=mysqli_query($link,$sql);
        if($result){
            echo "<script>alert('学生密码修改成功');location='./studentdata.html'</script>";
        }else{
            echo "<script>alert('学生密码修改失败');location='./studentdata.html'</script>";
        }
     }
     else{
         echo "<script>alert('数据库连接失败')</script>";
     }
?>