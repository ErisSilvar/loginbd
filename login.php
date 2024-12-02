<?php

session_start();
$_SESSION['usuario'] = $_GET['usuario'];

header('location:pag1.php');
