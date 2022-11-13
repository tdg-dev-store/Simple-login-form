<?php
session_start();
if (isset($_POST["logout"])) { unset($_SESSION["user"]); }

if (!isset($_SESSION["user"])) {
  header("Location: ../");
  exit();
}
?>
<style>
body {
background-color: blue;
}
.logout {
  background-color: #ad4343;
  color: white;
  padding: 14px 34px;
  border: none;
  text-decoration: none;
}
.logout:hover {
  background-color: white;
  color: black;
  padding: 14px 34px;
  border: none;
  text-decoration: none;
}
</style>
<html>
    <head>
    <meta charset="UTF-8">
        <title>test</title>
        <link href="../index.css" rel="stylesheet">
</head>
<body>
    <center>
    <h1>Gratulacje! Udało ci się zalogować!</h1>
    <br>
    <a class='logout' href='logout.php'>Wyloguj się</a>
</center>
</body>