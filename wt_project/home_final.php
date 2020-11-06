<?php
    session_start();
    if(!isset($_SESSION['status']))
    {
        header('location:login_final.html');
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Music Rating</title>

        <link rel="stylesheet" href="w3.css">
        <link rel="stylesheet" href="page.css">
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <body style="background-color:cyan;">
        <div>
            <div class="top">
              <div class="navbar">
                <?php echo "Hi ".$_SESSION['username'];?>
                <!-- Float links to the right. Hide them on small screens -->
                <div class="links">
                 <!-- <a href="#projects" class="w3-bar-item w3-button">Projects</a>-->
                  <!-- <a href="login_final.html" class="button">Login</a>-->
                  <a href="logout.php" class="button">Log Out</a>
                </div>
              </div>
            </div>
            <!--<div class="home">
                <h1 class="txt">

                </h1>

            </div>-->
        </div>
        <h1 style="position:relative;left:39%;top:9%;">Top 10 Trending Songs</h1>
        <table class="table table-dark table-hover" style="position:relative;top:15%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Artist</th>
      <th scope="col">Genre</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $conn = mysqli_connect("localhost", "root", "root", "user");
        $sql = "SELECT * FROM songs LIMIT 10";
        $count=1;
        if($res = mysqli_query($conn, $sql))
        {
        while($rows = mysqli_fetch_array($res,MYSQLI_ASSOC)){
        echo "<tr>
              <th scope=\"row\">".$count."</th>
              <td>".$rows['Title']."</td>
              <td>".$rows['Artist']."</td>
              <td>".$rows['Genre']."</td>
             <td>".$rows['Rating']."/10</td>
            </tr>";

            $count++;
        }
    }
        else
        {
            echo "hello";
        }
       ?>


  </tbody>
</table>
<div style="position:relative; left:48%; top:15%; margin-bottom:10%">
    <a href="trending.php">
    <button type="button" class="btn btn-secondary btn-lg">View All</button>
    </a>

</div>

<div style="position:relative;top:5%">
        <h1 style="position:relative; left:42%;margin-bottom:2%">Top 5 Pop Songs</h1>
        <table class="table table-sm table-dark" style="position:relative;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Artist</th>
      <th scope="col">Genre</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $pop = "SELECT * FROM songs WHERE Genre='Pop' LIMIT 5" ;
        $res = mysqli_query($conn, $pop);
        $count = 1;
        while($rows = mysqli_fetch_array($res,MYSQLI_ASSOC))
        {
          echo"<tr>
                  <th scope=\"row\">".$count."</th>
                  <td>".$rows['Title']."</td>
                  <td>".$rows['Artist']."</td>
                  <td>".$rows['Genre']."</td>
                  <td>".$rows['Rating']."/10</td>
                </tr>";
                $count++;
        }
       ?>


  </tbody>
</table>
<div style="position:relative; left:48%; top:15%;margin-bottom:5%">
    <a href="pop.php">
    <button type="button" class="btn btn-secondary btn-lg">View All</button>
    </a>

</div>


</div>

<div style="position:relative;top:5%">
        <h1 style="position:relative; left:36%;margin-bottom:2%">Top 5 Dance/Electronic Songs</h1>
        <table class="table table-sm table-dark" style="position:relative;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Artist</th>
      <th scope="col">Genre</th>
      <th scope="col">Rating</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $pop = "SELECT * FROM songs WHERE Genre='Dance/Electronic' LIMIT 5" ;
        $res = mysqli_query($conn, $pop);
        $count = 1;
        while($rows = mysqli_fetch_array($res,MYSQLI_ASSOC))
        {
          echo"<tr>
                  <th scope=\"row\">".$count."</th>
                  <td>".$rows['Title']."</td>
                  <td>".$rows['Artist']."</td>
                  <td>".$rows['Genre']."</td>
                  <td>".$rows['Rating']."/10</td>
                </tr>";
                $count++;
        }
       ?>


  </tbody>
</table>
<div style="position:relative; left:48%; top:15%; margin-bottom:10%">
    <a href="dance.php">
    <button type="button" class="btn btn-secondary btn-lg">View All</button>
    </a>

</div>


</div>




    </body>
</html>
