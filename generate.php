<?php
// require image_moo lib cos I'm lazy
require_once ('third_party/image_moo.php');
// php ga
require_once ('third_party/autoload.php');

use UnitedPrototype\GoogleAnalytics;


// some default config variables
$default_width = 200;
$default_height = 200;
$image_path = 'images/babies/';

// count number of images in image_path
if (glob($image_path . "*.jpg") != false) {
 	$image_count = count(glob($image_path . "*.jpg"));
}

if( !$image_count ) { die("Oops, what's happening I wonder..."); }

// validate some variables with PHP filter_var...
$w = filter_var($_GET['w'], FILTER_VALIDATE_INT) ? $_GET['w'] : $default_width;
$h = filter_var($_GET['h'], FILTER_VALIDATE_INT) ? $_GET['h'] : $default_height;
$g = filter_var($_GET['g'], FILTER_VALIDATE_BOOLEAN); // grayscale
$img = filter_var($_GET['image'], FILTER_VALIDATE_INT);
$image = isset($img) && ($img <= $image_count && $img > 0) ? $img : mt_rand(1,$image_count); // if no image is specified, will get a randomized number of 1 to $image_count

$filename = $image_path . $image . '.jpg';

// kick off...with image_moo lib...Have I mentioned cos I'm lazy?
$image_moo = new Image_moo();

$image_moo->load($filename)->resize_crop($w,$h);

// PHP filter FTW
if( $g ) {
	$image_moo->filter(IMG_FILTER_GRAYSCALE);
}

// Track by PHP GA
  // // Initilize GA Tracker
  // $tracker = new GoogleAnalytics\Tracker('UA-37074526-1', 'placebabies.com');

  // // Assemble Visitor information
  // // (could also get unserialized from database)
  // $visitor = new GoogleAnalytics\Visitor();
  // $visitor->setIpAddress($_SERVER['REMOTE_ADDR']);
  // $visitor->setUserAgent($_SERVER['HTTP_USER_AGENT']);
  // // $visitor->setScreenResolution($w.'x'.$h);

  // // Assemble Session information
  // // (could also get unserialized from PHP session)
  // $session = new GoogleAnalytics\Session();

  // // Assemble Page information
  // $page = new GoogleAnalytics\Page('/generate/'.$w.'/'.$h);
  // $page->setTitle($w.'x'.$h);

  // // Track page view
  // $tracker->trackPageview($page, $session, $visitor);
  // // END GA TRACKER


// Track for analytics (?)
file_put_contents('stat.log', file_get_contents('stat.log')+1 );

if( !file_exists('stat/'.date('Y-m-d').'.log' )){
	$f = fopen( 'stat/'.date('Y-m-d').'.log' , 'w' );
	fwrite($f, '');
	fclose($f);
}
if( !file_exists('stat/'.date('Y-m-d').'_data.log' )){
  $f = fopen( 'stat/'.date('Y-m-d').'_data.log' , 'w' );
  fwrite($f, '');
  fclose($f);
}

file_put_contents('stat/'.date('Y-m-d'). '.log', file_get_contents('stat/'.date('Y-m-d'). '.log')+1 );
file_put_contents('stat/'.date('Y-m-d'). '_data.log', file_get_contents('stat/'.date('Y-m-d'). '_data.log') . $_SERVER['HTTP_REFERER'] .' - '. $w.'x'.$h . (!empty($img) ? ' (image '.$img.') ' : '') ."\r\n" );

// display the image
$image_moo->save_dynamic();