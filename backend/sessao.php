<?php

// inciar a session

session_start();
// verifica variavel de sessao "Logado" e seu valor "sim"
if($_SESSION['logado']!='sim'){
    header("Location: login.php");
}




?>