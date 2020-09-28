<?php
session_start();

$inputEmail = $_POST['email'];
$inputPassword = $_POST['pwd'];

include('connection.php');

$sql = "SELECT * FROM userinfo ";
$result = mysqli_query($conn,$sql);

$mail = mysqli_fetch_all($result);

foreach($mail as $praveen){
    if(($inputEmail == $praveen[3]) and ($inputPassword == $praveen[4])){
        // $loginFlag = true;
        $_SESSION['user'] = $praveen[1];
        $_SESSION['email'] = $praveen[3];
        $_SESSION['usertoken'] = $praveen[0];

        header('Location:index.php');
    }else{
         $loginFlag = "false";
    }

}

?>
