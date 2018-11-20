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
		$pwd=$_POST['pwd'];
		$phone=$_POST['phone'];
		$location=$_POST['location'];
		$ceo=$_POST['ceo'];
		$cto=$_POST['cto'];
		$hr=$_POST['hr'];
		$worth=$_POST['worth'];
		$found=$_POST['found'];
		$founder=$_POST['founder'];
		
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
		echo $degree. "<BR>";*/
		
		$sql="INSERT into companys values(\"".$name."\",\"".$email."\",\"".$pwd."\",".$phone.",\"".$location."\",\"".$ceo."\",\"".$cto."\",\"".$hr."\",".$worth.",\"".$found."\",\"".$founder."\",\" \" );";
		if($conn->query($sql) === TRUE){
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