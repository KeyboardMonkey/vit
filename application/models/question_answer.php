<?php

class question_answer extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    const DB_TABLE = 'quiz_answers';
    const DB_TABLE_PK = 'id';
    public $id;
    public $quiz_id;
    public $user_id;
    public $answer;
    public $submittion_date;
}

?>
