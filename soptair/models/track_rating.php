<?php

class track_rating extends MY_Model{
  public function __construct() {
    parent::__construct();
  }
  const DB_TABLE = 'track_rating';
  const DB_TABLE_PK = 'rating_id';
  
    public $rating_id;
    public $track_id;
    public $user_id;
    public $rating;

  public function hasUserRatedTrack($track_id, $user_id)
        {
            $tracks = $this ->getWithCondition(array('track_id' => $track_id, 'user_id' => $user_id));
            if(count($tracks) > 0)
            {
                return TRUE;
            }
            else return FALSE;
        }

}