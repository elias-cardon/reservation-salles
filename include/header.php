<nav id="nav-index">
    <div id="top-title">
        <a href="index.php"><h3>RESERVATION SALLES</h3></a>
    </div>
    <?php
    if (!isset($_SESSION['login'])) {
        ?>
        <div class="btn"><a href="connexion.php">Se connecter</a></div>
        <div class="btn"><a href="inscription.php">S'inscrire</a></div>
        <?php
    }
    ?>
    <?php
    if (isset($_SESSION['login'])) {
        ?>
        <ul class="menu-nav">
            <li class="btn"><a href="reservation-form.php">RESERVATION</a></li>
            <li class="btn"><a href="planning.php">PLANNING</a></li>
            <li class="btn"><a href="profil.php">PROFIL</a></li>
            <li class="btn"><a href="logout.php">DECONNEXION</a></li>
        </ul>
        <?php
    }
    ?>
</nav>