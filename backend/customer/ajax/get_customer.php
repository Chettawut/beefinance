<?php
	header('Content-Type: application/json');
	include('../../conn.php');

	$sql = "SELECT cuscode,cusname,lastname,titlename,cusdate,code,codeno,followdate,trackno ";
	$sql .= "FROM customer  ";   

	$query = mysqli_query($conn,$sql);

	// echo $sql;

	$json_result=array(
        "cuscode" => array(),
		"cusname" => array(),
		"lastname" => array(),		
		"titlename" => array(),	
		"cusdate" => array(),	
		"code" => array(),	
		"codeno" => array(),		
		"followdate" => array(),		
		"trackno" => array()
		
		);
		
        while($row = $query->fetch_assoc()) {
            array_push($json_result['cuscode'],$row["cuscode"]);
			array_push($json_result['cusname'],$row["cusname"]);
			array_push($json_result['lastname'],$row["lastname"]);
			array_push($json_result['titlename'],$row["titlename"]);
			array_push($json_result['cusdate'],$row["cusdate"]);
			array_push($json_result['code'],$row["code"]);
			array_push($json_result['codeno'],$row["codeno"]);
			array_push($json_result['followdate'],$row["followdate"]);
			array_push($json_result['trackno'],$row["trackno"]);
        }
        echo json_encode($json_result);



?>