<?php

namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcCtrl {
 	private $form;  
	private $result;

	private $hide_intro;

	public function __construct(){
	
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = false; 
	}
	

	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}
	

	public function validate() {
		
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			
			return false; 
		} else { 
			$this->hide_intro = true; 
		}
		
		
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty');
		}
		if ($this->form->lata == "") {
			getMessages()->addError('Nie podano na ile lat');
		}
        if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania');
		}
		
		
		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
            if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	
	
	public function process(){

		$this->getparams();
		
		if ($this->validate()) {
				
			
			$this->form->kwota = intval($this->form->kwota);
			$this->form->lata = intval($this->form->lata);
            $this->form->oprocentowanie = intval($this->form->oprocentowanie);
			getMessages()->addInfo('Parametry poprawne.');
				
			
            $odsetki = ($this->form->kwota * $this->form->oprocentowanie / 100);
	        $do_splaty = $this->form->kwota + $odsetki;
	        $liczba_rat = $this->form->lata * 12;
	        $miesieczna_rata = $do_splaty / $liczba_rat;
	        $this->result->result = round($miesieczna_rata, 2);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	

	public function generateView(){


		getSmarty()->assign('page_title', 'Przykład 05');
		getSmarty()->assign('page_description', 'Kolejne rozszerzenia dla aplikacja z jednym "punktem wejścia". Do nowej struktury dołożono automatyczne ładowanie klas wykorzystując w strukturze przestrzenie nazw.');
		getSmarty()->assign('page_header', 'Kontroler główny');
		getSmarty()->assign('hide_intro', $this->hide_intro);
		getSmarty()->assign('form', $this->form);
		getSmarty()->assign('res', $this->result);

		getSmarty()->display('calc.tpl');
	}
}
