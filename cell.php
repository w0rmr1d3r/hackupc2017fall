<?php
	class Cell
	{
		private $options;
        private $number;
        private $remainingOptions;

        public function __construct()
        {
            $this->options = [True, True, True, True, True, True, True,True, True];
            $this->number = 0;
            $this->remainingOptions = 9;
        }

        public function getOptions()
        {
            return $this->options;
        }

        public function getNumber()
        {
            return $this->number;
        }

        public function getRemainingOptions()
        {
            return $this->remainingOptions;
        }

        public function isDone()
        {
            return ($this->remainingOptions == 0);
        }

        public function changeOption($number =  NULL)
        {
            if (!is_null($number))
            {
                $this->remainingOptions = ($this->options[$number] ? $remainingOptions-- : $remainingOptions++ );
                $this->options[$number] = !$this->options[$number];
            }
        }

        public function setNumber($finalNumber = NULL)
        {
            if (!is_null($finalNumber))
            {
                $this->number = $finalNumber;
                $this->options = [False, False, False, False, False, False, False, False, False];
                $this->remainingOptions = 0;
            }
        }
	}
?> 