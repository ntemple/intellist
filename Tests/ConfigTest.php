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

    function testItemSave() {

        \Intellispire\ListManager\Item::truncate();

        for ($i = 0; $i < 100; $i++) {
            $item = new \Intellispire\ListManager\Item();
            $item->title = "My New Item $i";
            $item->save();
        }

        $items = \Intellispire\ListManager\Item::getItems();

        $this->assertNotNull($items);
        $this->assertTrue(count($items) === 100);
    }

}
