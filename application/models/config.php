<?php
class sys_config extends MY_Model{
    public function  __construct(){
        parent::__construct();
    }
    const DB_TABLE = 'config';
    const DB_TABLE_PK = 'key';
    public $key;
    public $value;
}
?>