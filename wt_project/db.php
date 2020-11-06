<?php
    $link = mysqli_connect("localhost", "root", "root", "user");

    $email = $_POST['email'];
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    if ($pass != $cpass)
    {
        echo "Passwords don't match";
    }
    else
    {
        $sql = "SELECT * FROM user WHERE email='$email'";

        #echo "hello";
        if($res = mysqli_query($link, $sql))
        {
            #echo "hello";
            if(mysqli_num_rows($res)==1)
            {
                echo "Email already exists";
            }
            else
            {
                echo "hello";
                $sql1="INSERT INTO user(email, username, password) VALUES('$email', '$name', '$cpass')";
                if(mysqli_query($link, $sql1)===TRUE)
                {
                    echo "Done!";
                    header('Location:login_final.html');
                }
            }
        }
        else
        {
            echo "Error";

        }


    }
 ?>
