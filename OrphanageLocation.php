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
        <div id='cssmenu'>
            <ul>
                <li ><a href='index.php'><span>Home</span></a></li>
                <li class='has-sub active'><a href='Orphanage.php'><span>Orphanage</span></a>
                  <ul>
                      <li><a href='OrphanageLocation.php'><span>Locations</span></a></li>
                      <li><a href='OrphanageChildren.php'><span>Children</span></a></li>
                     <li class='last'><a href='#'><span>TBD</span></a></li>
                  </ul>
               </li>
               <li class='has-sub'><a href='About.php'><span>About</span></a>
                  <ul>
                      <li><a href='AboutCompany.php'><span>Company</span></a></li>
                     <li class='last'><a href='Contact.php'><span>Contact</span></a></li>
                  </ul>
               </li>
               <li class='last'><a href='#'><span>TBD</span></a></li>
            </ul>
        </div>
        <article class="Main-Article">
            <h1>Orphanages</h1>
            <ul class="OrphanageLocations">
                <li>
                    <h3>President Kruger Children's Home</h3>
                    Address: 728 31st Ave, Villieria, Pretoria, 0186
                    <img src="images/President Kruger Children's Home.png"
                </li>
                <li>
                    <h3>House Gracia Child & Youth Care Centre</h3>
                    Address: 367 Burger St, Pretoria North, Pretoria, 0116
                    Phone: 012 546 6681
                    <img src="images/House Gracia Child & Youth Care Centre.png">
                </li>
            </ul>
        </article>
        <?php
        
        ?>
    </body>
</html>
