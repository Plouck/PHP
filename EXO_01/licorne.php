<?php
if (isset($_POST["chose"])) {
  $chose = $_POST["chose"];

  // if ($chose === 'humain') {
  //   $creature = "Bonjour humain";
  // }
  // elseif ($chose ==='chat') {
  //   $creature = "miaouw";
  // }
  // else {
  //   $creature ="STROP DRUG DUDE !!!";
  // }

  $creature = ($chose === "humain") ? "bonjour humain" : ($creature = $chose === "chat" ? "miaouw" : "STOP LA DROGUE");
  echo $creature;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>humain,chat ou licorne ?</title>
  </head>
  <body>

    <form  method="post">
    <input type="radio" name="chose" value="humain" checked> Humain<br>
    <input type="radio" name="chose" value="chat"> Chat<br>
    <input type="radio" name="chose" value="licorne"> Licorne

    <p><input type="submit" value="OK"></p>

    </form>

  </body>
</html>
