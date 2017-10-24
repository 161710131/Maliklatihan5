<?php

class kuda{
    	public $kaki  ;
    	public $berat ;

    	public function set_kaki($kaki){
    		$this->kaki = $kaki;
    	}
    	public function get_kaki(){
    		return $this->kaki;
    	}
    	public function set_berat($berat){
    		$this->berat = $berat;
    	}
    	public function get_berat(){
    		return $this->berat;
    	}

    }

    $kuda = new kuda;
    $kuda->set_kaki("4");
    $kuda->set_berat("80"); 
    	echo "kaki kuda ada :  " .$kuda->get_kaki().' kaki'.'<br>';
        echo "berat kuda adalah :  " .$kuda->get_berat().' kg';

?>