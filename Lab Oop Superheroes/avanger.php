<?php

class avanger extends superhero {

    public $team = 'avanger';

		public function __construct($name, $gender, $oneliner)
	{
	    parent::__construct($name, $gender, $this->team, $oneliner);
	}
	
}

