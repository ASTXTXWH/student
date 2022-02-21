<?php
    $studentid=$_POST['studentid'];
    $name=$_POST['name'];
    $sex=$_POST['sex'];
    $nation=$_POST['nation'];
    $class=$_POST['class'];
    $politics=$_POST['politics'];
    $dormitory=$_POST['dormitory'];
    $birthday=$_POST['birthday'];
    $Telephone=$_POST['Telephone'];
    $qq=$_POST['qq'];
    $side=$_POST['side'];
    $state=$_POST['state'];
     include './connectsql.php';
     if($link){
        $sql="update `19student` set name='$name',nation='$nation',class='$class',politics='$politics',dormitory='$dormitory',birthday='$birthday',Telephone='$Telephone',qq='$qq',side='$side',state='$state' where studentid='$studentid'";
        $result=mysqli_query($link,$sql);
        if($result){
            echo "<script>alert('修改成功');location='./update-home.html'</script>";
        }else{
            echo "<script>alert('修改失败');location='./update-home.html'</script>";
        }
     }
     else{
         echo "<script>alert('数据库连接失败')</script>";
     }
?>