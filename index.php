<?php
$ini = parse_ini_file('config/conf.ini');
?>
<!DOCTYPE html>
<html lang="ja">


<head>
    <title><?php print($ini["sys_name"]);?>｜トップページ</title>
    <link rel="stylesheet" href="css/common.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
</head>

<body>
    <h1><?php print($ini["sys_name"]);?></h1>
</body>

</html>