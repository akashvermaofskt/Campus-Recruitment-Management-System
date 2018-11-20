
<?php
$servername="localhost";
		 $username="root";
		 $password="password";
		 $dbname="project";
		 
		 $conn = new mysqli($servername,$username,$password,$dbname);
		 
		 if($conn->connect_error){
			 die("Connection failed: ".$conn->connect_error);
		}
	if($_SERVER["REQUEST_METHOD"]=="POST"){
        $job_id = $_POST['job_id'];
		
        //echo $app_id." ".$status;
		 
	
		 $usql="Delete from vacancy where job_id=".$job_id."";	
		 
		 $uresult=$conn->query($usql);
		 $conn->close();
		 
		header('Location: company_dash.php');
	
	}
?>
