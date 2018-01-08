<?php 

include "db.php";
global $myArray;
global $con;


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

	public function fetch_record($table) {
		$sql = "SELECT * FROM ".$table;
		$array = array();
		$query = mysqli_query($this->con,$sql);

		while($row = mysqli_fetch_assoc($query)) {
			$array[] = $row;
		}
		return $array;
	}

	public function select_record($table,$where) {
		$sql = "";
		$condition = "";

		foreach ($where as $key => $value) {
		$condition .= $key . "='" . $value . "' AND ";
		}

		$condition = substr($condition, 0, -5);
		$sql .= "SELECT * FROM ".$table." WHERE ".$condition;
		/*echo $sql;*/
		$query = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_array($query);
		return $row;

	}

	public function update_record($table,$where,$fields) {
		$sql = "";
		$condition = "";

		foreach ($where as $key => $value) {
		$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);

		foreach ($fields as $key => $value) {
			$sql .= $key . "='".$value."', "; 
		}
		$sql = substr($sql, 0, -2);
		$sql ="UPDATE ".$table." SET ".$sql." WHERE ".$condition;
		if (mysqli_query($this->con,$sql)) {
			return true;
		}
	}

	public function delete_record($table,$where) {
		$sql = "";
		$condition = "";

		foreach ($where as $key => $value) {
			$condition .= $key . "='" . $value . "' AND ";
		}
		$condition = substr($condition, 0, -5);
		$sql = "DELETE FROM ".$table." WHERE ".$condition;
		if (mysqli_query($this->con,$sql)) {
			return true;
		}
	}

}

 $obj = new DataOperation;  
 
if (isset($_POST["submit"])) {
	 $myArray = array(
		"lastname" => $_POST["lastname"],
		"firstname" => $_POST["firstname"],
		"gender" =>  $_POST["gender"]
	);

if ($obj->insert_record("person",$myArray)) {
	header("location:index.php?msg=Record Saved");
 }	
}


if (isset($_POST["edit"])) {
	 $id = $_POST["id"];
	 $where = array("id" => $id);
	 $myArray = array(
		"lastname" => $_POST["lastname"],
		"firstname" => $_POST["firstname"],
		"gender" =>  $_POST["gender"]
	);

	 if ($obj->update_record("person",$where,$myArray)) {
	 	header("location:index.php?msg=Record Updated");
	 }
}

	if (isset($_GET["delete"])) {
		$id = $_GET["id"] ?? null;
		$where = array("id" => $id);
		if($obj->delete_record("person",$where)){
			header("location:index.php?msg=Record Deleted");
		}
		
	}

 ?>