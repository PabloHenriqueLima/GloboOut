<?php ob_start();
require '../src/ImageCache/ImageCache.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Image Cache Test</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<style>
		body {
			font-family: 'Open Sans', Helvetica, Arial, sans-serif;
		}
		img {
			max-width: 100%;
		}
	</style>
</head>
<body>

<?php
		$imagecache = new ImageCache();
		$imagecache->cached_image_directory = 'images/cached';
	$img1 = $imagecache->cache('images/100_7754.JPG');

	echo "<pre>";
	echo "</pre>";
	?>

	<img src="<?php echo $img1 ?>" alt=""/>
	<img src="images/100_7754.JPG">" alt=""/>
</body>
</html>
