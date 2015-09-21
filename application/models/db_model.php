<?php
class Db_model extends CI_Model {
	
	function __construct()
	{
		parent::__construct();
	}
	
	
	function list_tables($schema){
		$sql = "
SELECT table_name
  FROM information_schema.tables
 WHERE table_type = 'BASE TABLE'
   AND table_schema NOT IN
       ('pg_catalog', 'information_schema')
   AND table_schema = '$schema';";
		$query = $this->db->query($sql);
		return $query->result();
	}
	
	
	function list_fields($table,$schema){
		$sql = "
		SELECT column_name,data_type,character_maximum_length
  FROM information_schema.columns
 WHERE table_name = '$table' and table_schema = '$schema' order by ordinal_position;
				";
		$query = $this->db->query($sql);
		return $query->result();
	}
}
?>