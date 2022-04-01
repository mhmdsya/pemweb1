<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman WEB-Pertemuan 4</title>
    <style>
        * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            height: 70vh;
            margin: 0px;
        }
        
        header {
            background: #CE49BF;
            padding: 10px;
            color: white;
        }
        
        .menu{
            background-color: #FBD6D2;
            overflow: hidden;
        }

        .menu ul {
            padding: 0;
            margin: 0;
        }

        .menu ul li{
            float: left;
            list-style-type: none;
            padding: 10px;
        }

        nav {
            float: left;
            width: 15%;
            height: 77vh;
            background: #F190B7;
            padding: 20px;
        }
        
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        
        article {
            float: left;
            padding: 20px;
            width: 85%;
            background-color: #f1f1f1;      
            height: 77vh;
        }
        
        section::after {
            content: "";
            display: table;
            clear: both;
        }
        
        footer {
            background-color: #A63EC5;
            padding: 20px;
            text-align: left;
            color: white;
            height: auto;
        }
       
        @media (max-width: 600px) {
            nav, article {
                width: 100%;
                height: auto;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Pertemuan 4</h1>
        <p>Tutorial belajar membuat layout website sederhana</p>
    </header>
            
    <div class="menu">
        <ul>
            <li><a href="?p=home">Home</a></li>
            <li><a href="?p=formulir">Form</a></li>
            <li><a href="?p=css">CSS</a></li>
            <li><a href="?p=php">PHP</a></li>
            <li><a href="?p=js">Javascript</a></li>
        </ul>
    </div>

    <section>
        <nav>
            <ul>
                <li><a href="https://www.w3schools.com/html/default.asp" target="_blank">Tutorial HTML dasar</a></li>
                <li><a href="https://www.w3schools.com/css/default.asp" target="_blank">Tutorial CSS dasar</a></li> 
                <li><a href="https://www.w3schools.com/php/default.asp" target="_blank">Tutorial PHP dasar</a></li> 
                <li><a href="https://www.w3schools.com/jquery/default.asp" target="_blank">Tutorial JQuery dasar</a></li>
            </ul>
        </nav>

        <article>
            <?php
                if (empty($_GET['p'])){
                    $filename="home";
                } else {
                    $filename=$_GET['p'];
                }
                require $filename.".php";
            ?>
        </article>
    </section>

    <footer>
        Copyright 2022. Mahmud Syaiful Aminudin. Univ Mercu Buana</p>
    </footer>
</body>
</html>
