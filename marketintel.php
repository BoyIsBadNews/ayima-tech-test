<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>MarketIntel Data</title>
</head>
<html>
<body>
<?php
header("Content-Type: application/json");
header("Cache-Control: no-cache");
$homepage = file_get_contents('https://tools.ayima.com/techtest/api/marketintel');
echo $homepage;
?>
</body>
</html>