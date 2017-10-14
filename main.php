<?php
    require_once('cell.php');
    require_once('box.php');
    require_once('board.php');
    require_once('algorithm_library.php');

    //$board = initBoard();
    $board = initBoardTwo();
    showBoard($board);
    resolveBoard($board);
    showBoard($board);
?>