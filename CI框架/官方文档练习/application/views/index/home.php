<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        这个是home.php文件---
        <?php echo $title ?>
        <hr/>

            <?php foreach($name as $v):?>
                <span><?php echo $v ?></span>
            <?php endforeach?>



</body>
</html>