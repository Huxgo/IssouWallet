<?php

try

{

$db = new PDO('mysql:host=localhost;dbname=issou_wallet', 'root', '');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

$con = mysqli_connect("localhost", "root", "", "issou_wallet");
?>