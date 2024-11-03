<?php
// checking authentication

function checkUser(){
    global $conn;
    if(!empty($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "select * from `user` where `username` = '$username' and `password` = '$password'";
    $result = mysqli_query($conn,$sql);
    $rows = mysqli_num_rows($result);
    if($rows > 0){
        header("Location:./index.php");}
    else{ echo "<script>alert(invalid username or password.. please try again)</script>";}
    }
}
?>