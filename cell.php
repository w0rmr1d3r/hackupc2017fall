<?php
	class Cell
	{
		private $options;
        private $number;

        public function __construct()
        {
            $this->options = [true, true, true, true, true, true, true,true, true];
            $this->number = 0;
        }

        public function getOptionsArray()
        {
            return $this->options;
        }

        public function getNumber()
        {
            return $this->number;
        }

        public function changeOption($number)
        {
            $this->options[$number] = !$this->options[$number];
        }

        public function setNumber($finalNumber)
        {
            $this->number = $finalNumber;
            $this->options = [false, false, false, false, false, false, false, false, false];
        }
	}
?> 