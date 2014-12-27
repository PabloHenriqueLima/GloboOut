<?php ob_start( 'ob_gzhandler' ); require "imageCache/imageCache.php"; $img = new imageCache(); ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<img src="<?php echo $img->cache('img/gallery/1.JPG') ?>" alt=""/>
</body>
</html>
