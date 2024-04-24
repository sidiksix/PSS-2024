<?php
/* Smarty version 4.5.1, created on 2024-04-24 20:44:45
  from 'C:\xampp\htdocs\php_06_a_b\app\views\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6629531d559da8_41729843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1500c5b42cf3023fcc36f3766095f693ed9f520' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_a_b\\app\\views\\calc.tpl',
      1 => 1713984284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6629531d559da8_41729843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19862698606629531d54ff62_25094013', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18159093136629531d550775_16756493', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_19862698606629531d54ff62_25094013 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_19862698606629531d54ff62_25094013',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_18159093136629531d550775_16756493 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18159093136629531d550775_16756493',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">Wyloguj</a>
	</br></br>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>


<header id="header" class="alt">
	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/main.tpl">Kalkualtor</a></h1>
	<nav id="nav">
		<ul>
			<li class="special">
				<a href="#menu" class="menuToggle"><span>Menu</span></a>
				<div id="menu">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Strona Główna</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php">Kalkulator</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</nav>
</header>

<section>
	<h4>Formularz</h4>
	</br>
	<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
calcCompute" method="post" class="pure-form pure-form-aligned bottom-margin">
		<div class="row gtr-uniform">

			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Kwota" id="kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
"
					placeholder="Kwota" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Ile lat" id="lata " name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
"
					placeholder="Ile Lat" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Wartosc Oprocentowania" id="oprocentowanie" name="oprocentowanie"
					value="<?php echo $_smarty_tpl->tpl_vars['form']->value->oprocentowanie;?>
" placeholder="Oprocentowanie" />
			</div>

			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>
				</ul>
			</div>
		</div>
	</form>


<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
<div class="messages info">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>


<?php
}
}
/* {/block 'content'} */
}
