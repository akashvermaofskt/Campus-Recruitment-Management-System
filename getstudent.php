<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
	
	$email= $_GET['email'];
	
	$servername="localhost";
					$username="root";
					$password="password";
					$dbname="project";
					
	$conn = new mysqli($servername,$username,$password,$dbname);
	
	if (!$conn) {
		die('Could not connect: ' . mysqli_error($conn));
	}

	$sql1="SELECT * FROM students WHERE email = '".$email."'";
	$result1 = $conn->query($sql1);
	$row1 = $result1->fetch_assoc();

	echo "<img class=\"img-responsive \" src=\"CSS/Image/c1.jpg\" height=\"120px\" width=\"120px\" align=\"center\" style=\"border-radius:50%\"></img>
			  <div class=\"table-responsive table-bordered\" >            
				  <table class=\"table table-hover\">
				      <tr>
				        <th>Name</th>
						<td>".$row1['name']."</td>
				        </tr>
				      <tr>
					    <th>Email</th>
				        <td>".$row1['email']."</td>

				      </tr>
					  <tr>
					    <th>Date of Birth</th>
				        <td>".$row1['dob']."</td>

				      </tr>
					  <tr>
				        <th>Branch</th>
						<td>".$row1['branch']."</td>
				        </tr>
				      <tr>
					    <th>Year of Passing out</th>
				        <td>".$row1['year']."</td>

				      </tr>
					  <tr>
					    <th>CPI</th>
				        <td>".$row1['cpi']."</td>

				      </tr>
					  
				      <tr>
				        <th>12th Percentage</th>
						<td>".$row1['12p']."</td>
				        </tr>
				      <tr>
					    <th>10th Percentage</th>
				        <td>".$row1['10p']."</td>

				      </tr>
					  <tr>
					    <th>Contact No.</th>
				        <td>".$row1['phone']."</td>

				      </tr>
					  
					  <tr>
				        <th>Degree</th>
						<td>".$row1['degree']."</td>
				      </tr>

					  
				    </tbody>
				  </table>
				  
				  
				</div>";
?>
</body>
</html>