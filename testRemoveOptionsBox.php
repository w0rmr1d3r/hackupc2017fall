<?php
    require_once('algorithm_library.php');
    require_once('box.php');
    require_once('cell.php');

    $box = new Box();
    $box->getCell(1)->setNumber(6);
    $box->getCell(2)->setNumber(8);
    $box->getCell(3)->setNumber(7);
    $box->getCell(5)->setNumber(1);
    $box->getCell(7)->setNumber(3);

    var_dump($box->getCell(0));
    removeOptionsBox($box);
    var_dump($box->getCell(0));
    //var_dump($box->getCell(4));
    //var_dump($box->getCell(6));
    //var_dump($box->getCell(8));
    var_dump($box);
?>