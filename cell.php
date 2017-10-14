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
            $this->number = '-';
            $this->remainingOptions = 9;
            $this->done = False;
        }

        public function resolve()
        {
            if ($this->remainingOptions <= 1){
                //NOTHING
            } else
            {
                for ($i=0; $i < sizeof($this->options); $i++) 
                { 
                    if($this->options && $i <10){
                        $this->number = $i;
                        $this->remainingOptions = 0;
                    }
                }
            }
        }

        public function removeOptionsCell($option)
        {
            $this->options[$option] = false;
            if($this->remainingOptions > 0){
                $this->remainingOptions--;
            }
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
            if (!is_null($number))
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