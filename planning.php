<?php session_start();

if (isset($_POST["deconnexion"])) {
    session_unset();
    session_destroy();
    header('Location:index.php');
}
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning</title>
    <link rel="stylesheet" href="css/planning.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<body>
    <!--HEADER-->
    <header>
        <?php include('include/header.php') ?>
    </header>
    

    <!--MAIN-->
    <?php
    
    ?>

    </main>
    
</body>
</html>