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
        $sql="select * from `19student` where studentid='$studentid'";
        $result=mysqli_query($link,$sql);
        $row=mysqli_num_rows($result);
        if($row){
            echo "<script>alert('学号存在,添加失败');location='addhome.php'</script>";
        }else{
            $sql="insert into `19student`(studentid,name,sex,nation,class,politics,dormitory,birthday,Telephone,qq,side,state)  values('$studentid','$name','$sex','$nation','$class','$politics','$dormitory','$birthday','$Telephone','$qq','$side','$state')";
            $result=mysqli_query($link,$sql);
            if($result){
                echo "<script>alert('添加成功');location='addhome.php'</script>";
            }else{
                echo "<script>alert('添加失败');location='addhome.php'</script>";
            }
        }
     }
     else{
         echo "<script>alert('数据库连接失败')</script>";
     }
?>