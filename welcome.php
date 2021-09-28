<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body{
        color:white;
        font-size: 15px;
    }
    </style>
</head>
<body>

<div class="nav-bar">
        <header>
        <?php
                if(isset($_SESSION['loggedin'])){
                   echo $_SESSION['username'];
                }
            ?>
            <h1>Welcome</h1>
            <?php
                if(isset($_SESSION['loggedin'])){
                    echo"<br><a href='login.php'><button>Log out</button></a>";
                }
                else{
                    header('Location: login.php');
                }
            ?>
        </header>
</div>

<div class="row">
    
    <div class="column">
        <h2 style="color: white; text-align: center;">Animes</h2>
     <a href="anime.php"><img src="img/a.png" alt="Anime" style="width:100%"></a> 
    </div>
    <div class="column">
        <h2 style="color: white; text-align: center;">Movies</h2>
      <a href="movies.php"><img src="img/m.png" alt="Movies" style="width:100%"></a>
    </div>
    <div class="column">
        <h2 style="color: white; text-align: center;">Series</h2>
      <a href="series.php"><img src="img/s.png" alt="Series" style="width:100%"></a>
    </div>
</div>
  <div class="content">
      <p>This site is all about for entertainment</p>
      <p>If you want to watch the content then you should click on images</p>
  </div>

<div class="bottom">
        <footer>
            <p>Created by Akhil Dangi. © 2020</p>
            <p>Copyright by Akhil Dangi</p>
        </footer>
</div>
</div>
</body>
</html>
