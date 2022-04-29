<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman WEB-Pertemuan 9</title>
    <style>
      * {
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, Helvetica, sans-serif;
            height: 70vh;
            margin: 0px;
            text-align: justify;
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
        
        article {
            float: left;
            padding: 30px;     
            height: 77vh;
        }
    </style>
</head>
<body>
    <header>
        <h1>Pertemuan 9</h1>
        <p>Tutorial Belajar Tentang Javascript Event</p>
    </header>
    <div class="menu">
        <ul>
            <li><a href="?p=home">Home</a></li>
            <li><a href="?p=onclick">OnClick</a></li>
            <li><a href="?p=onkeydown">OnKeyDown</a></li>
            <li><a href="?p=onkeypress">OnKeyPress</a></li>
            <li><a href="?p=onmouseover">OnMouseOver</a></li>
            <li><a href="?p=onsubmit">OnSubmit</a></li>
        </ul>
    </div>
    <section>
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
</body>
</html>