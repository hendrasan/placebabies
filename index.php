<?php
	$sitename = 'http://placebabies.com';
	$root = "http://".$_SERVER['HTTP_HOST'];
	$root .= str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);

	$example1 = $root . '200';  		// squared
	$example2 = $root . '200/180'; 		// specific width and height
	$example3 = $root . '200/180/1';	// specific image
	#$example4 = $root . 'g/200';		// grayscale

	#logs
	$today = file_exists('stat/'.date('Y-m-d').'.log') ? file_get_contents('stat/'.date('Y-m-d') .'.log') : 0;
	$all_time = file_exists('stat.log') ? file_get_contents('stat.log') : 0;

	include('header.php');
?>
	<div class="container">
		<div id="main">
			<div class="row-fluid">
				<div class="span6">
					<p>Need placeholder images to put on your layout? Love babies? Placebabies FTW! This is just a quick and simple service to deliver pictures of babies for use as placeholders in your layout. Just put your image size after the URL and you're done!</p>

					<div class="well">
						<p><a class="code-style" href="<?=$example1?>"><?=$example1?></a> <small><em>...displays a squared image</em></small></p>
						<p><a class="code-style" href="<?=$example2?>"><?=$example2?></a> <small><em>...displays an image with specific width and height</em></small></p>
						<p><a class="code-style" href="<?=$example3?>"><?=$example3?></a> <small><em>...and with a specific image</em></small></p>
						<!-- Or this: <a class="code-style" href="<?=$example4?>"><?=$example4?></a><br> -->
					</div>

					<ul class="social-buttons unstyled well">
						<li>
							<a class="socialite twitter-share" href="http://twitter.com/share" data-text="Placebabies - Placeholder with Babies" data-url="<?= $sitename ?>" rel="nofollow" target="_blank">
						    Share on Twitter
						  </a>
						</li>
						<li>
							<a class="socialite facebook-like" data-href="<?= $sitename ?>" data-send="false" data-layout="button_count" data-width="110" data-show-faces="false" data-default-href="http://www.facebook.com/sharer.php?u=<?= $sitename ?>&amp;t=Placebabies - Placeholder with Babies" rel="nofollow" target="_blank">
						    Like on Facebook
						  </a>
						</li>
						<li>
							<a href="https://plus.google.com/share?url=<?= $sitename ?>" class="socialite googleplus-one" data-href="<?= $sitename ?>" rel="nofollow" target="_blank">
								Share on Google+
							</a>
						</li>
			
					</ul>
				</div>

				<div class="span6">
					<div class="example">
						<img src="<?= $$root . '440/382' ?>">
					</div>
				</div>
			</div>

	    <div id="disqus_thread"></div>
	    <script type="text/javascript">
	      /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	      var disqus_shortname = 'placebabies'; // required: replace example with your forum shortname

	      /* * * DON'T EDIT BELOW THIS LINE * * */
	      (function() {
	          var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
	          dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
	          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
	      })();
	    </script>
	    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
	  </div>
  </div>

<?php include('footer.php'); ?>