<html>
<head>
 <?php include_once 'head.php'?>
 <link rel='stylesheet' href='index.css'>
</head>
 <body>
	<div class='container'>
        <div class='row'>
            <div class='col-sm-4'>
                <form name='forminsert' method='post' action='<?php $_SERVER['PHP_SELF']?>'>
                    <p>Enter the STUDENTID</p><input type ='text' name='sid'><br/>
                    </br>
                    <input type='submit' class='btn btn-primary' value='delete'>
                </form>
            </div>
            <?php 
                $servername='localhost';
                $username='root';
                $password='';
                $dbname = "mydb";
                $conn = new mysqli($servername,$username,$password,$dbname);  

                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $STUDENTID = $_POST['sid'];
                    $sql1 = "DELETE FROM COURSE WHERE STUDENTID=$STUDENTID";
                    $sql2 = "DELETE FROM STUDENT WHERE STUDENTID=$STUDENTID ";
                    $con1 = $conn->query($sql1);
                    $con2 = $conn->query($sql2);
                    if($con1 == TRUE){
                        echo "<script>alert('Row Deleted');</script>";
                    }
                    if($con1 == FALSE ){
                
                        echo "<script>alert('Error: Enter valid Studentid ');</script>" ;
                    }

                }
                ?>
            <div class='col-sm-8'>
               <?php  include_once 'dbview.php'; ?>
            </div>
        </div>
    </div>
   <center> <br><br>
    <a href='index.php' >Home</a><br/><br/>
   </center>
  </body>
  
</html>

