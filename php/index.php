<?php
    print "Controller\n";

    require("../vendor/autoload.php");
    require("../libs/config.php");

    $item = new \Intellispire\ListManager\Item();

    print_r($item);
