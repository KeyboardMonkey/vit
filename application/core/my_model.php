<?php
class MY_Model extends CI_Model{
const DB_TABLE = 'abstract';
const DB_TABLE_PK = 'abstract';

private function insert(){
	$this -> db -> insert ( $this :: DB_TABLE, $this );
	$this -> {$this::DB_TABLE_PK} = $this -> db -> insert_id();

}

private function update(){
	//echo  $this::DB_TABLE . ' | ' .  $this::DB_TABLE_PK . '<br />';
	//echo $this::DB_TABLE . '[' . $this::DB_TABLE_PK . '] = ' . $this -> {$this::DB_TABLE_PK} . '<br />';
	//print_r($this);
	$this -> db -> where($this::DB_TABLE_PK, $this -> {$this::DB_TABLE_PK});
	$this -> db -> update($this::DB_TABLE, $this);
//	$whereClause = $this::DB_TABLE_PK . "=" . $this -> {$this::DB_TABLE_PK};
//	$this -> db -> update_string ( $this::DB_TABLE, $this, $whereClause);
//	print_r(expression)
}

public function populate($row){
	//print_r($row);
	//die();
	foreach ($row as $key => $value) {
	//	echo "Key: " . $key . " Value: " . $value . " <br />";
		$this -> $key = $value;
	}
//	print_r($row);
//	die();
}
public function load($id){
	//echo "LOAD: " . $id;
	//echo "PK " . $this :: DB_TABLE_PK;
	$rawQuery = 'select * from ' . $this::DB_TABLE . ' where ' . $this::DB_TABLE_PK
	 . '=' . $id;
$query = $this -> db -> query($rawQuery);
$this -> populate($query -> row());
//print_r($this);

}

public function delete(){
	$this -> db -> delete( $this::DB_TABLE, array(
		$this::DB_TABLE_PK => $this -> {$this::DB_TABLE_PK}));
unset($this -> {$this::DB_TABLE_PK});
}

public function save(){
	if(isset($this -> {$this::DB_TABLE_PK})){
		$this->update();
		//echo "update";
	}else{
		$this->insert();
	//echo "insert";
	}
	
}
public function get($limit=0, $offset = 0){
	if($limit){
		$query = $this -> db -> get($this::DB_TABLE, $limit, $offset);
	}else{
		$query = $this -> db -> get($this::DB_TABLE);
	}

	$rel_val = array();
	$class = get_class($this);
	foreach($query -> result() as $row){
		$model = new $class;
		$model -> populate($row);
		$rel_val[$row -> {$this :: DB_TABLE_PK}] = $model;
	}
	return $rel_val;
}

public function getWithCondition($condition){
	//print_r($condition);
	$query = $this -> db -> get_where($this::DB_TABLE, $condition);
	$rel_val = array();
	$class = get_class($this);
	foreach($query -> result() as $row){
		$model = new $class;
		$model -> populate($row);
		$rel_val[$row -> {$this :: DB_TABLE_PK}] = $model;
	}
	return $rel_val;

}

public function getWithConditionLimit1($condition){
	//print_r($condition);
	$query = $this -> db -> get_where($this::DB_TABLE, $condition);
	$rel_val = array();
	$class = get_class($this);
	foreach($query -> result() as $row){
		$model = new $class;
		$model -> populate($row);
                return $model;
		$rel_val[$row -> {$this :: DB_TABLE_PK}] = $model;
	}
        if(count($rel_val)> 0)
        {
            
            return $rel_val[0];
        }
        else return new $class();

}
        public function getWithConditionAndOrder($condition, $orderby){
			$this -> db ->order_by($orderby);
			$query = $this -> db -> get_where($this::DB_TABLE, $condition);
			$rel_val = array();
			$class = get_class($this);
			foreach($query -> result() as $row){
				$model = new $class;
				$model -> populate($row);
				$rel_val[$row -> {$this :: DB_TABLE_PK}] = $model;
			}
                        
			return $rel_val;
		}
     public function getCount()
    {
            return $this->db->count_all_results($this::DB_TABLE);
    }
}

?>