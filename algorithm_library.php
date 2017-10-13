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

        $board->getBox(7)->getCell(8)->setNumber(4);
        $board->getBox(7)->getCell(6)->setNumber(1);

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
    }

    function resolveCell(&$cell)
    {
        if ($cell->getRemainingOptions() == 1)
        {
            $cell->setNumber(array_search(true, $cell->getOptions()) + 1);
        }
    }

    function resolveBox(&$box)
    {

    }
?>