<?php
    $links = mysqli_connect("localhost","root", "root", "student");
    $sql = "SELECT * FROM stud";
    $res = mysqli_query($links, $sql);
    while($rows = mysqli_fetch_array($res,MYSQLI_ASSOC)){
        $name=$rows['Username'];
        echo $name."<br>";
    }

 ?>
