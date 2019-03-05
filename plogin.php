<?php 
session_start();
require 'connect.php';
 
$username = $_POST['uname'];
$password = md5($_POST['psw']);
 
$query = $conn->query('select * from tbuser where username = "'.$username.'" and password = "'.$password.'" ');
 
if($query->num_rows > 0){
    $_SESSION['user'] = $username;
    echo "Login Success, Selamat datang <strong>".$_SESSION['user']."</strong>";
    echo " <a href='logout.php'>Logout</a>";
}else{
    echo "login failed";
}
?>