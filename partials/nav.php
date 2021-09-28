<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            left: 0;
            right: 0;
        }

        .navbar{
            background-color: black;
            padding: 2rem;
            font-family: sans-serif;
            left:0;        }

        .main{
            color:white;
            text-decoration:none;
            font-size:20px;
            padding:2rem;
            cursor:pointer;
        }

        .main:hover{
            color:yellowgreen;
            text-decoration:none;
            font-size:20px;
            padding:2rem;
            cursor:pointer;
        }
        

        button{
        background-color: yellowgreen;
        border:none;
        color: white;
        cursor: pointer;
        border-radius: 20px;
        font-size:15px;
        padding:10px;
        margin-left:90%;
        outline:none;
        }

        .bottom{
        background-color:  black;
        opacity: 0.9;
        padding: 6rem;
        margin-top: 35%;
        position: fixed;
        width: 100%;
        left:0;
        }

.bottom p{
    color: white;
    text-align: center;
    font-size: 1rem;
}

    </style>

</head>
<body>
    <div class="navbar">
        <a href="/log/welcome.php" class="main">Home</a>
        <a href="/log/anime.php" class="main">Anime</a>
        <a href="/log/movies.php" class="main">Movies</a>
        <a href="/log/series.php" class="main">Series</a>
        <?php
                if(!isset($_SESSION['loggedin'])){
                    echo"<br><a href='/log/login.php'><button>Log out</button></a>";
                }
        ?>
    </div>

<div class="bottom">
        <footer>
            <p>Created by Akhil Dangi. © 2020</p>
            <p>Copyright by Akhil Dangi</p>
        </footer>
</div>

</body>
</html>