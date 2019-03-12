<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
	<body background="images/b.png">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h2 style="text-shadow:2px 1px 0 #444">STAFF PAGE</h2>
            </div>
			
            <div class="row">
				<p>
					<a href="logout.php" class="btn btn-danger">Logout</a>
                </p>
				
				<br>
			
                <table class="w3-table-all w3-card-4">
                  <thead>
                    <tr class="w3-light-grey">
                      <th>Matric No</th>
                      <th>Issue</th>
					  <th>Inasis</th>
					  <th>Location</th>
					  <th>Date</th>
					  <th>Status</th>
					  <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
								require_once('database.php');
								$result = $conn->prepare("SELECT * FROM complain");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['id'];
							?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['matricno']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['issue']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['inasis']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['location']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['datereport']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['status']; ?></td>
															
								<?php								
								echo '<td width=250>';
								echo '<a class="btn btn-primary" href="update.php?id='.$row['id'].'">Update</a>'; 
								echo '<a class="btn btn-danger" href="deletebyStaff.php?id='.$row['id'].'">Delete</a>'; 
								echo '</td>';
								?>
								<?php } ?>
								</tr>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>