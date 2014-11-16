<?php

class user_question_answer extends MY_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}
	const DB_TABLE = "user_question_answer";
	const DB_TABLE_PK = "id";
	public $id;
	public $user_id;
	public $question_id;
	public $answer;


	public function answerAlreadyGiven($question_id, $user_id)
	{
		return (count($this -> user_question_answer -> getWithCondition(array('user_id' => $user_id, 'question_id' => $question_id))) > 0);
	}

}
?>