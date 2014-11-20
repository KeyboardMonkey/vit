<?php
class tracks_enrollment extends MY_Model{
    public function __construct() {
        parent::__construct();
    }
    const DB_TABLE = 'tracks_enrollment';
    const DB_TABLE_PK = 'track_enrol_id';
    public $track_enrol_id;
    public $track_id;
    public $user_id;
    public $track_enrol_time;
    public $status= 'in-progress';
    public $progress = 0;


    public function getMyEnrolledTracksCount($user_id=NULL){
            if($user_id==NULL)
                 $user_id=$this -> session -> userdata('user_id');
             $allEnrollments = $this -> tracks_enrollment -> getWithCondition(array('user_id' => $user_id));
             return count($allEnrollments);
        }

     public function getMyEnrolledTracks($user_id=NULL){
        if($user_id==NULL)
             $user_id=$this -> session -> userdata('user_id');
         $allEnrollments = $this -> tracks_enrollment -> getWithCondition(array('user_id' => $user_id));
        // print_r($allEnrollments);

        $tracks = array();
         foreach ($allEnrollments as $enrollment) {
             $track = new track();
             $track -> load($enrollment->track_id);
             array_push($tracks, $track);
             //
         }
         //print_r($tracks);
         //die();
         return $tracks;
    }

}
?>
