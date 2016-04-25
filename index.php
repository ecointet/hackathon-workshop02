<html>
<header>
<link href='https://fonts.googleapis.com/css?family=Indie+Flower' rel='stylesheet' type='text/css'>
<style>
      body {
        font-family: 'Indie Flower', serif;
        font-size: 48px;
      }
    </style>
</header>
<body>

<?php

echo "<div align='center'><img src='http://photos-silca2015.com/images/logo.jpg' /></div>";
echo "<h1>Hello SILCA !</h1>";
echo "<br>This is my very first Cloud Native App !";

echo "<p>This instance is running with the local port ".getenv("VCAP_APP_PORT")."</p>";

// STEP 1
$services = getenv("VCAP_SERVICES");
$services_json = json_decode($services,true);
$mysql_config = $services_json["mysql"][0]["credentials"];

echo "<br>ServiceName: ".$mysql_config["name"];
echo "<br>Login: ".$mysql_config["user"];
echo "<br>Password: ".$mysql_config["password"];
echo "<br>Host: ".$mysql_config["hostname"];
echo "<br>Port: ".$mysql_config["port"];

// STEP 2

?>

</body>
</html>