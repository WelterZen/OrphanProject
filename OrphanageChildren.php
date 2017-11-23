<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Style/style.css">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="script.js"></script>
        <title>OrphanageFinder</title>
    </head>
    <body>
        <?php
        include './NavBar.php';
        Navbar(2);
        ?>
        <article class="Main-Article">
            <h1>Chilldren</h1>
            <ul class="OrphanageLocations">
                <li><div class="container">
                    <div class="Text-over-Image">
                        <ul>
                            <li>Name: </li>
                            <li>Surname: </li>
                            <li>About me: </li>
                        </ul>
                    </div>
                        <img src="">
                    </div>
                </li>
                <li><div class="container">
                        <div class="Text-over-Image">
                            <ul>
                                <li>Name: </li>
                                <li>Surname: </li>
                                <li>About me: </li>
                            </ul>
                        </div>
                        <img src="">
                    </div>
                </li>
            </ul>
        </article>
        <?php
        
        ?>
    </body>
</html>
