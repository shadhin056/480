<?php

class Account{
	
private $accountID;
private $accountBalance;
static private $count;

		public function __construct($accountID,$accountBalance,$count)
		{
			$this->accountID=$accountID;
			$this->accountBalance=$accountBalance;
			$this->count=$count;
		}

		public	function showAccountInfo()
			{
				echo $this->accountID."<br/>";
				echo $this->accountBalance."<br/>";
			}
		public function deposit($d)
		{
			$this->accountBalance+=$d;
		}
		public function withdraw($wt)
		{
			$this->accountBalance-=$wt;
		}
		public function transfer($rec,$am)
		{
			$rec->accountBalance+=$am;
			$rec2->accountBalance+=$am;
		}
		static public function showInformation($i,$j)
		{
			echo $i->accountID."<br/>";
			echo $i->accountBalance."<br/>";
			echo $j->accountID."<br/>";
			echo $j->accountBalance."<br/>";
		}


}

$rec = new Account(1,1000,1);
$rec2 = new Account(2,2000,2);
$rec->deposit(500);
$rec->withdraw(200);
$rec2->deposit(500);
$rec2->withdraw(200);
$rec->transfer($rec,100);
$rec2->transfer($rec2,100);
$rec->showAccountInfo();
$rec2->showAccountInfo();
Account::showInformation($rec,$rec2);

?>
