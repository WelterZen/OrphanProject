<?php

function Navbar($activTabNo) {
    switch ($activTabNo) {
        case 1:
            echo "<div id='cssmenu'>
            <ul>
                <li class='active'><a href='index.php'><span>Home</span></a></li>
                <li class='has-sub'><a href='Orphanage.php'><span>Orphanage</span></a>
                  <ul>
                      <li><a href='OrphanageLocation.php'><span>Locations</span></a></li>
                      <li class='last'><a href='OrphanageChildren.php'><span>Children</span></a></li>
                  </ul>
               </li>
               <li class='has-sub' ><a href='About.php'><span>About</span></a>
                  <ul>
                      <li><a href='AboutCompany.php'><span>Company</span></a></li>
                     <li class='last'><a href='Contact.php'><span>Contact</span></a></li>
                  </ul>
               </li>
               <li class='last'><a href='Gallary.php'><span>Gallary</span></a></li>
            </ul>
        </div>
        <footer class='footBar'>
            <ul>
                <li><img src='images/twitter-icon.png'></li>
                <li><img src='images/facebook-icon.png'></li>
            </ul>
        </footer>";
            break;
        case 2:
            echo "<div id='cssmenu'>
            <ul>
                <li ><a href='index.php'><span>Home</span></a></li>
                <li class='has-sub active'><a href='Orphanage.php'><span>Orphanage</span></a>
                  <ul>
                      <li><a href='OrphanageLocation.php'><span>Locations</span></a></li>
                      <li class='last'><a href='OrphanageChildren.php'><span>Children</span></a></li>
                     
                  </ul>
               </li>
               <li class='has-sub' ><a href='About.php'><span>About</span></a>
                  <ul>
                      <li><a href='AboutCompany.php'><span>Company</span></a></li>
                     <li class='last'><a href='Contact.php'><span>Contact</span></a></li>
                  </ul>
               </li>
               <li class='last'><a href='Gallary.php'><span>Gallary</span></a></li>
            </ul>
        </div>
        <footer class='footBar'>
            <ul>
                <li><img src='images/twitter-icon.png'></li>
                <li><img src='images/facebook-icon.png'></li>
            </ul>
        </footer>";
            break;
        case 3:
            echo "<div id='cssmenu'>
            <ul>
                <li ><a href='index.php'><span>Home</span></a></li>
                <li class='has-sub'><a href='Orphanage.php'><span>Orphanage</span></a>
                  <ul>
                      <li><a href='OrphanageLocation.php'><span>Locations</span></a></li>
                      <li class='last'><a href='OrphanageChildren.php'><span>Children</span></a></li>
                     
                  </ul>
               </li>
               <li class='has-sub active' ><a href='About.php'><span>About</span></a>
                  <ul>
                      <li><a href='AboutCompany.php'><span>Company</span></a></li>
                     <li class='last'><a href='Contact.php'><span>Contact</span></a></li>
                  </ul>
               </li>
               <li class='last'><a href='Gallary.php'><span>Gallary</span></a></li>
            </ul>
        </div>
        <footer class='footBar'>
            <ul>
                <li><img src='images/twitter-icon.png'></li>
                <li><img src='images/facebook-icon.png'></li>
            </ul>
        </footer>";
            break;
        case 4:
            echo "<div id='cssmenu'>
            <ul>
                <li ><a href='index.php'><span>Home</span></a></li>
                <li class='has-sub'><a href='Orphanage.php'><span>Orphanage</span></a>
                  <ul>
                      <li><a href='OrphanageLocation.php'><span>Locations</span></a></li>
                      <li class='last'><a href='OrphanageChildren.php'><span>Children</span></a></li>
                     
                  </ul>
               </li>
               <li class='has-sub' ><a href='About.php'><span>About</span></a>
                  <ul>
                      <li><a href='AboutCompany.php'><span>Company</span></a></li>
                     <li class='last'><a href='Contact.php'><span>Contact</span></a></li>
                  </ul>
               </li>
               <li class='last active'><a href='Gallary.php'><span>Gallary</span></a></li>
            </ul>
        </div>
        <footer class='footBar'>
            <ul>
                <li><img src='images/twitter-icon.png'></li>
                <li><img src='images/facebook-icon.png'></li>
            </ul>
        </footer>";
            break;
        default:
            break;
    }
}


