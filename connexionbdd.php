<?php
/**
 * Created by PhpStorm.
 * User: sumo stephane
 * Date: 17/05/2018
 * Time: 15:03
 */

?>

<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors',1);
//Connexion à la base de données
$dsn = 'mysql:dbname=stephanesumo_projet;host=mysql-stephanesumo.alwaysdata.net';//ou $dsn = 'mysql:dbname=projet;host=127.0.0.1';
$hote = 'localhost';//ou $hote = 'localhost';
$user = '152503';//ou $user = 'root';
$password = 'password';//ou $password = '';


try{
    $titre = "Connexion";
    $dbh = new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
