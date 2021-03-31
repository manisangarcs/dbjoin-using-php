<!DOCTYPE html>
<html>
 <head>
   <?php include_once 'head.php'?>
   <link rel='stylesheet' href='index.css'>
 </head>
<body >
	<div class='container'>
    <div class='row'>
      <div class='col-sm-4'>
        <div class='vertical-menu' >
          <a href='view.php'>View</a>
          <a href='insert.php'>Insert</a>
          
        </div>
      </div>
    
      <div class='col-sm-8'>
        <?php include_once 'dbview.php'?>
      </div>	
    </div>
  </div>
   
 </body>
</html>