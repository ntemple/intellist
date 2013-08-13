<?php

/**
 * @return Mongo
 */

function get_db_connection() {

    $uri = "mongodb://localhost";

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

/**
 * @param $dbname
 * @return MongoDB
 */
function get_database($dbname) {
    $conn = get_db_connection();
    return $conn->$dbname;
}

/**
 * @param $collection
 * @return MongoCollection
 */

function get_collection($collection) {
    $db = get_database(OPENSHIFT_DB);
    return $db->$collection;
}
