<?php

session_start();
$_SESSION['usuario'] = $_GET['usuario'];
$_SESSION['admin'] = $_GET['admin'];

header('location:pag1.php');
