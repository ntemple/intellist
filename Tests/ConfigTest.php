<?php

class ConfigTest extends \PHPUnit_Framework_TestCase
{
    function testInstall() {
        $this->assertTrue(true);
    }
/*
    function testFail() {
        $this->assertFalse(true);
    }
*/
    function testMongoConnect() {
        $conn = get_db_connection(); 
        $this->assertNotNull($conn);
    }
}
