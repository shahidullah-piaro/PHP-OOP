<?php
class Fund{
    private $fund;
    function __construct($initialFund = 0) {
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund += $money;
    }

    public function deductFund($money){
        $this->fund -= $money;
    }

    public function getFund(){
        echo "Total fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
$ourFund->getFund();
$ourFund->addFund(200);
$ourFund->deductFund(10);
$ourFund->getFund();