<?php
session_start();
//old_code => include('../config/db.php');
require_once('../config/db.php'); //Ne jamais utiliser include pour inclure un fichier contenant du code php

if(!isset($_SESSION['username'])) {
    header('Location: /blockchain/wallet/sign_in.php');
    exit();
} else {
    header('Location: /blockchain/wallet/transaction/index.php');
    exit();
}

?>
