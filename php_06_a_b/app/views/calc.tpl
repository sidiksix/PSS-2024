{extends file="main.tpl"}

{block name=footer}przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora{/block}

{block name=content}
<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="{$conf->action_url}logout"  class="pure-menu-heading pure-menu-link">Wyloguj</a>
	</br></br>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>


<header id="header" class="alt">
	<h1><a href="{$conf->app_url}/main.tpl">Kalkualtor</a></h1>
	<nav id="nav">
		<ul>
			<li class="special">
				<a href="#menu" class="menuToggle"><span>Menu</span></a>
				<div id="menu">
					<ul>
						<li><a href="{$conf->app_url}/index.php">Strona Główna</a></li>
						<li><a href="{$conf->app_url}/app/calc.php">Kalkulator</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
</header>

<section>
	<h4>Formularz</h4>
	</br>
	<form action="{$conf->action_url}calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
		<div class="row gtr-uniform">

			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Kwota" id="kwota" name="kwota" value="{$form->kwota}"
					placeholder="Kwota" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Ile lat" id="lata " name="lata" value="{$form->lata}"
					placeholder="Ile Lat" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Wartosc Oprocentowania" id="oprocentowanie" name="oprocentowanie"
					value="{$form->oprocentowanie}" placeholder="Oprocentowanie" />
			</div>

			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>
				</ul>
			</div>
		</div>
	</form>


{include file='messages.tpl'}

{if isset($res->result)}
<div class="messages info">
	Wynik: {$res->result}
</div>
{/if}


{/block}