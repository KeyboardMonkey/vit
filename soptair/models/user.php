<?php
    class user extends MY_Model{
           public function __construct() {
               parent::__construct();
           }
            const DB_TABLE = 'users';
            const DB_TABLE_PK = 'user_id';
            public $user_id;
            public $email;
            public $password;
            public $type = "User";
            public $active = "No";
            public $last_login;
            public $hash = "";
            public $register_date;
            public $username;
            public $logged_in = "0";
   }
?>
