<!DOCTYPE html>

<?php
session_start();
include('../config/db.php');

if(!isset($_SESSION['username'])) {
    header('Location: /blockchain/wallet/sign_in.php');
    exit();
}

$sold = shell_exec('C:\Python36\python.exe ../../count_the_money.py ' . $_SESSION['address']);
                    
if($sold === "") {
    $_SESSION['sold'] = 0;
} else {
    $_SESSION['sold'] = $sold;
}


?>

<html lang="ru" class="no-js">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>

	<meta charset="utf-8">
	<!-- <base href="/"> -->

	<title>IssouCoin - Wallet</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- Template Basic Images Start -->
	<meta property="og:image" content="path/to/image.html">
	<link rel="icon" href="img/favicon/favicon.ico">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	<!-- Template Basic Images End -->
	
	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">
	<!-- Custom Browsers Color End -->

	<link rel="stylesheet" href="css/main.min.css">

	<!-- Load google font
	================================================== -->
	<script type="text/javascript">
		WebFontConfig = {
			google: { families: [ 'Lato:300,400,500,700'] }
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
		var _html = document.documentElement;
		_html.className = _html.className.replace("no-js","js");
	</script>

	<style>.preloader{width: 100%;height: 100%;position: fixed;background-color: #fff;z-index: 9999;}</style>


</head>

<body>

	<div class="preloader"></div>

	<div class="wrapper">

		<header class="header">

			<div class="inner-col">

				<a href="#" class="mobile-logo d-md-none">
					<img src="img/logo.png" alt="">
				</a>

				<div class="btn-menu btn-menu--left">
					<div></div>
					<div></div>
					<div></div>
                </div>
			</div>

		
			<div class="inner-row align-right">


				<div class="d-none d-md-block">
					<div class="user">
						<div class="user__avatar">
							<img src="img/user.png" alt="">
							
						</div>
						<p class="user__name">
							<?php 
                            echo $_SESSION['username'];
                            ?>
						</p>

					</div>
				</div>

				<div class="btn-menu btn-menu--right">
					<div></div>
					<div></div>
					<div></div>
				</div>

			</div>

		</header>

		<div class="content">
			<aside class="sidebar">
				<div class="sidebar__close-btn">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="16" viewBox="0 0 15 16"><defs><path id="hy9fa" d="M294.49 17.58L307.92 31l-1.41 1.41L293.08 19z"/><path id="hy9fb" d="M293.08 31.01l13.43-13.43 1.41 1.41-13.43 13.43z"/></defs><g><g transform="translate(-293 -17)"><use fill="#fff" xlink:href="#hy9fa"/></g><g transform="translate(-293 -17)"><use fill="#fff" xlink:href="#hy9fb"/></g></g></svg>
				</div>
				


			</aside>

			<main class="main-content">
				<section class="wallets">
					<h2>Wallet</h2>

					<div class="wallets__list">

						<a href="wallet-bitcoin.html" class="wallet" style="background-color: #f0941c;">

							<span class="wallet__header">
								<span class="wallet__currency">
									<span class="wallet__currency-icon">
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											width="42px" height="42px" viewBox="0 0 42 42" style="enable-background:new 0 0 42 42;" xml:space="preserve">
											<g>
												<path d="M20.3,21.4l-1,3.8c1.1,0.3,4.8,1.5,5.3-0.7C25.1,22.2,21.3,21.7,20.3,21.4z"/>
												<path d="M21.5,16.1l-0.9,3.5c1,0.3,4,1.3,4.5-0.7S22.5,16.4,21.5,16.1z"/>
												<path d="M32,0H10C4.5,0,0,4.5,0,10v22c0,5.5,4.5,10,10,10h22c5.5,0,10-4.5,10-10V10C42,4.5,37.5,0,32,0z M28.5,18.9
													c-0.2,1.6-1.1,2.3-2.3,2.7c1.6,0.8,2.4,2,1.6,4.2c-0.9,2.6-3.1,2.9-6.1,2.3L21,31l-1.7-0.4l0.7-2.8c-0.5-0.2-0.9-0.3-1.4-0.4
													l-0.7,2.8l-1.7-0.4l0.7-2.9c-0.4-0.1-0.8-0.2-1.2-0.3L13.4,26l0.9-2l1.3,0.3c0.5,0.1,0.7-0.2,0.8-0.4l1.1-4.5c0.1,0,0.1,0,0.2,0
													c-0.1-0.1-0.2-0.1-0.2-0.1l0.8-3.2c0-0.4-0.1-0.8-0.8-1l-1.3-0.3l0.5-1.9l2.4,0.6c0.4,0.1,0.7,0.2,1.1,0.3l0.7-2.8l1.7,0.4
													l-0.7,2.8c0.5,0.1,0.9,0.2,1.4,0.3l0.7-2.8l1.7,0.4L25,14.9C27.2,15.7,28.8,16.8,28.5,18.9z"/>
											</g>
									   </svg>
									</span>
									<span class="wallet__currency-info">
										<span>Issoucoin</span>
										<span>ISC</span>
									</span>
								</span>

								<span class="wallet__course">
									<span><?php echo $_SESSION['sold']; ?> ISC</span>
									<span>0 USD</span>
								</span>
							</span>

							<span class="wallet__footer">
                                <span>Address: <?php echo $_SESSION['address'];?></span>
							</span>

							<span class="wallet__bg-img">
								<img src="img/wallet-bg-img-1.png" alt="">
							</span>
						</a>

					</div>
				</section>
			</main>
                
            <main class="main-content">
				
				<div class="buy">
					<div class="buy__header">

						<h2>Buy/Sale</h2>

					</div>

					<div class="buy__body">
				
						<div class="payment">

							<h3>Send ISC</h3>
                            
							<div class="payment__row">
                                <form class="authorization__form" action="../../transaction.php" method="post">
								<div class="form__row">
									<div class="form__col credit-card">
										<label class="form__label">Amount:</label>
										<div class="input-wrap">
											<input type="text" name="amount" placeholder="5">
										</div>
									</div>
									<div class="form__col credit-card-name">
										<label class="form__label">To:</label>
										<div class="input-wrap">
											<input type="text" name="to" placeholder="<?php echo $_SESSION['address']; ?>">
										</div>
									</div>
								</div>

							</div>


							<div class="payment__row">
                                <button type="submit" class="btn btn--green">Send</button>
							</div>

						</div>
					</div>
				</div>

			</main>

	
	<script src="../../../../ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script>

	<script src="js/scripts.min.js"></script>

</body>
</html>
