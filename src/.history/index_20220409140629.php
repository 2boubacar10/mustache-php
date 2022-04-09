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
        require_once("Mustache/Autoloader.php");
        Mustache_Autoloader::register();
        $m = new Mustache_Engine(array('entity_flags' => ENT_QUOTES));
        echo $m->render('Hello {{planet}}', array('planet' => 'World!'));
    ?>
</body>
</html>