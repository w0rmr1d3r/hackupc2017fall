<?php
    class Board
    {
        private $boxes;
        private $done;

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
    }
?>