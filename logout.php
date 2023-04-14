<?php
session_start(); // avvia la sessione
$_SESSION["username"];

// distrugge tutte le variabili di sessione
session_unset();
// distrugge la sessione
session_destroy();

// reindirizza alla pagina di login
header("Location: homepage.html");
exit; // assicura che il codice successivo non venga eseguito
?>