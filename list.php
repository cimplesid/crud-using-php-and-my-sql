<?php 
   /*data base connection*/
    include('connection.php');

  /*Select all record form my record table*/
  $query="SELECT * FROM table1";

 /*Run database query and store result in $results*/
  $results=mysqli_query($conn, $query);
 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
</head>
<body>
  <div class="alert alert-success" role="alert">
  You have submitted data sucessfully.
</div>
<table class="table table-condensed">
 
    <tr>
      
      <th class="col-xs-3 control-label">Id</th>
      <th class="col-xs-3 control-label">Name</th>
       
       <th class="col-xs-3 control-label">Gender </th>

      <th class="col-xs-3 control-label">Email</th>
      
      <th class="col-xs-3 control-label">Mobile </th>
      <th class="col-xs-3 control-label">password </th>
      <th class="col-xs-3 control-label">Address </th>
      <th class="col-xs-3 control-label">Action </th>
    </tr>
    <?php
    
    $i=1;

    while ($result=mysqli_fetch_object($results)) {?>

      
    }





   
        <tr>
          <td><?php echo $i++;?></td>
          <td><?php echo $result->fname. ''.$result->lname;?></td>
          <td><?php echo $result->gender;?></td>
          <td><?php echo $result->email;?></td>
          <td><?php echo $result->mobile;?></td>
          <td><?php echo $result->password;?></td>
          <td><?php echo $result->address;?></td>

<td>
 
<a class="btn btn-primary" href="edit.php?id=<?php echo $result->id;?>
">Edit</a> &nbsp;|&nbsp;
<a class="btn btn-primary" href="delete.php?id=<?php echo $result->id; ?>">Delete</a>
</td>
</tr>     
 <?php   }

    
  ?>
 
  
</table>
</body>
</html>