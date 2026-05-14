<?php

session_start();

// ZERANDO AS VARIAVEIS DE SESSÃO
$_SESSION = [];

// DESTROI A SESSÃO
session_destroy();


// redireciona para o login
header('Location: login.php');



?>