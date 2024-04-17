<!DOCTYPE HTML>
<html>

<head>
	<title>{$page_title|default:"Tytuł domyślny"}</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
	{if $hide_intro}
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/hide.css">
	{/if}
	<noscript>
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" />
	</noscript>
</head>

<body class="landing is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="{$conf->app_url}/main.html">Kalkulator</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="{$conf->app_url}/index.php">Strona Główna</a></li>
								<li><a href="{$conf->action_root}calcCompute">Kalkulator</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<div class="inner">
				<h2>Kalkulator Kredytowy</h2>
			</div>
			<a href="#one" class="more scrolly">Sprawdz Swoją Oferte</a>
		</section>

		<!-- One -->
		<section id="one" class="wrapper style5">
			<div class="inner">
				{block name=content} Domyślna treść zawartości .... {/block}
			</div>
		</section>



		<!-- Footer -->
		<footer id="footer">
			<ul class="copyright">
				{block name=footer} Domyślna treść stopki .... {/block}
			</ul>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
	<script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
	<script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
	<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
	<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
	<script src="{$conf->app_url}/assets/js/util.js"></script>
	<script src="{$conf->app_url}/assets/js/main.js"></script>

</body>

</html>