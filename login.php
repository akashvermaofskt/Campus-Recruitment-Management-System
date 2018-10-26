<?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="project";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    echo "Connected succesfully<BR>";
    
    

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];

        $sql="SELECT password from login_info where username=\"" . $uname . "\"";
        $result = $GLOBALS['conn']->query($sql);

        if($result->num_rows > 0){
            $row=$result->fetch_assoc();
            if($row["password"]===$pwd){
                echo "Login successful <BR>";
            }else{
                echo "Wrong password <BR>";
            }

        } else{
            echo "User does not exist<BR>";
        }

        //echo $uname . "<BR>";
        //echo $pwd . "<BR>";
    }

    $conn->close();
?>