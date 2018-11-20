<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
	
	$job_id= $_GET['job_id'];
	$s_mail= $_GET['s_mail'];
	$c_name= $_GET['c_name'];
	
	$servername="localhost";
					$username="root";
					$password="password";
					$dbname="project";
					
	$conn = new mysqli($servername,$username,$password,$dbname);
	if (!$conn) {
		die('Could not connect: ' . mysqli_error($conn));
	}

	$sql1="SELECT email FROM companys WHERE name = '".$c_name."'";
	$result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();
	$c_mail= $row1['email'];
	
	
	//echo $job_id." ".$s_mail." ".$c_mail;
	$sql3="SELECT * from applications where job_id=".$job_id." AND s_mail='".$s_mail."'";
	$result3 = $conn->query($sql3);
	if($result3->num_rows != 0){
		echo "<H3> Already Applied!</H3><BR>";
		$row = $result3->fetch_assoc();
		if($row['status'] == 0){
			echo "<H3> Status Pending! </H3>";
		}elseif($row['status'] == 1){
			echo "<H3> Accepted!</H3>";
		}else {
			echo "<H3> Rejected!</H3>";
		}
	}else{
		$sql2="INSERT into applications(job_id,s_mail,c_mail,status) values(".$job_id.",'".$s_mail."','".$c_mail."',0)";
		$result2= $conn->query($sql2);
		echo "<H3> Applied successfully!! </H3>";
	}
	
?>
</body>
</html>