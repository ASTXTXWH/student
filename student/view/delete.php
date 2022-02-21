<?php
    $studentid=$_POST['studentid'];
     include './connectsql.php';
     if($link){
        $sql="select * from `19student` where studentid='$studentid'";
        $result=mysqli_query($link,$sql);
        $row=mysqli_num_rows($result);
        if(!$row){
            echo "<script>alert('删除失败,学号不存在');location='delete-home.html'</script>";
        }else{
            $sql="delete from `19student` where studentid='$studentid'";
            $result=mysqli_query($link,$sql);
            if($result){
                echo "<script>alert('删除成功');location='delete-home.html'</script>";
            }else{
                echo "<script>alert('删除失败');location='delete-home.html'</script>";
            }
        }
     }
     else{
         echo "<script>alert('数据库连接失败')</script>";
     }
?>