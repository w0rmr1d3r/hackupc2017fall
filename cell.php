<?php
	class Cell
	{
		private $options;
        private $number;
        private $remainingOptions;
        private $done;

        public function __construct()
        {
            $this->options = [True, True, True, True, True, True, True,True, True];
            $this->number = 0;
            $this->remainingOptions = 9;
            $this->done = False;
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
            return $this->done;
        }

        public function changeOption($number =  NULL)
        {
            if (!is_null($number)
            {
                $this->remainingOptions = ($this->options[$number] ?
                    $remainingOptions-- : $vremainingOptions++ );
                $this->options[$number] = !$this->options[$number];
            }
        }

        public function setNumber($finalNumber)
        {
            $this->number = $finalNumber;
            $this->options = [False, False, False, False, False, False, False, False, False];
            $this->remainingOptions = 0;
            $this->done = True;
        }
	}
?> 