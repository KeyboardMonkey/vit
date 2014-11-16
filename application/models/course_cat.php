<?php
class course_cat extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    const DB_TABLE = 'course_category';
    const DB_TABLE_PK = 'id';
    public $id;
    public $category;
    public $color_tag;
}
?>
