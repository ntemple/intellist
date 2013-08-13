<?php

namespace Intellispire\ListManager;

class ItemAbstract  {

    public $_id;
    public $title;
    public $description;

    public $is_starred;

    public $tags = array(); // Area of Focus

    public function serialize() {
        return json_encode($this);
    }

    public function save() {
        $c = get_collection('items');

        if ($this->_id) {
            $c->update( array('_id' => $this->_id), (array) $this );

        } else {
            $c->insert( array($this) );
        }
    }

    static function getItems() {
        $c = get_collection('items');

        $items = $c->find();
        return $items;
    }

    static function truncate() {
        $c = get_collection('items');
        $c->drop();
    }

}

class ListGroup extends ItemAbstract {

    public $lists = array();

}


class ProjectItem extends ItemAbstract
{

    public $list_name;

    public $is_action = false;
    public $is_project = false;


    public $context; // @home, #office, etc
    public $start_date;

    public $status;  // incubate, WF, Delegated, active, inactive

    public $linked = array(); // Linked item id;

    function __construct() {

        $this->title = "Title";
        $this->description = "Description";
        $this->is_action = true;
        $this->is_project = false;
        $this->context = "home";
    }


}

class Item extends ItemAbstract {}




