<header>
    <nav id="nav-index">
        <div id="top-title">
        </div>
        <a href="index.php">
            <h3>RESERVATION SALLES</h3></a>
        <div class="btn"> Login</div>
        <div class="btn"> Sign up</div>
<?php
if (isset($_SESSION['login'])){
          echo '<nav>
                <ul class="menu-nav">
                <li><a href="reservation.php">RESERVATION</a></li>
                      <li><a href="planning.php">PLANNING</a></li>
                      <li><a href="profil.php">PROFIL</a></li>
                      <li><a href="index.php?deco">DECONNEXION</a></li>
                    </ul> 
                  </div> 
                </nav>';
       
          }
        ?>

</header>