<!doctype html>
<html lang="en">
  <head>
	<!-- Encoding -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Exam</title>	
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all" />
    <!-- Custom styles for this template -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="all" />
 </head>

  <body>
	<div class="contact-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 text-right">
					<a class="btn btn-secondary  aaa" href="http://localhost/exam/schedule.php">Schedule List</a>
				</div>
				<div class="col-lg-8 mx-auto">
				
				<h2 class="mb-3">Schedule</h2>
				<form action="action.php" method="post">
				   <div class="form-group">
					<label for="exampleFormControlSelect1">Select Room Number</label>
						<select class="form-control" name="room" id="exampleFormControlSelect1">
						  <option>901</option>
						  <option>902</option>
						  <option>903</option>
						  <option>904</option>
						  <option>905</option>
						</select>
					</div>
				  <div class="form-group">
					<label for="exampleFormControlSelect1">Select Time</label>
						<select class="form-control" name="date" id="exampleFormControlSelect1">
						  <option>8.00</option>
						  <option>9.30</option>
						  <option>11:00</option>
						  <option>2:00</option>
						  <option>3:30</option>
						</select>
					</div>
				  <div class="form-group">
					<label for="exampleFormControlSelect1" >Select Date</label>
						<select class="form-control" name="time" id="exampleFormControlSelect1">
						  <option>1_12_18</option>
						  <option>2_12_18</option>
						  <option>3_12_18</option>
						  <option>4_12_18</option>
						  <option>5_12_18</option>
						  <option>6_12_18</option>
						  <option>7_12_18</option>
						</select>
					</div>
					<div class="form-group">
					<label for="exampleFormControlSelect1" >Faculty</label>
						<select class="form-control" name="faculty" id="exampleFormControlSelect1">
						  <option>Md. Sharif Ahmed</option>
						  <option>Md. Arif Ahmed</option>
						  <option>Sharmista Datta</option>
						  <option>Abdul Al Azmain</option>
						  <option>Fahim Sadi</option>
						  <option>Moriom Chy Kumu</option>
						  <option>Ferdousi Ahmed Turna</option>
						</select>
					</div>
					<input type="submit" value="Reserved" class="btn btn-primary"/>
				</form>
				
				</div>
				
				
			</div>
		</div>
	</div>
		
	<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>
			