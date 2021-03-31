<html>
  <head>
      <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <table class="table table-bordered" style='margin-top:30px'>
      <thead>
        <tr>
          <th>STUDENTID</th>
          <th>FIRSTNAME</th>
          <th>LASTNAME</th>
          <th>COURSEID</th>
          <th>SKILL</th>
          <th>YEAR</th>
          <th>ACTION</th>
        </tr>
      </thead>
        <tbody>
          <?php
            include_once 'connection.php';
            $sql = "SELECT * FROM COURSE JOIN STUDENT ON COURSE.STUDENTID=STUDENT.STUDENTID LIMIT 10";
            $result = $conn->query($sql);
                
            if ($result-> num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
          ?>
                
            <tr>
              <td><?php echo $row['STUDENTID']?></td>
              <td><?php echo $row['FNAME']?></td>
              <td><?php echo $row['LNAME']?></td>
              <td><?php echo $row['COURSEID']?></td>
              <td><?php echo $row['SKILL']?></td>
              <td><?php echo $row['YEAR']?></td>
              <td><a href='delete.php'><button class="btn" ><i class="fa fa-trash"></i></button></a><a href='update.php'><button class="btn"><i class="fas fa-edit"></i></button></a></td>
            </tr>
                    
            <?php       
                }
              } else {
                echo "0 results";
                }      
            ?>
          </tbody> 
    </table>
    <button class='btn btn-primary'>Next</button>
  </body>
</html>
    