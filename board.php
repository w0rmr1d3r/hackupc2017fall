<?php
    class Board
    {
        private $boxes;
        private $done;
        private $BoardSize;
        public function __construct()
        {
            $this->boxes = [
                new Box(),
                new Box(),
                new Box(),
                new Box(),
                new Box(),
                new Box(),
                new Box(),
                new Box(),
                new Box()
            ];
            $this->done = false;

        }

        public function getBox($boxPosition)
        {
            return $this->boxes[$boxPosition];
        }

        public function getBoxes()
        {
            return $this->boxes;
        }

        public function print()
        {
            foreach ($this->boxes as $box) 
            {
                $box->showCells();
            }
        }
    }
?>