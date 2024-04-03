<?php
/* Smarty version 4.5.1, created on 2024-04-03 19:53:24
  from 'C:\xampp\htdocs\php_03_szablony\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d9794a82554_02959074',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0ef6b9abb4a9604ca59d51cc3393bec9078d58e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03_szablony\\templates\\main.tpl',
      1 => 1712166767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d9794a82554_02959074 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>

<head>
	<title><?php echo (($tmp = $_smarty_tpl->tpl_vars['page_title']->value ?? null)===null||$tmp==='' ? "Tytuł domyślny" ?? null : $tmp);?>
</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
	<?php if ($_smarty_tpl->tpl_vars['hide_intro']->value) {?>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/hide.css">
	<?php }?>
	<noscript>
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" />
	</noscript>
</head>

<body class="landing is-preload">

	<!-- Page Wrapper -->
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/main.html">Kalkulator</a></h1>
			<nav id="nav">
				<ul>
					<li class="special">
						<a href="#menu" class="menuToggle"><span>Menu</span></a>
						<div id="menu">
							<ul>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/index.php">Strona Główna</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php">Kalkulator</a></li>
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
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1451574693660d9794a81170_77441471', 'content');
?>

			</div>
		</section>



		<!-- Footer -->
		<footer id="footer">
			<ul class="copyright">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_628640529660d9794a81737_89078799', 'footer');
?>

			</ul>
		</footer>

	</div>

	<!-- Scripts -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

</body>

</html><?php }
/* {block 'content'} */
class Block_1451574693660d9794a81170_77441471 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1451574693660d9794a81170_77441471',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_628640529660d9794a81737_89078799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_628640529660d9794a81737_89078799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść stopki .... <?php
}
}
/* {/block 'footer'} */
}
