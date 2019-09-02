<?php
session_start();
include('../config/db.php');

if(!isset($_SESSION['username'])) {
    header('Location: /blockchain/wallet/sign_in.php');
    exit();
} else {
    header('Location: /blockchain/wallet/transaction/index.php');
    exit();
}

?>