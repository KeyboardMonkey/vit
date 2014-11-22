<?php
class sys_config extends MY_Model{
    public function  __construct(){
        parent::__construct();
    }
    const DB_TABLE = 'config';
    const DB_TABLE_PK = 'id';
    public $id;
    public $key;

    public $value;
    public function get_value($key)
    {
            $config = new sys_config();
            $config = $config -> getWithConditionLimit1(array('key' => $key));
        //echo "<br/>{$config->value} <br/>";
        return $config -> value;
    }
}
?>