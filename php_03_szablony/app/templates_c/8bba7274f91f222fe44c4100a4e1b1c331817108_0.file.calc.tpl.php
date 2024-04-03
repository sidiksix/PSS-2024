<?php
/* Smarty version 4.5.1, created on 2024-04-03 19:53:24
  from 'C:\xampp\htdocs\php_03_szablony\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_660d9794a736d1_05583197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bba7274f91f222fe44c4100a4e1b1c331817108' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03_szablony\\app\\calc.tpl',
      1 => 1712166785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660d9794a736d1_05583197 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_746035623660d9794a63153_05059530', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1505983612660d9794a63989_57219429', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_746035623660d9794a63153_05059530 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_746035623660d9794a63153_05059530',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_1505983612660d9794a63989_57219429 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1505983612660d9794a63989_57219429',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\php_03_szablony\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>


<header id="header" class="alt">
	<h1><a href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/main.tpl">Kalkualtor</a></h1>
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

<section>
	<h4>Formularz</h4>
	</br>
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
		<div class="row gtr-uniform">

			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Kwota" id="kwota" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
"
					placeholder="Kwota" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Ile lat" id="lata " name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
"
					placeholder="Ile Lat" />
			</div>
			</br>
			<div class="col-4 col-8-xsmall">
				<input type="text" placeholder="Wartosc Oprocentowania" id="oprocentowanie" name="oprocentowanie"
					value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
" placeholder="Oprocentowanie" />
			</div>

			<div class="col-12">
				<ul class="actions">
					<li><input type="submit" value="Oblicz" class="primary" /></li>
				</ul>
			</div>
		</div>
	</form>




		<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>
	<?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
	<?php }?>
	<?php }?>

	<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
		<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
	<?php }?>

</section>
<?php
}
}
/* {/block 'content'} */
}
