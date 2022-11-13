<?php
require "autoryzowanie.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Strona logowania</title>
    <link href="index.css" rel="stylesheet">
  </head>
  <body>
    <?php if (isset($failed)) { ?>
    <div id="niepoprawne-dane">Niepoprawny adres E-Mail lub hasło.</div>
    <?php } ?>

    <form id="logowanie" method="post" target="_self">
      <h1>Logowanie</h1>
      <label for="user">Nazwa użytkownika</label>
      <input type="text" name="user" required/>
      <label for="password">Hasło</label>
      <input type="password" name="password" required/>
      <input type="submit" value="Zaloguj się"/>
    </form>
  </body>
</html>
