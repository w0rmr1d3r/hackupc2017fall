<?php
    function input()
    {
        return (trim(fgets(STDIN)));
    }

    $numberOfWords = input();
    $wordSize = input();

    while (true)
    {
        $key = '';
        for ($i = 0; $i < $numberOfWords; $i++)
        {
            for ($j = 0; $j < $wordSize; $j++)
            {
                $key .= random_int(0, 9);
                //sleep(1);
            }
            $key .= '-';
        }
        $key = substr($key, 0, strlen($key) - 1);
        echo $key . "\n";
    }

    
?>