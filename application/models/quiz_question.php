<?php
class quiz_question extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    const DB_TABLE = 'quiz_questions';
    const DB_TABLE_PK = 'question_id';
    public $question_id;
    public $quiz_id;
    public $question_text;
    public $option_1;
    public $option_2;
    public $option_3;
    public $option_4;
    public $correct_answer;
    public $created_date;
    public $updated_date;
}
?>
