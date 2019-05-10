<?php
	include('db.php');

	$room=$_POST['room'];
	$time=$_POST['time'];
	$date=$_POST['date'];
	$faculty=$_POST['faculty'];
	
  /* $sql ="INSERT INTO makeup_class(room, time, date) VALUES('".$room."', '".$time."', '".$date."')";
  
	 $result = $conn->query($sql); */
	 
 
 if (isset($_POST['room']))
{
 
 $query = "SELECT * FROM makeup_class WHERE room ='$room' and time ='$time' and date ='$date' and faculty ='$faculty'";
 $result = mysqli_query($conn,$query); 

     if (mysqli_num_rows($result))
        {
          header('Location: http://localhost/exam/booked.php');
        } 

else 
{
	$sql ="INSERT INTO makeup_class(room, time, date, faculty) VALUES('".$room."', '".$time."', '".$date."','".$faculty."')";
	$result = $conn->query($sql);
	
	header('Location: http://localhost/exam/free.php');
	
}
 }


?>
