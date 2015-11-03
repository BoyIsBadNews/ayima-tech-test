<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>dataAyima</title>
</head>

<body>
<?php
header("Content-Type: application/json");
header("Cache-Control: no-cache");
$homepage = file_get_contents('https://tools.ayima.com/techtest/api/marketintel');
echo $homepage;
?>
</body>
</html>