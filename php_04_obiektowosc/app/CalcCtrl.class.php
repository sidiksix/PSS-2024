<?php

require_once $conf->root_path.'\lib\smarty\libs\Smarty.class.php';
require_once $conf->root_path.'/lib/messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

class CalcCtrl {

	private $msgs;   
	private $form;  
	private $result; 
	private $hide_intro;

	public function __construct(){
		
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false;
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
	}
	

	public function validate() {
		
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			
			return false; 
		} else { 
			$this->hide_intro = true; 
		}
		
		
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty');
		}
		if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano na ile lat');
		}
        if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano oprocentowania');
		}
		
		
		if (! $this->msgs->isError()) {
			
			
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				$this->msgs->addError('Druga wartość nie jest liczbą całkowitą');
			}
            if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! $this->msgs->isError();
	}
	
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
			$this->msgs->addInfo('Parametry poprawne.');
				
			
            $odsetki = ($this->form->kwota * $this->form->oprocentowanie / 100);
	        $do_splaty = $this->form->kwota + $odsetki;
	        $liczba_rat = $this->form->lata * 12;
	        $miesieczna_rata = $do_splaty / $liczba_rat;
	        $this->result->result = round($miesieczna_rata, 2);
			
			$this->msgs->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	

	public function generateView(){
		global $conf;
		
		$smarty = new Smarty();
		$smarty->assign('conf',$conf);
		
		$smarty->assign('page_title','Przykład 04');
		$smarty->assign('page_description','Obiektowość. Funkcjonalność aplikacji zamknięta w metodach różnych obiektów. Pełen model MVC.');
		$smarty->assign('page_header','Obiekty w PHP');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc.tpl');
	}
}
