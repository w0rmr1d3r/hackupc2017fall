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

    function initBoardTwo()
    {
        $board = new Board();

        $board->getBox(0)->getCell(0)->setNumber(5);
        $board->getBox(0)->getCell(1)->setNumber(3);
        $board->getBox(0)->getCell(2)->setNumber(4);
        $board->getBox(0)->getCell(3)->setNumber(6);
        $board->getBox(0)->getCell(4)->setNumber(7);
        $board->getBox(0)->getCell(5)->setNumber(2);
        $board->getBox(0)->getCell(6)->setNumber(1);
        //$board->getBox(0)->getCell(7)->setNumber(9);
        $board->getBox(0)->getCell(8)->setNumber(8);

        $board->getBox(1)->getCell(0)->setNumber(6);
        //$board->getBox(1)->getCell(1)->setNumber(7);
        $board->getBox(1)->getCell(2)->setNumber(8);
        $board->getBox(1)->getCell(3)->setNumber(1);
        $board->getBox(1)->getCell(4)->setNumber(9);
        $board->getBox(1)->getCell(5)->setNumber(5);
        $board->getBox(1)->getCell(6)->setNumber(3);
        $board->getBox(1)->getCell(7)->setNumber(4);
        $board->getBox(1)->getCell(8)->setNumber(2);

        $board->getBox(2)->getCell(0)->setNumber(9);
        $board->getBox(2)->getCell(1)->setNumber(1);
        $board->getBox(2)->getCell(2)->setNumber(2);
        $board->getBox(2)->getCell(3)->setNumber(3);
        $board->getBox(2)->getCell(4)->setNumber(4);
        //$board->getBox(2)->getCell(5)->setNumber(8);
        $board->getBox(2)->getCell(6)->setNumber(5);
        $board->getBox(2)->getCell(7)->setNumber(6);
        $board->getBox(2)->getCell(8)->setNumber(7);

        $board->getBox(3)->getCell(0)->setNumber(8);
        $board->getBox(3)->getCell(1)->setNumber(5);
        $board->getBox(3)->getCell(2)->setNumber(9);
        $board->getBox(3)->getCell(3)->setNumber(4);
        $board->getBox(3)->getCell(4)->setNumber(2);
        $board->getBox(3)->getCell(5)->setNumber(6);
        //$board->getBox(3)->getCell(6)->setNumber(7);
        $board->getBox(3)->getCell(7)->setNumber(1);
        $board->getBox(3)->getCell(8)->setNumber(3);

        $board->getBox(4)->getCell(0)->setNumber(7);
        $board->getBox(4)->getCell(1)->setNumber(6);
        //$board->getBox(4)->getCell(2)->setNumber(1);
        $board->getBox(4)->getCell(3)->setNumber(8);
        $board->getBox(4)->getCell(4)->setNumber(5);
        $board->getBox(4)->getCell(5)->setNumber(3);
        $board->getBox(4)->getCell(6)->setNumber(9);
        $board->getBox(4)->getCell(7)->setNumber(2);
        $board->getBox(4)->getCell(8)->setNumber(4);

        $board->getBox(5)->getCell(0)->setNumber(4);
        $board->getBox(5)->getCell(1)->setNumber(2);
        $board->getBox(5)->getCell(2)->setNumber(3);
        //$board->getBox(5)->getCell(3)->setNumber(7);
        $board->getBox(5)->getCell(4)->setNumber(9);
        $board->getBox(5)->getCell(5)->setNumber(1);
        $board->getBox(5)->getCell(6)->setNumber(8);
        $board->getBox(5)->getCell(7)->setNumber(5);
        $board->getBox(5)->getCell(8)->setNumber(6);

        $board->getBox(6)->getCell(0)->setNumber(9);
        $board->getBox(6)->getCell(1)->setNumber(6);
        $board->getBox(6)->getCell(2)->setNumber(1);
        $board->getBox(6)->getCell(3)->setNumber(2);
        $board->getBox(6)->getCell(4)->setNumber(8);
        $board->getBox(6)->getCell(5)->setNumber(7);
        $board->getBox(6)->getCell(6)->setNumber(3);
        $board->getBox(6)->getCell(7)->setNumber(4);
        //$board->getBox(6)->getCell(8)->setNumber(5);

        $board->getBox(7)->getCell(0)->setNumber(5);
        $board->getBox(7)->getCell(1)->setNumber(3);
        $board->getBox(7)->getCell(2)->setNumber(7);
        //$board->getBox(7)->getCell(3)->setNumber(4);
        $board->getBox(7)->getCell(4)->setNumber(1);
        $board->getBox(7)->getCell(5)->setNumber(9);
        $board->getBox(7)->getCell(6)->setNumber(2);
        $board->getBox(7)->getCell(7)->setNumber(8);
        $board->getBox(7)->getCell(8)->setNumber(6);

        $board->getBox(8)->getCell(0)->setNumber(2);
        //$board->getBox(8)->getCell(1)->setNumber(8);
        $board->getBox(8)->getCell(2)->setNumber(4);
        $board->getBox(8)->getCell(3)->setNumber(6);
        $board->getBox(8)->getCell(4)->setNumber(3);
        $board->getBox(8)->getCell(5)->setNumber(5);
        $board->getBox(8)->getCell(6)->setNumber(1);
        $board->getBox(8)->getCell(7)->setNumber(7);
        $board->getBox(8)->getCell(8)->setNumber(9);

        return $board;
    }

    function showBoard($board)
    {
        echo "\n\nTABLERO:\n";
        $board->print();
    }

    function resolveCell(&$cell)
    {
        if (!$cell->isDone())
        {
            if ($cell->getRemainingOptions() == 1)
            {
                $cell->setNumber(array_search(True, $cell->getOptions()) + 1);
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
                if ($cell->isDone())
                {
                    $numbersDone[$cell->getNumber() - 1] = True;
                }
                else
                {
                    $cellNotDone = $cell;
                }
            }
            $cellNotDone->setNumber(array_search(False, $numbersDone) + 1);
        }
    }

    function resolveBoard(&$board){

        foreach ($board->getBoxes() as $box)
        {
            foreach ($box->getCells() as $cell)
            {
                resolveCell($cell);
            }
        }

        /*foreach ($board->getBoxes() as $box)
        {
            resolveBox($box);
        }*/

        for ($i = 0; $i < 9; $i++)
        {
            removeOptionsRow($board, $i);
            resolveRow($board, $i);
        }
        //var_dump($board->getBox(0)->getCell(7));
    }

    function removeOptionsRow(&$board, $rowNumber)
    {
        $row = $board->getRow($rowNumber);

        $numbersDone = [False, False, False, False, False, False, False, False, False];

        foreach ($row as $rowInBox)
        {
            foreach ($rowInBox as $number)
            {
                if ($number != '-')
                {
                    $numbersDone[$number - 1] = True;
                } 
            }
        }

        $option = array_search(False, $numbersDone);
        //var_dump($option);
        $board->removeOptionsRow($rowNumber, $option);    

        var_dump($board->getBox(6)->getCell(8));
    }

    function resolveRow(&$board, $row)
    {
        foreach ($board->selectBoxesByRow($row) as $box) {
            foreach ($box->selectCellsByRow($row) as $cell) {
                resolveCell($cell);
            }
        }       
    }

    function resolveCol(&$board, $col)
    {
        foreach ($board->selectBoxesByCol($col) as $box) {
            foreach ($box->selectCellsByCol($col) as $cell) {
                resolveCell($cell);
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

    function removeOptionsBox(&$box)
    {
        $numbersDone = [False, False, False, False, False, False, False, False, False];

        foreach ($box->getCells() as $cell)
        {
            if ($cell->isDone())
            {
                $numbersDone[$cell->getNumber() - 1] = True;
            }
        }

        foreach ($box->getCells() as $cell)
        {
            if (!$cell->isDone())
            {
                for ($i = 0; $i < count($cell->getOptions()); $i++)
                {
                    if ($numbersDone[$i])
                    {
                        $cell->changeOption($i);
                    }
                }
            }
        }
    }
?>