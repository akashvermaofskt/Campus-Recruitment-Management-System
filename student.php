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
		$name=$_POST['name'];
		$email=$_POST['email'];
		$dob=$_POST['dob'];
		$branch=$_POST['branch'];
		$year=$_POST['year'];
		$cpi=$_POST['cpi'];
		$twp=$_POST['12p'];
		$tenp=$_POST['10p'];
		$pwd=$_POST['pwd'];
		$phone=$_POST['phone'];
		$degree=$_POST['degree'];
		
		
		
		/*echo $name . "<BR>";
		echo $email. "<BR>";
		echo $dob. "<BR>";
		echo $branch. "<BR>";
		echo $year. "<BR>";
		echo $cpi. "<BR>";
		echo $twp. "<BR>";
		echo $tenp. "<BR>";
		echo $pwd. "<BR>";
		echo $phone. "<BR>";
		echo $degree. "<BR>";
		*/
		
		
		$sql="INSERT into students values(\"".$name."\",\"".$email."\",\"".$dob."\",\"".$branch."\",".$year.",".$cpi.",".$twp.",".$tenp.",\"".$pwd."\",".$phone.",\"".$degree."\",\" \" );";
		
		if($conn->query($sql)===TRUE){
			$GLOBALS['conn']->close();
		echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('Account Created!');
								window.location.replace(\"index.html\");
							</SCRIPT>";
		}else{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		
		
						
	}
	
	
	

?>