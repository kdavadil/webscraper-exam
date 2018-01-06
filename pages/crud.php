<?php 

include("../pages/db.php");


class DataOperation extends Database {

	public function insert_record($table,$fields) {
		/*INSERT INTO table person*/
		$sql = "";
		$sql .= "INSERT INTO ".$table;
		$sql .= " (".implode(",", array_keys($fields)).") VALUES ";
		$sql .= "('".implode("','", array_values($fields))."')";
		$query = mysqli_query($this->con,$sql);
			if ($query) {
				return true;
			}
		/*echo $sql;*/
	}

}

 $obj = new DataOperation;  
 
if (isset($_POST["submit"])) {
	$myArray = array(
		"lastname" => $_POST["lastname"],
		"firstname" => $_POST["firstname"],
		"gender" =>  $_POST["gender"]
	);
}

if ($obj->insert_record("person",$myArray)) {
	header("location:../index.php?msg=Record Saved");
}



 ?>