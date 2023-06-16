<?php
session_start();
if(isset($_POST['Submit']))
{
    extract($_POST);
    include 'connect.php';
    $sql = mysqli_query($host,"SELECT * FROM pengguna");
    $row = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["id_pengguna"] = $row['id_pengguna'];
        $_SESSION["username_pengguna"]=$row['username_pengguna'];
        $_SESSION["password_pengguna"]=$row['password_pengguna']; 
        header("Location:index.php"); 
    }
}
?>
