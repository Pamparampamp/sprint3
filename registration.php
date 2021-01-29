<?php 

session_start();
header('location: login.php');
$con = mysqli_connect('localhost','root', 'mysql');

mysqli_select_db($con,'reg');
$name  = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name ='$name'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){

    echo "username Already taken";

}else{
    $reg = "insert into usertable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "registration successfull";
}
?>