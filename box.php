<?php
    class Box
    {
        private $cells;
        private $done;

        public function __construct()
        {
            $this->cells = [
                new Cell(),
                new Cell(),
                new Cell(),
                new Cell(),
                new Cell(),
                new Cell(),
                new Cell(),
                new Cell(),
                new Cell()
            ];
            $this->done = false;
        }

        public function getCell($cellPosition = -1)
        {
            if ($cellPosition !== -1)
            {
                return $this->cells[$cellPosition];
            }
        }

        public function showCells()
        {
            foreach ($this->cells as $cell) {
                echo $cell->getNumber();
                echo '
                ';
            }
        }
    }
?>