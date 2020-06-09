<header>
    <nav id="nav-index">
        <div id="top-title">
        </div>
        <a href="index.php">
            <h3>RESERVATION SALLES</h3></a>
        <?php 
          if(!isset($_SESSION['login'])){
            echo'<div class="btn"><a href="connexion.php">Se connecter</a></div>
                 <div class="btn"><a href="inscription.php">S\'inscrire</a></div>';
          }
        ?>
        </div>
    </div>
</div>
<?php
if (isset($_SESSION['login'])) {
    echo '<nav>
                <ul class="menu-nav">
                <div class="btn"><a href="reservation.php">RESERVATION</a></div>
                <div class="btn"><a href="planning.php">PLANNING</a></div>
                <div class="btn"><a href="profil.php">PROFIL</a></div>
                <div class="btn"><a href="logout.php">DECONNEXION</a></div>
                    </ul> 
                  </div> 
                </nav>';
}
        ?>
   
      </nav>
    </div>
</header>