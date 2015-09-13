<?php
$db = new mysqli('localhost', 'root', 'root', 'loto');

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$sql = "INSERT INTO my_DB (Username, Name, ID) VALUES ('John', 'Doe', '123')";

$db->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>
      Home
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,700' rel='stylesheet' type='text/css'>
    <link href='Stylesheet.css' rel='stylesheet' type='text/css'>
  </head>

  <body>
    <div class="message">
      <div class="container">
        <h1 id="title">loto</h1>
        <!---<p id="description">1&cent; to play.</p>-->
        <button id="play" onclick="window.location.href='Venmo.html'">Play!</button>
      </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>