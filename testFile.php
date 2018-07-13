<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TEST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
    <div class="demo"></div>
    <input type="button" value="">
    <?php
    echo 'test';
    $db = new mysqli('localhost','root','','demo');
    $db->get_connection_stats();
     ?>
</body>
</html>