<?php
	$root = "http://".$_SERVER['HTTP_HOST'];
	$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

	$example1 = $root . '200';  		// squared
	$example2 = $root . '360/200'; 		// specific width and height
	$example3 = $root . '360/200/1';	// specific image
	#$example4 = $root . 'g/200';		// grayscale

	#logs
	$today = file_exists('stat/'.date('Y-m-d').'.log') ? file_get_contents('stat/'.date('Y-m-d') .'.log') : 0;
	$all_time = file_exists('stat.log') ? file_get_contents('stat.log') : 0;

	include('header.php');
?>
	<div class="container">
		<div id="main">

			<p>
				<img src="<?= $example1 ?>">
				<img src="<?= $example2 ?>">
				<img src="<?= $example3 ?>">
			</p>
			
			<p>Need placeholder images to put on your layout? Love babies? Placebabies FTW! This is just a quick and simple service to deliver pictures of babies for use as placeholders in your layout. Just put your image size after the URL and you're done!</p>

			<div class="well">
				<a class="code-style" href="<?=$example1?>"><?=$example1?></a> ...displays a squared image<br>
				<a class="code-style" href="<?=$example2?>"><?=$example2?></a> ...displays an image with specific width and height<br>
				<a class="code-style" href="<?=$example3?>"><?=$example3?></a> ...and with a specific image<br>
				<!-- Or this: <a class="code-style" href="<?=$example4?>"><?=$example4?></a><br> -->
			</div>

		</div>

	</div>

<?php include('footer.php'); ?>