
<html>
<head>...</head>
<body><h1>Bonjour!</h1>
  <?php

  $ch = curl_init("http://www.example.com/");
  $fp = fopen("example_homepage.txt", "w");

  curl_setopt($ch, CURLOPT_FILE, $fp);
  curl_setopt($ch, CURLOPT_HEADER, 0);

  curl_exec($ch);
  curl_close($ch);
  fclose($fp);
  ?>

</body>
</html>
