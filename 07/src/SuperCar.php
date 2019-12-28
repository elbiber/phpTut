<?php
class SuperCar extends Car
	{
	public function __construct($ps)
	{
		parent::__construct($ps + 500);
			// $this->ps = $ps + 500;
	}
	public function drive($location)
	{
		// var_dump("Ein SuperCar fährt mit {$this->getPs()} PS nach {$location}.");
		return parent::drive($location);
	}

	public function fly()
	{
		return "Ein SuperCar ist am Fliegen" . "\n";
	}
}