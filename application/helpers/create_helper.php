<?php
function create_field($field){
	$result = $field->column_name.' '.get_type($field->data_type,$field->character_maximum_length);
	return $result; 
}

function get_type($type,$max_length){
	$result = $type;
	if($max_length>0){
		$result = "$type($max_length)";
	}
	return $result;
}

function fields_comma($fields){
	$fiels_name = array();
	foreach($fields as $field){
		$fiels_name[] = $field->column_name;
	}
	return implode($fiels_name,','); 
}
