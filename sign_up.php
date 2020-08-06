<!DOCTYPE html>
<?php 
session_start();

if(isset($_SESSION['sold']) & isset($_SESSION['username']) & isset($_SESSION['address'])) {
    header('Location: /blockchain/wallet/transaction/');
    exit();
}
?>

<html class="no-js" lang="en">

	<head>
		<title>Wallet</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
		<meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

		<meta name="theme-color" content="#3F6EBF" />
		<meta name="msapplication-navbutton-color" content="#3F6EBF" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#3F6EBF" />

		<!-- Favicons
		================================================== -->
		<link rel="shortcut icon" href="img/favicon.ico">
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="css/style.min.css" type="text/css">

		<!-- Load google font
		================================================== -->
		<script type="text/javascript">
			WebFontConfig = {
				google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
			};
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + 
				'://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();
		</script>

		<!-- Load other scripts
		================================================== -->
		<script type="text/javascript">
			var _html = document.documentElement,
				isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

			_html.className = _html.className.replace("no-js","js");

			isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
		</script>
		<script type="text/javascript" src="js/device.min.js"></script>
	</head>

	<body>
		<!-- start main -->
		<main role="main">
			<!-- start section -->
			<section class="section section--no-pt section--no-pb section--light-bg">
				<div class="grid grid--container">
					<div class="authorization authorization--login">
						<a class="site-logo">
							<img class="img-responsive" width="175" height="42" src="img/jesusgun.png" alt="demo">
						</a>

						<form class="authorization__form" action="interaction.php" method="post">
							<h3 class="__title">Sign Up</h3>
                            <input id="action" name="action" type="hidden" value="register">
							<div class="input-wrp">
								<input class="textfield" name="username" type="text" value="" placeholder="Username" />
							</div>

							<div class="input-wrp">
								<input class="textfield" name="password" type="password" value="" placeholder="Password" />
							</div>

							<p>

								<button class="custom-btn custom-btn--medium custom-btn--style-2 wide" type="submit" role="button">Register</button>
							</p>

						</form>
					</div>
				</div>
			</section>
			<!-- end section -->
		</main>
		<!-- end main -->

		<div id="btn-to-top-wrap">
			<a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

		<script type="text/javascript" src="js/main.min.js"></script>
		<script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='https://www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X','auto');ga('send','pageview');
		</script>
	</body>
</html>
