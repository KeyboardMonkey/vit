<?php

class user_interest_level extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    
    const DB_TABLE = 'user_interest_level';
    const DB_TABLE_PK = 'id';
    public $id;
    public $user_id;
    public $cat_id;
    public $level;
    
}
?>
