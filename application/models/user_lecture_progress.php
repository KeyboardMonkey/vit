<?php
	class user_lecture_progress extends MY_Model
	{

		public function __construct()
		{
			parent::__construct();
		}
		const DB_TABLE = 'user_lecture_progress';
		const DB_TABLE_PK = 'progress_id';
		public $progress_id;
		public $user_id;
		public $lecture_id;
		public $progress;
		
	}

?>