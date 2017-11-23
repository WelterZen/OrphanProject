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
            <h1>Orphanages</h1>
            <ul class="OrphanageLocations">
                <li><div class="container">
                    <div class="Text-over-Image">
                        <h3>President Kruger Children's Home</h3>
                        Address: 728 31st Ave, Villieria, Pretoria, 0186
                    </div>
                        <img src="images/President Kruger Children's Home.png">
                    </div>
                </li>
                <li><div class="container">
                        <div class="Text-over-Image">
                            <h3>House Gracia Child & Youth Care Centre</h3>
                            Address: 367 Burger St, Pretoria North, Pretoria, 0116
                            Phone: 012 546 6681 
                           </div>
                        <img src="images/House Gracia Child & Youth Care Centre.png">
                    </div>
                </li>
            </ul>
        </article>
        <?php
        
        ?>
    </body>
</html>
