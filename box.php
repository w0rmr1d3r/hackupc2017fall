<?php
    class Box
    {
        private $cells;
        private $done;
        private $rowSize;

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
            $this->rowSize = 1;
        }

        public function getCell($cellPosition = -1)
        {
            if ($cellPosition !== -1)
            {
                return $this->cells[$cellPosition];
            }
        }

        public function getRow($index)
        {
            $row = "";
            switch ($index) {
                case 0:
                    # code...
                    break;
                case 1:
                    # code...
                    break;
                case 2:
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
            return $row;
        }

        public function showCells()
        {
            $fila = "";
            $actualPosition = 0;
            foreach ($this->cells as $cell) 
            {
                $fila = $fila.$cell->getNumber();

                if ($this->rowSize < $actualPosition)
                {
                    //echo $fila;
                    //$fila = "";
                    /*echo '
                ';*/
                    $fila = $fila."\n";

                    $actualPosition = 0;
                } else 
                {
                    $actualPosition += 1;   
                }
            }
            //AUI HAGO EL ECHO
            echo $fila;
        }
    }
?>