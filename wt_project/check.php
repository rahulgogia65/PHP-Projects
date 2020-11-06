<?php
    session_start();
    $link = mysqli_connect("localhost", "root", "root", "user");

    $email = $_POST['email'];
    $pass = $_POST['pass'];


    $sql = "SELECT username FROM user WHERE email='$email' AND password='$pass'";
    if($res = mysqli_query($link, $sql))
    {
        if(mysqli_num_rows($res)==1)
        {
            while($rows = mysqli_fetch_array($res,MYSQLI_ASSOC))
            {
                $_SESSION['username']=$rows['username'];
                $_SESSION['status']=True;
            }
            header('location:home_final.php');
        }
    }


 ?>
