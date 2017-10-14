<?php
    require_once('algorithm_library.php');
    require_once('cell.php');

    $cell = new Cell();
    resolveCell($cell);
    var_dump($cell);

    $cellTwo = new Cell();
    $cellTwo->setNumber(2);
    var_dump($cellTwo);

    var_dump($cellTwo->isDone());
?>