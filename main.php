<?php
    require_once('cell.php');
    require_once('box.php');
    require_once('board.php');
    require_once('algorithm_library.php');

    /*$cell = new Cell();
    var_dump($cell);*/

    /*$box = new Box();
    var_dump($box);*/

    //$board = new Board();
    //var_dump($board);

    // var_dump($board->getBox(0)->getCell(0));

    $board = initBoard();
    showBoard($board);
    // var_dump(initBoard()->getBox(0)->getCell(8));
?>