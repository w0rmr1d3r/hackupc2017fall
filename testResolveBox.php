<?php
    require_once('algorithm_library.php');
    require_once('box.php');
    require_once('cell.php');

    $box = new Box();
    $box->getCell(0)->setNumber(1);
    $box->getCell(1)->setNumber(2);
    $box->getCell(2)->setNumber(3);
    $box->getCell(3)->setNumber(4);
    $box->getCell(4)->setNumber(5);
    $box->getCell(5)->setNumber(6);
    $box->getCell(6)->setNumber(7);
    $box->getCell(7)->setNumber(8);
    //var_dump($box);

    resolveBox($box);
    var_dump($box);
?>