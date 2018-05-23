<?php
/**
 * Created by PhpStorm.
 * User: sumo stephane
 * Date: 17/01/2018
 * Time: 15:03
 */

?>

<?php
$titre="Deconnexion";
require("connexionbdd.php");
session_destroy();
echo "<h1 style='text-align: center; color: gold'>Vous êtes à présent déconnecté</h1>";
header("Location: connexion.php");
?>
<!doctype html>
<html>
<head><title>Deconnexion</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css2/preview.css">
</head>
<body>
</body>
</html>
