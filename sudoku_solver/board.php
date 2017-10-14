<?php
    class Board
    {
        private $boxes;
        private $done;
        private $boardSize;
        
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
            $this->boardSize = 3;
        }


        /**
        * FOR COL
        */
        public function removeOptionsCol($col, $option)
        {
            $boxesRow = $this->selectBoxesByCol($col);

            for ($i=0; $i < $this->boardSize; $i++) {
                $boxesRow[$i]->removeOptionsCol($col % 3, $option);
            }

        }

        public function getCol($index)
        {
            $rcol = "";
            $boxesCol = $this->selectBoxesByCol($index);

            $col = $boxesCol[0]->getCol($index % 3).$boxesCol[1]->getCol($index % 3).$boxesCol[2]->getCol($index % 3);

            return $col;
        }

        public function selectBoxesByCol($index)
        {
            $col;
            switch ($index) {
                case 0:
                case 1:
                case 2:
                    $col = [
                    $this->boxes[0],
                    $this->boxes[3],
                    $this->boxes[6]
                    ];
                    break;
                case 3:
                case 4:
                case 5:
                    $col = [
                    $this->boxes[1],
                    $this->boxes[4],
                    $this->boxes[7]
                    ];
                    break;
                case 6:
                case 7:
                case 8:
                    $col = [
                    $this->boxes[2],
                    $this->boxes[5],
                    $this->boxes[8]
                    ];break;

                default:
                    $col = -1;
                    break;
            }
            return $col;
        }

        /**
        *FOR ROW'S
        */
        public function removeOptionsRow($row, $option)
        {
            $boxesRow = $this->selectBoxesByRow($row);

            for ($i=0; $i < $this->boardSize; $i++) {
                $boxesRow[$i]->removeOptionsRow($row % 3, $option);
            }

        }

        public function getRow($index)
        {
            $boxesRow = $this->selectBoxesByRow($index);

            $row = [
                $boxesRow[0]->getRow($index % 3),
                $boxesRow[1]->getRow($index % 3),
                $boxesRow[2]->getRow($index % 3)
            ];

            return $row;
        }

        public function selectBoxesByRow($index)
        {
            $row;
            switch ($index) {
                case 0:
                case 1:
                case 2:
                    $row = [
                    $this->boxes[0],
                    $this->boxes[1],
                    $this->boxes[2]
                    ];
                    break;
                case 3:
                case 4:
                case 5:
                    $row = [
                    $this->boxes[3],
                    $this->boxes[4],
                    $this->boxes[5]
                    ];
                    break;
                case 6:
                case 7:
                case 8:
                    $row = [
                    $this->boxes[6],
                    $this->boxes[7],
                    $this->boxes[8]
                    ];break;

                default:
                    $row = -1;
                    break;
            }
            return $row;
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
            $matrix = "";
            $matrix = $matrix."_______________\n";
            for ($i = 0; $i < $this->boardSize * 3; $i += 3) 
            {
                for ($j = 0; $j < $this->boxes[0]->getSizeRows(); $j++) {
                    $matrix .= 
                        $this->boxes[$i]->getRow($j)[0].$this->boxes[$i]->getRow($j)[1].$this->boxes[$i]->getRow($j)[2].' | '
                        .$this->boxes[$i + 1]->getRow($j)[0].$this->boxes[$i + 1]->getRow($j)[1].$this->boxes[$i + 1]->getRow($j)[2].' | '
                        .$this->boxes[$i + 2]->getRow($j)[0].$this->boxes[$i + 2]->getRow($j)[1].$this->boxes[$i + 2]->getRow($j)[2];
                    $matrix .= "\n";
                }
                $matrix .= "_______________\n";
            }
            echo $matrix;
        }
    }
?>