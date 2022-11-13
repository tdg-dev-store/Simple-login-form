# Simple-login-form
Prosty formularz logowania bez bazy danych
Użytkowników dodaje się w pliku autoryzowanie.php

Plik wygląda tak:

<?php
session_start();
if (isset($_POST["user"]) && !isset($_SESSION["user"])) {
  $users = [
    "test" => "123",    <============================================================= TUTAJ DODAJEMY UŻYTKOWNIKÓW JAK W PRZYKŁADZIE
    "test2" => "1234"
 ];

  if (isset($users[$_POST["user"]])) {
    if ($users[$_POST["user"]] == $_POST["password"]) {
      $_SESSION["user"] = $_POST["user"];
    }
  }

  if (!isset($_SESSION["user"])) { $failed = true; }
}

if (isset($_SESSION["user"])) {
  header("Location: zalogowany"); 
  exit();
}

