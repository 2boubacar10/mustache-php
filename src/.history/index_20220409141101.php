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
        $m = new Mustache_Engine(array(
            'entity_flags' => ENT_QUOTES,
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates')
        ));
        echo $m->render($template, array('planet' => 'World!'));
    ?>
</body>
</html>