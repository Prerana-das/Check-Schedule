 <?php
    include('db.php');
	
    $sql = "SELECT * FROM makeup_class";
    $result = $conn->query($sql);
    
?>
<html lang="en">
  <head>
	<!-- Encoding -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>CSE</title>	
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
    <!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
 </head>
 <body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center mb-3 mt-3">
				<h2>Schedule</h2>
			</div>
			<div class="col-lg-12">
				<table class="table table-dark">
				  <thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Room</th>
					  <th scope="col">Time</th>
					  <th scope="col">Date</th>
					  <th scope="col">Faculty</th>
					  <th scope="col">Request</th>
					</tr>
				  </thead>
				  <tbody>
						<?php if ($result->num_rows > 0) {
							$i = 1;
							while($row= $result->fetch_assoc()) { 
						?>
						<tr>
						  <th><?= $i ?></th>
						  <td><?= $row['Room'] ?></td>
						  <td><?= $row['Time'] ?></td>
						  <td><?= $row['Date'] ?></td>
						  <td><?= $row['faculty'] ?></td>
						  <td class="btn btn-success">Done</a></td>
						 </tr>
					 <?php
					$i++;
					}
					} 
					?>
				  </tbody>
				</table>

					 
				</div>
			</div>
		</div>

  </body>
 	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>
		