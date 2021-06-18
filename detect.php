<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smartdrain";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

for ($i=1, $j=2, $k=3; $i<=5; $i++, $j++, $k++)
{
	$result1 = mysqli_query($conn,"SELECT level FROM rawdata WHERE id ='$i'");
	$result2 = mysqli_query($conn,"SELECT level FROM rawdata WHERE id ='$j'");
	$result3 = mysqli_query($conn,"SELECT level FROM rawdata WHERE id ='$k'");
	echo "data1";
	while($row1 = mysqli_fetch_array($result1))
	{
		$r1=$row1['level'];
		#echo $r1;
	while ($row2 = mysqli_fetch_array($result2))
	{
		$r2=$row2['level'];
		#echo $r2;
	while($row3 = mysqli_fetch_array($result3))
	{
		$r3=$row3['level'];
		#echo $r3;
		$x=0;
		$y=0;
	if(($r1 > $r2) && ($r1 > $r3))
	{
		#echo"data";
		$res1= mysqli_query($conn,"SELECT * FROM blockdata WHERE id='$i'");
		while ($row1 = mysqli_fetch_array($res1)) {
			$x=1;$y=1;
		}
		echo"data3";
		if($x==0){
			echo"data4";
		$res= mysqli_query($conn,"SELECT * FROM rawdata WHERE id='$i'");
		while ($row = mysqli_fetch_array($res)) {
			$sql2 = "INSERT INTO `blockdata` (`id`, `level`, `longt`, `lat`)
					VALUES (".$row['id'].",".$row['level'].",".$row['longt'].",".$row['lat'].")";
			if ($conn->query($sql2) == TRUE) 
			{
				include 'sms.php';
   				 #echo "New record created successfully";
			} else {
   				 echo "Error: " . $sql2 . "<br>" . $conn->error;
			}
			$y=1;

			
		}
		}
		
	}
	if($y==0)
		{
			$sql3 = "DELETE FROM `blockdata` WHERE `id`='$i'";
			if ($conn->query($sql3) == TRUE) {
   				 #echo "Data deleted successfully";
			} else {
   				 echo "Error: " . $sql2 . "<br>" . $conn->error;
			}
		}
}
}
}
}