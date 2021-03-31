<?php 
     
        $STUDENTID = '18';
        $FNAME='MASS';
        $LNAME = 'RAJ';
        $COURSEID = '12';
        $SKILL = 'JAVA';
        $YEAR ='2021';
        $servername='localhost';
        $username='root';
        $password='';
        $dbname = "mysql";
        $conn = new mysqli($servername,$username,$password,$dbname);
        //SELECT STUDENTID FROM STUDENT ORDER BY STUDENTID DESC LIMIT 1 
        $sql = "SELECT STUDENTID FROM STUDENT ORDER BY STUDENTID DESC LIMIT 1";
            $result = $conn->query($sql);
                
            if ($result-> num_rows > 0) {
                $row = $result->fetch_assoc(); 
                echo $row['STUDENTID'];
             }

             



























       /*
        if(!$con){
            echo 'failed';
        }
        else{
            echo 'passed';
        } 
       /*
        $servername='localhost';
        $username='root';
        $password='';
        $dbname = "mysql";
        $conn = new mysqli($servername,$username,$password,$dbname);

        
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO STUDENT (STUDENTID,FNAME,LNAME) VALUES ('8', 'Doe', 'johnm')";
        
        
        if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
            
        $conn->close();

   
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $STUDENTID = $_POST['sid'];
        $FNAME = $_POST['fname'];
        $LNAME = $_POST['lname'];

        $servername='localhost';
        $username='root';
        $password='';
        $dbname = "mysql";
        $conn = new mysqli($servername,$username,$password,$dbname);
        $conn -> query("INSERT INTO STUDENT VALUES('$STUDENTID','$FNAME','$LNAME')");

    } 

    include_once 'dbview.php'
    ?>

if($con1 == FALSE || $con2 == FALSE){
        
        echo "<script>alert('Error: Studentid and Courseid must be unique');</script>" ;
    }
    else{
        echo "<script>alert('Row inserted');</script>";
    }
    */