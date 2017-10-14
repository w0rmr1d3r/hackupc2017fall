<?php
	class Cell
	{
		private $options;
        private $number;
        private $remainingOptions;

        public function __construct()
        {
            $this->options = [True, True, True, True, True, True, True,True, True];
            $this->number = '-';
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

        public function changeOption($number =  NULL, $newValue = NULL)
        {
            if (!is_null($number) && !$this->isDone() && $number < 10 && !is_null($newValue))
            {
                $this->options[$number] = $newValue;
                $this->remainingOptions += ($newValue ? 1 : -1 );
            }
        }

        public function changeAllOptions($newValue)
        {
            for ($i = 0; $i < count($this->options); $i++)
            {
                $this->options[$i] = $newValue;
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