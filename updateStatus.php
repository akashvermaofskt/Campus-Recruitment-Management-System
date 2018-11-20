
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
        $app_id = $_POST['app_id'];
		$status = $_POST['status'];
		
        //echo $app_id." ".$status;
		 
	
		 $usql="Update applications set status=".$status." where app_id=".$app_id."";		
		 $uresult=$conn->query($usql);
		 $conn->close();
		header('Location: company_dash.php');
	
	}
?>
