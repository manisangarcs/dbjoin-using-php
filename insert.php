<html>
<head>
 <?php include_once 'head.php'?>
 <link rel='stylesheet' href='index.css'>
</head>
 <body>
	<div class='container'>
        <div class='row'>
            <div class='col-sm-4' >
                <form name='forminsert' method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'> 
                    <p>FIRST NAME</p><input type ='text' name='fname'>
                    <p>LAST NAME</p><input type ='text' name='lname' > 
                    <p>SKILL</p><input type ='text' name='skill'>
                    <p>YEAR</p><input type ='text' name='year'><br/><br/>
                    <input type='submit' class='btn btn-primary' value='insert'>
                </form>
            </div>
        <?php 
            $servername='localhost';
            $username='root';
            $password='';
            $dbname = "mydb";
            $conn = new mysqli($servername,$username,$password,$dbname);  
            
            
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $FNAME = $_POST['fname'];
                $LNAME = $_POST['lname'];
                $SKILL = $_POST['skill'];
                $YEAR  = $_POST['year'];
                if($FNAME!='' || $LNAME!='' || $SKILL!='' || $YEAR!=''){
                $sql1 = "INSERT INTO STUDENT(FNAME,LNAME) VALUES('$FNAME','$LNAME') ";
                $con1 = $conn->query($sql1);
                $sql = "SELECT STUDENTID FROM STUDENT ORDER BY STUDENTID DESC LIMIT 1";
                $result = $conn->query($sql);
                    
                if ($result-> num_rows > 0) {
                    $row = $result->fetch_assoc(); 
                    $STUDENTID=$row['STUDENTID'];
                }
                
                $sql2 = "INSERT INTO COURSE(STUDENTID,SKILL,YEAR) VALUES('$STUDENTID','$SKILL','$YEAR') ";
                $con2 = $conn->query($sql2);
                if($con1 == TRUE && $con2 == TRUE){
                    echo "<script>alert('Row inserted');</script>";
                }
                if($con1 == FALSE || $con2 == FALSE){
            
                    echo "<script>alert('Error: Row not inserted');</script>" ;
                }   
            }
            else {
                echo "<script>alert('Enter the values');</script>";
            }
            }      
        ?>
            <div class='col-sm-8'>
            <?php  include_once 'dbview.php';
            ?>	
            </div>
        </div>
    </div>
   <center> <br><br>
   <a href='index.php' >Home</a><br/><br/>
   </center>
 </body>
 </html>