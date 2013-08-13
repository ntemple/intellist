<?php

define("OPENSHIFT_DB",      "intellist");
define("TWEETS_COLLECTION", "tweets");
require("util.php");
// require("../vendor/autoload.php");
require("SplAutoloader.php");


//$classLoader = new SplClassLoader('Intellispire\ListManager', __DIR__ . 'Intellispire/ListManager');
$classLoader = new SplClassLoader(null,  __DIR__ );
$classLoader->register();
