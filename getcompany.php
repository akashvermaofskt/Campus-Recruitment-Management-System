<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php

$email = $_GET['email'];

$con = mysqli_connect('localhost','root','password','project');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT * FROM companys WHERE email = '".$email."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);


echo "<img class=\"img-responsive \" src=\"CSS/Image/c1.jpg\" height=\"120px\" width=\"120px\" align=\"center\" style=\"border-radius:50%\"></img>
			  <div class=\"table-responsive table-bordered\" >            
				  <table class=\"table table-hover\">
				      <tr>
				        <th>Name</th>
						<td>".$row['name']."</td>
				        </tr>
				      <tr>
					    <th>Email</th>
				        <td>".$row['email']."</td>

				      </tr>
					  <tr>
					    <th>Phone</th>
				        <td>".$row['phone']."</td>

				      </tr>
					  <tr>
				        <th>Location</th>
						<td>".$row['location']."</td>
				        </tr>
				      <tr>
					    <th>C.E.O</th>
				        <td>".$row['ceo']."</td>

				      </tr>
					  <tr>
					    <th>C.T.O.</th>
				        <td>".$row['cto']."</td>

				      </tr>
					  
				      <tr>
				        <th>H.R.</th>
						<td>".$row['hr']."</td>
				        </tr>
				      <tr>
					    <th>Net Worth</th>
				        <td>".$row['worth']."</td>

				      </tr>
					  <tr>
					    <th>Founded on</th>
				        <td>".$row['found']."</td>

				      </tr>
					  
					  <tr>
				        <th>Founder</th>
						<td>".$row['founder']."</td>
				      </tr>

					  
				    </tbody>
				  </table>
				</div>
"	;			

mysqli_close($con);
?>
</body>
</html>