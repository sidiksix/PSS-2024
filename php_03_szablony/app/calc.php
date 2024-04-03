<?php
require_once dirname(__FILE__) . '/../config.php';
require_once _ROOT_PATH . '\smarty\libs\Smarty.class.php';


function getParams(&$form)
{
	$form['kwota'] = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$form['lata'] = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$form['oprocentowanie'] = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;
}


function validate(&$form, &$infos, &$msgs, &$hide_intro)
{

	if (!(isset($form['kwota']) && isset($form['lata']) && isset($form['oprocentowanie'])))	return false;

	$hide_intro = true;
	$infos[] = 'Przekazano parametry.';

	if ($form['kwota'] == "") {
		$msgs[] = 'Nie podano kwoty';
	}
	if ($form['lata'] == "") {
		$msgs[] = 'Nie podano na ile lat';
	}
	if ($form['oprocentowanie'] == "") {
		$msgs[] = 'Nie podano oprocentowania';
	}
	if (count($msgs) != 0) return false;

	if (!is_numeric($form['kwota'])) {
		$msgs[] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}

	if (!is_numeric($form['lata'])) {
		$msgs[] = 'Druga wartość nie jest liczbą całkowitą';
	}
	if (!is_numeric($form['oprocentowanie'])) {
		$msgs[] = 'Trzecia wartość nie jest liczbą całkowitą';
	}

	if (count($msgs) > 0) return false;
	else return true;
}


function process(&$form, &$infos, &$msgs, &$result)
{

	$infos[] = 'Parametry poprawne. Wykonuję obliczenia.';


	$form['kwota'] = intval($form['kwota']);
	$form['lata'] = intval($form['lata']);
	$form['oprocentowanie'] = intval($form['oprocentowanie']);


	$odsetki = ($form['kwota'] * $form['oprocentowanie'] / 100);
	$do_splaty = $form['kwota'] + $odsetki;
	$liczba_rat = $form['lata'] * 12;
	$miesieczna_rata = $do_splaty / $liczba_rat;
	$result = round($miesieczna_rata, 2);
}


$form = null;
$infos = null;
$result = null;
$messages = array();
$hide_intro = false;

getParams($form);
if (validate($form, $infos, $messages, $hide_intro)) {
	process($form, $infos, $messages, $result);
}

$smarty = new Smarty();

$smarty->assign('app_url', _APP_URL);
$smarty->assign('root_path', _ROOT_PATH);
$smarty->assign('page_title', 'Kalkulator Kredytowy');
$smarty->assign('hide_intro', $hide_intro);
$smarty->assign('form', $form);
$smarty->assign('result', $result);
$smarty->assign('messages', $messages);
$smarty->assign('infos', $infos);

$smarty->display(_ROOT_PATH . '/app/calc.tpl');
