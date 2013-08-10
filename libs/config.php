<?php

define("OPENSHIFT_DB",      "intellist");
define("TWEETS_COLLECTION", "tweets");


function get_db_connection() {

    $uri = "mongodb://127.0.0.1/";

    if ( isset($_ENV["OPENSHIFT_MONGODB_DB_HOST"]) ) {
        $host   = $_ENV["OPENSHIFT_MONGODB_DB_HOST"];
        $user   = $_ENV["OPENSHIFT_MONGODB_DB_USERNAME"];
        $passwd = $_ENV["OPENSHIFT_MONGODB_DB_PASSWORD"];
        $port   = $_ENV["OPENSHIFT_MONGODB_DB_PORT"];

        $uri = "mongodb://" . $user . ":" . $passwd . "@" . $host . ":" . $port;
    }
    $mongo = new Mongo($uri);
    return $mongo;
}

function get_database($dbname) {
    $conn = get_db_connection();
    return $conn->$dbname;
}

function get_collection($collection) {
    $db = get_database(OPENSHIFT_DB);
    return $db->$collection;
}
