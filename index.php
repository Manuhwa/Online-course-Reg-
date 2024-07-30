<?php 
session start();
error_reporting (0);
include("includes/confi.php");
if(isset($_POST['commit']))

{
    $RegNo=$_POST['Reg No:'];
    $Password=md5($_POST['Password']);
$query= mysqli_query(con,"select * from students where studentRegNo = '$RegNo' and password = '$Password'");
$num=mysqli_fetch_array($query);
if($num>0)

{
    $_SESSION['login']=$_POST['RegNo'];
    $_SESSION['sname']=$_POST['studentName'];
    $_SESSION['pin']=$_POST['studentRegNo'];
    $uip=$_SERVER['Remote_Addr'];
    $status=1;
    $log=mysqli_query($con,"insert into")
}
}