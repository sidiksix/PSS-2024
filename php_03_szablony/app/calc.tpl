{extends file="../templates/main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}

<header id="header" class="alt">
	<h1><a href="{$app_url}/main.tpl">Kalkualtor</a></h1>
	<nav id="nav">
		<ul>
			<li class="special">
				<a href="#menu" class="menuToggle"><span>Menu</span></a>
				<div id="menu">
					<ul>
						<li><a href="{$app_url}/index.php">Strona Główna</a></li>
						<li><a href="{$app_url}/app/calc.php">Kalkulator</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
</header>

<section>
	<h4>Formularz</h4>
	</br>
	<form class="pure-form pure-form-stacked" action="{$app_url}/app/calc.php" method="post">
		<div class="row gtr-uniform">

			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Kwota" id="kwota" name="kwota" value="{$form['kwota']}"
					placeholder="Kwota" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Ile lat" id="lata " name="lata" value="{$form['lata']}"
					placeholder="Ile Lat" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Wartosc Oprocentowania" id="oprocentowanie" name="oprocentowanie"
					value="{$form['oprocentowanie']}" placeholder="Oprocentowanie" />
			</div>

			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>
				</ul>
			</div>
		</div>
	</form>




	{* wyświeltenie listy błędów, jeśli istnieją *}
	{if isset($messages)}
	{if count($messages) > 0}
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
		{foreach $messages as $msg}
		{strip}
		<li>{$msg}</li>
		{/strip}
		{/foreach}
	</ol>
	{/if}
	{/if}

	{* wyświeltenie listy informacji, jeśli istnieją *}
	{if isset($infos)}
	{if count($infos) > 0}
	<h4>Informacje: </h4>
	<ol class="inf">
		{foreach $infos as $msg}
		{strip}
		<li>{$msg}</li>
		{/strip}
		{/foreach}
	</ol>
	{/if}
	{/if}

	{if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
		{$result}
	</p>
	{/if}

</section>
{/block}