<?php
session_start();
setcookie(session_name(), 'dev-store.pl', 100);
session_unset();
session_destroy();
$_SESSION = array();
header('Location: ../');
?>