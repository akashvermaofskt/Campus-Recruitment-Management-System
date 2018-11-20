<html>
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css">
		<nav class="navbar navbar-fixed-top" id="top-nav">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Campus Recruitment System</a>
				</div>
				<ul id="list1" class="nav navbar-nav">
					<li class="active"><a href="company_dash.php">Home</a></li>
					<li class="active"><a href="index.html">Logout</a></li>
					
					
				</ul>
			</div>
		</nav>
		
		 <?php
			  session_start();
				$servername="localhost";
					$username="root";
					$password="password";
					$dbname="project";
					
					function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}

					// Create connection
                   $conn = new mysqli($servername, $username, $password, $dbname);
                 // Check connection
                 if ($conn->connect_error) {
                      die("Connection failed: " . $conn->connect_error);
                  } 
				  
			if($_SERVER["REQUEST_METHOD"]=="POST"){
					$uname = $_POST['uname'];
					$pwd = $_POST['pwd'];
					$sql1="SELECT pwd from companys where email=\"" . $uname . "\"";
					$result = $GLOBALS['conn']->query($sql1);
					if($result->num_rows == 0){
					    phpAlert(   "Wrong username entered!"   );
						//header('Location: student_dash.php');

					}else{
					$row=$result->fetch_assoc();
						if($row['pwd']==$pwd){
							$sql2="Delete from companys where email='".$uname."'";
							$result = $GLOBALS['conn']->query($sql2);
							//phpAlert("Deleted!");
							//header('Location: index.html');
							$sql3="Delete from applications where c_mail='".$uname."'";
							$result3 = $GLOBALS['conn']->query($sql3);
							
							$sql4="Delete from vacancy where company_name='".$_SESSION['name']."'";
							$result4 = $GLOBALS['conn']->query($sql4);
							
							echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('Deleted');
								window.location.replace(\"index.html\");
							</SCRIPT>";
						}else{
							phpAlert(   "Wrong password!"   );
							
						}
					}
			}
        //echo $uname . "<BR>";
        //echo $pwd . "<BR>";
    
				 
           $conn->close();
          ?>
		
	</head>
	<body>

		
		<div class="well text-center" id="main">
  			<img class="img-responsive " src="Images/bye.png" height="200" width="700">
  		</div>
		
	<div class="well container-fluid text-center" id="frm1">
		<form action="" method="POST">
			<div>
				<label for="usrnm"><b>Enter Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" id="usrnm" required>
			</div>
			<div>
				<label for="pswrd"><b>Enter Password</b></label>
				<input type="password" placeholder="Enter Password" name="pwd" id="pswrd" required>
			</div>
			<div>
				<button type="submit">Delete</button>
			</div>
        </form>
</div>
	
		
	</body>
	 <footer>
		<nav class="navbar navbad-default" id="bottom-nav">
			<div class="container-fluid">
				<div id="col1" >
					<ul id="blist1">
						<li><a href='#'>About Us</a></li>
						<li><a href='#'>FAQs</a></li>
						<li><a href='#'>Contact Us</a></li>
					</ul>
				</div>
				
				<div id="col2" >
					<ul id="blist1">
						<li><a href='#'>Privacy Policy</a></li>
						<li><a href='#'>Legal</a></li>
						<li><a href='#'>Work With Us</a></li>
					</ul>
				</div>
				
				<div id="col3" class=" container-fluid">
				
					<ul id="blist3" >
						<li><i class="fa fa-facebook fa-2x" ><a href='#'></a></i></li>
						<li><i class="fa fa-twitter fa-2x"><a href='#'></a></i></li>
						<li><i class="fa fa-instagram fa-2x"><a href='#'></a></i></li>
						<li><i class="fa fa-linkedin fa-2x"><a href='#'></a></i></li>
					</ul>
					<ul>
					<!--<p id="lic">site design / logo (c) Company_Name Inc.<br> licensed under Company_Name inc. </p>-->
					<li id="blist4">site design / logo (c) Company_Name Inc.<br> licensed under Company_Name inc.</li>
					</ul>
				</div>
			</div>
		</nav>
	</footer>
</html>
