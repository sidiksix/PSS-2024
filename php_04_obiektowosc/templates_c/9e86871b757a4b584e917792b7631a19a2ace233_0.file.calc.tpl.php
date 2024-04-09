<?php
/* Smarty version 4.5.1, created on 2024-04-09 19:56:53
  from 'C:\xampp\htdocs\php_04_obiektowosc\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_66158165303fe3_07709324',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e86871b757a4b584e917792b7631a19a2ace233' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc\\app\\calc.tpl',
      1 => 1712684405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66158165303fe3_07709324 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1609236999661581652f7813_21421979', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_920973171661581652f8035_18264998', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ($_smarty_tpl->tpl_vars['conf']->value->root_path).("/templates/main.tpl"));
}
/* {block 'footer'} */
class Block_1609236999661581652f7813_21421979 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1609236999661581652f7813_21421979',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_920973171661581652f8035_18264998 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_920973171661581652f8035_18264998',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


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
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/calc.php" method="post">
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




	<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
