<?php
    function initBoard()
    {
        $board = new Board();

        $board->getBox(0)->getCell(6)->setNumber(9);
        $board->getBox(0)->getCell(8)->setNumber(1);

        $board->getBox(1)->getCell(0)->setNumber(1);
        $board->getBox(1)->getCell(2)->setNumber(5);

        $board->getBox(2)->getCell(1)->setNumber(6);
        $board->getBox(2)->getCell(2)->setNumber(8);
        $board->getBox(2)->getCell(3)->setNumber(7);
        $board->getBox(2)->getCell(5)->setNumber(1);
        $board->getBox(2)->getCell(7)->setNumber(3);

        $board->getBox(3)->getCell(2)->setNumber(7);
        $board->getBox(3)->getCell(3)->setNumber(5);

        $board->getBox(4)->getCell(1)->setNumber(2);
        $board->getBox(4)->getCell(2)->setNumber(6);
        $board->getBox(4)->getCell(6)->setNumber(8);
        $board->getBox(4)->getCell(7)->setNumber(7);

        $board->getBox(5)->getCell(5)->setNumber(3);
        $board->getBox(5)->getCell(6)->setNumber(4);

        $board->getBox(6)->getCell(1)->setNumber(3);
        $board->getBox(6)->getCell(5)->setNumber(5);
        $board->getBox(6)->getCell(6)->setNumber(7);
        $board->getBox(6)->getCell(7)->setNumber(9);

        $board->getBox(7)->getCell(6)->setNumber(4);
        $board->getBox(7)->getCell(8)->setNumber(1);

        $board->getBox(8)->getCell(0)->setNumber(8);
        $board->getBox(8)->getCell(2)->setNumber(5);

        return $board;
    }

    function showBoard($board)
    {
        echo '
        ';
        echo "TABLERO: \n";
        $board->print();



        //DEBUG
        removeOptionsCol($board, 1);
        removeOptionsRow($board, 1);

        for ($i=0; $i < 9; $i++) { 
            removeOptionsCol($board, $i);
            removeOptionsRow($board, $i);
        }
        resolveTodo($board);
        echo"\n";
        $board->print();
    }

    function resolveCell(&$cell)
    {
        if (!$cell->isDone())
        {
            if ($cell->getRemainingOptions() == 1)
            {
                $cell->setNumber(array_search(True, $cell->getOptions()) + 1);
                var_dump("cell resolved");
            }
        }
    }

    function resolveBox(&$box)
    {
        foreach ($box->getCells() as $cell)
        {
            resolveCell($cell);
        }

        if ($box->getRemainingCellsToBeDone() == 1)
        {
            $numbersDone = [False, False, False, False, False, False, False, False, False];
            $cellNotDone = NULL;
            foreach ($box->getCells() as $cell)
            {
                //var_dump($cell);
                if ($cell->isDone())
                {
                    $numbersDone[$cell->getNumber() - 1] = True;
                }
                else
                {
                    $cellNotDone = $cell;
                }
                //var_dump($cellNotDone);
                
            }
            $cellNotDone->setNumber(array_search(False, $numbersDone) + 1);
        }
    }

    function resolveTodo(&$board){
        //removeOptionsRow($board, $row);

        foreach ($board->getBoxes() as $box) {
            foreach ($box->getCells() as $cell) {
                $cell->resolve();
            }
        }
    }

    function removeOptionsRow(&$board, $row)
    {
        $rowString = "";

        $rowString = $board->getRow($row);
        $rowString = (string) $rowString;

        $options = explode('-', $rowString);

        for ($i=0; $i < sizeof($options); $i++) 
        { 
            if($options[$i] != "")
            {
                $board->removeOptionsRow($row, $options[$i]);    
            }
        }   
    }

    function removeOptionsCol(&$board, $col)
    {
        $rowString = "";

        $rowString = $board->getCol($col);
        $rowString = (string) $rowString;
        $options = explode('-', $rowString);

        for ($i=0; $i < sizeof($options); $i++) 
        { 
            if($options[$i] != "")
            {
                $board->removeOptionsCol($col, $options[$i]);    
            }
        }   
    }

?>