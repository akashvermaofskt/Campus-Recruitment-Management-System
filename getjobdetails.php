<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
session_start();
$job_id = $_GET['job_id'];
$servername="localhost";
					$username="root";
					$password="password";
					$dbname="project";
					
$conn = new mysqli($servername,$username,$password,$dbname);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT * FROM vacancy WHERE job_id = ".$job_id."";
$result = $conn->query($sql);



echo "<div class=\"table-responsive table-bordered\" >            
				  <table class=\"table table-hover\">
				  <tr>
				   <th>Job Title</th>
				   <th>Salary</th>
				   <th>Location</th>
				   </tr>
				   ";
			while($row = $result->fetch_assoc()){	   
					echo		   "
				   <tr>
				   <td>".$row['job_title']."</td>
				   <td>".$row['salary']."</td>
				   <td>".$row['location']."</td>
				   </tr>";
			}		   
			echo	   "
				   </table>";
				   
				
				   
			echo "</div>";		

?>
</body>
</html>