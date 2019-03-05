<?php 
session_start();
require 'connect.php';

$username = $_POST['uname'];
$password = md5($_POST['psw']);
$password_confirmation = md5($_POST['psw_confirmation']);

if($password == $password_confirmation){
     $query = $conn->query('insert into tbuser(username,password) values("'.$username.'","'.$password.'")');
header("Location: index.php");
}else{
    echo "Password tidak cocok!";
}
?>