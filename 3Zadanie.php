<?php

    unset ($argv[0]);
    sort($argv);
    // $argv = ltrim(preg_replace('/[0-9/', '$0' , $va));
    foreach ($argv as $va) {
            echo  preg_replace('/[^0-9]/','',$va);
            echo str_repeat (' ', 1);
    }
   
?>
