<?php
	$root = "http://".$_SERVER['HTTP_HOST'];
	$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

	$credits = array(
		array(
			'id' => 1,
			'name' => 'M Glasgow',
			'link' => 'http://www.flickr.com/photos/glasgows/'
		),
		array(
			'id' => 2,
			'name' => 'Kitt Walker',
			'link' => 'http://www.flickr.com/photos/kittwalker/'
		),
		array(
			'id' => 3,
			'name' => 'Public Domain'
		),
		array(
			'id' => 4,
			'name' => 'papartuzi',
			'link' => 'http://www.flickr.com/photos/paparutzi/'
		),
		array(
			'id' => 5,
			'name' => 'joybx',
			'link' => 'http://www.joybx.com/entry/18517.html'
		),
		array(
			'id' => 6,
			'name' => 'Petr Kratochvil',
			'link' => 'http://www.publicdomainpictures.net/view-image.php?image=10680&picture=smiling-baby-girl'
		),
		array(
			'id' => 7,
			'name' => 'usmanister_01',
			'link' => 'http://www.flickr.com/photos/32619294@N02/'
		),
		array(
			'id' => 8,
			'name' => 'Amy Quinn',
			'link' => 'http://www.publicdomainpictures.net/view-image.php?image=9887&picture=baby'
		),
		
	);

	include('header.php');
?>
	<div class="container">
		<div id="main">

			<p>Here are all the images used on placebabies. The images are for layout purposes only and most (if not all) of the images in this project are released under the creative commons license. Visit <a target="_blank" rel="nofollow" href="http://creativecommons.org/licenses/">http://creativecommons.org/licenses</a> for more info.</p>

			<p>Most of the images will have a link to their owner's page so you can contact the owner if you want to use them for more than just layouting purpose.</p>

			<p>In the case where I couldn't find the source of credit for the image, it will be listed as empty or as "public domain". If it isn't, and/or you are the image owner and would rather like to see it removed - please <a href="&#x6d;&#97;&#105;&#108;&#x74;&#x6f;&#x3a;&#98;&#x65;&#x6e;&#x68;&#97;&#110;&#107;&#115;&#x30;&#x34;&#48;&#56;&#56;&#56;&#64;&#103;&#109;&#x61;&#x69;&#108;&#x2e;&#x63;&#111;&#109;">email me</a> and I will certainly remove the offending material.</p>

			<ul class="unstyled credits">
				<?php foreach ($credits as $value): ?>
					<li>
						<img src="<?= $root. '225/225/' . $value['id']?>">
						<p>
							<?= !empty($value['link'])? 'by <a target="_blank" href="'. $value['link'].'">'. $value['name'] .'</a>' : $value['name'] ?>
						</p>
					</li>
				<?php endforeach ?>
			</ul>
			
		</div>

	</div>

<?php include('footer.php'); ?>