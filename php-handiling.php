<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $file=fopen("output1.txt","w");
    fwrite($file,"hey i am sri ram teja");
    fclose($file);
    ?>
</body>
</html>