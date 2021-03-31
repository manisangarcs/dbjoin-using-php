<html>
<head>
 <?php include_once 'head.php'?>
 <link rel='stylesheet' href='index.css'>
</head>
 <body>
	<div class='container'>
        <div class='row'>
            <div class='col-sm-3'>
                <form name='forminsert' method='post' action='<?php echo $_SERVER['PHP_SELF'];?>'>
                <p>Enter the StudentID to Update</p>
                <input type='text' name='sid'>
                </div>
                <div class='col-sm-3' id='form2'>     
                    <p>FIRST NAME</p><input type ='text' name='fname'>
                    <p>LAST NAME</p><input type ='text' name='lname'>
                    <p>SKILL</p><input type ='text' name='skill'>
                    <p>YEAR</p><input type ='text' name='year'><br/><br/>
                    <input type='submit' class='btn btn-primary' value='UPDATE'>
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
                    $FNAME = $_POST['fname'];
                    $LNAME = $_POST['lname'];
                    $SKILL = $_POST['skill'];
                    $YEAR = $_POST['year'];
                    if($FNAME!=''){
                        $sql1= "UPDATE STUDENT SET FNAME= '$FNAME' WHERE STUDENTID= $STUDENTID ";
                        $con1= $conn->query($sql1);
                        }
                    if($LNAME!=''){
                        $sql1= "UPDATE STUDENT SET LNAME= '$LNAME' WHERE STUDENTID= $STUDENTID ";
                        $con1= $conn->query($sql1);
                        }
                    if($SKILL!=''){
                        $sql1= "UPDATE COURSE SET SKILL= '$SKILL' WHERE STUDENTID= $STUDENTID ";
                        $con1= $conn->query($sql1);
                    }
                    if($YEAR!=''){
                        $sql1= "UPDATE COURSE SET YEAR= '$YEAR' WHERE STUDENTID= $STUDENTID ";
                        $con1= $conn->query($sql1);
                    }
                }



            ?>
            <div class='col-sm-6'>
                <?php include_once 'dbview.php'?>
            </div>
        </div>
    </div>
    <center> <br><br>
     <a href='index.php' >Home</a><br/><br/>
    </center>
    </body>
</html>



