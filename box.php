<?php
    class Box
    {
        private $cells;
        private $done;
        private $rowSize;
        private $realRowSize;
        private $remainingCellsToBeDone;

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
            $this->realRowSize = 3;
        }

        public function removeOptionsRow($row, $option){
            $until = $row*$this->realRowSize+$this->realRowSize;
            for ($i=$row*$this->realRowSize; $i < $until; $i++) { 
                $this->cells[$i]->removeOptionsCell($option);
                //echo "ESPECIAL: ".$this->cells[$i]->getNumber()." ".$row." ";
            }

            //DEBUG
            //$this->showCells();
        }

        public function removeOptionsCol($col, $option){
            $until = $col+9;
            for ($i=$col; $i < $until; $i+=3) { 
                $this->cells[$i]->removeOptionsCell($option);
            }
        }

        public function getSizeRows()
        {
            return $this->realRowSize;
        }

        public function getCell($cellPosition = -1)
        {
            if ($cellPosition !== -1)
            {
                return $this->cells[$cellPosition];
            }
        }

        public function getCells()
        {
            return $this->cells;
        }

        public function getRemainingCellsToBeDone()
        {
            $this->checkRemainingCellsToBeDone();
            return $this->remainingCellsToBeDone;
        }

        private function checkRemainingCellsToBeDone()
        {
            $cellsDone = 0;
            foreach ($this->cells as $cell)
            {
                $cellsDone += ($cell->isDone() ? 0 : 1);
            }
            $this->remainingCellsToBeDone = $cellsDone;
        }

        public function selectCellsByCol($index)
        {
            $col;
            switch ($index) {
                case 0:
                case 1:
                case 2:
                    $col = [
                    $this->cells[0],
                    $this->cells[3],
                    $this->cells[6]
                    ];
                    break;
                case 3:
                case 4:
                case 5:
                    $col = [
                    $this->cells[1],
                    $this->cells[4],
                    $this->cells[7]
                    ];
                    break;
                case 6:
                case 7:
                case 8:
                    $col = [
                    $this->cells[2],
                    $this->cells[5],
                    $this->cells[8]
                    ];break;

                default:
                    $col = -1;
                    break;
            }
            return $col;
        }

        public function selectCellsByRow($index)
        {
            $row;
            switch ($index) {
                case 0:
                case 1:
                case 2:
                    $row = [
                    $this->cells[0],
                    $this->cells[1],
                    $this->cells[2]
                    ];
                    break;
                case 3:
                case 4:
                case 5:
                    $row = [
                    $this->cells[3],
                    $this->cells[4],
                    $this->cells[5]
                    ];
                    break;
                case 6:
                case 7:
                case 8:
                    $row = [
                    $this->cells[6],
                    $this->cells[7],
                    $this->cells[8]
                    ];break;

                default:
                    $row = -1;
                    break;
            }
            return $row;
        }

        public function getRow($index)
        {
            $row = "";
            switch ($index) {
                case 0:
                    $row = $this->cells[0]->getNumber().$this->cells[1]->getNumber().$this->cells[2]->getNumber();
                    break;
                case 1:
                    $row = $this->cells[3]->getNumber().$this->cells[4]->getNumber().$this->cells[5]->getNumber();
                    break;
                case 2:
                    $row = $this->cells[6]->getNumber().$this->cells[7]->getNumber().$this->cells[8]->getNumber();
                    break;
                default:
                    $row = -1;
                    break;
            }
            return $row;
        }

        public function getCol($index)
        {
            $row = "";
            switch ($index) {
                case 0:
                    $row = $this->cells[0]->getNumber().$this->cells[3]->getNumber().$this->cells[6]->getNumber();
                    break;
                case 1:
                    $row = $this->cells[1]->getNumber().$this->cells[4]->getNumber().$this->cells[7]->getNumber();
                    break;
                case 2:
                    $row = $this->cells[2]->getNumber().$this->cells[5]->getNumber().$this->cells[8]->getNumber();
                    break;
                default:
                    $row = -1;
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
                //$fila = $fila.$cell->getNumber();
                $fila = $fila.$cell->getRemainingOptions();

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