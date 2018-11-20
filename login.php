<?php

	session_start();
    $servername="localhost";
    $username="root";
    $password="password";
    $dbname="project";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

   // echo "Connected succesfully<BR>";
    
    

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];
		$type = $_POST['type'];
		$sql="";
		function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
		}
		if($type==="Student"){
				$GLOBALS['sql']="SELECT pwd from students where email=\"" . $uname . "\"";
				$result = $GLOBALS['conn']->query($sql);
		}elseif($type==="Company"){
			$GLOBALS['sql']="SELECT pwd from companys where email=\"" . $uname . "\"";
			        $result = $GLOBALS['conn']->query($sql);
		}elseif($type==="Admin"&&$pwd==="shakira"&&$uname==="admin@abc.com"){
		header('Location: admin_dash.php');}
		else{
			
			echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('Wrong username or password to continue as admin');
								window.location.replace(\"index.html\");
							</SCRIPT>";
		}
		
        
       // $result = $GLOBALS['conn']->query($sql);
        if($type==="Student"||$type==="Company"){
        if($result->num_rows > 0){
            $row=$result->fetch_assoc();
            if($row["pwd"]===$pwd){
				if($GLOBALS['type']==="Student"){
					 $_SESSION['email']=$GLOBALS['uname'];
					//header('Location: student_dash.php');
					echo "<SCRIPT type='text/javascript'> //not showing me this
								
								window.location.replace(\"student_dash.php\");
							</SCRIPT>";
				}elseif($GLOBALS['type']==="Company"){
					 $_SESSION['email']=$GLOBALS['uname'];
					//header('Location: company_dash.php');
					echo "<SCRIPT type='text/javascript'> //not showing me this
								
								window.location.replace(\"company_dash.php\");
							</SCRIPT>";
				}
				
                //echo "Login successful <BR>";
            }else{
                echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('Wrong password!');
								window.location.replace(\"index.html\");
							</SCRIPT>";
            }

        } else{
           echo "<SCRIPT type='text/javascript'> //not showing me this
								alert('User Does not exist!');
								window.location.replace(\"index.html\");
							</SCRIPT>";
        }
		}
        //echo $uname . "<BR>";
        //echo $pwd . "<BR>";
    }

    $conn->close();
?>