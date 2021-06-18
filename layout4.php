<?php
 $db = mysqli_connect('localhost','root','','smartdrain')
 or die('Error connecting to MySQL server.');
?>

<!DOCTYPE html>
<html>

<head>
	<title>sih HACKATHON </title>
    <link rel="stylesheet" href="style5.css">
	<link href='https://fonts.googleapis.com/css?family=Amethysta' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css?family=Carter+One|Merienda+One|Passion+One" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="sidenav1">
  <br><img src="drain.jpg"><br><br>
  <a href="home.html">Home</a><br>
  <a href="layout4.php">Drainage DATA</a><br>
  <a href="layout5.php">Blocakge Data</a><br>
  <a href="#clients">Department</a><br>
  <a href="#contact">Contact</a><br>
</div>
	<div class="header">
	<h1>SMART DRAINAGE SYSTEM , BHUBANESWAR<br>ODISHA</h1>
	
	</div>
	<div class="topnav">
		<a href="#">WORKING TEAM</a>
		<a href="#">DEPARTMENT</a>
		<a href="#">AREAS DEFECTED</a>
		<a href="#">ONGOING PROJECTS</a>
		<a href="#">PROFILE</a>
		<a href="#"></a>
	</div>
	<br><br><br><br>
</div>
<br><br><br><br><br>
<div class="row">
<div class="column">
  <div id="frame">
  asdasdasdasdadaedfqefafeafgeaferw &nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp,&nbsp
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1684.4654481289444!2d85.80688856255335!3d20.351424527101024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjDCsDIxJzA5LjAiTiA4NcKwNDgnMjEuNiJF!5e0!3m2!1sen!2sin!4v1558768517108!5m2!1sen!2sin" width="600" height="450" frameborder="20" style="border:2" allowfullscreen></iframe>
  </div>
 </div>
 <div class="column">
 
  
<div class="tabular">
<table style="margin-left:auto;margin-right:auto;width:60%;font-family:monospace;font-size:20px;text-align:center;">
<div class="rowcolumn">
<tr>
<th>ID</th>
<th>PLACE</th>
<th>LEVEL</th>
<th>LONGT</th>
<th>LAT</th>
</tr>";
</div>
<?php
//Step2
$query = "SELECT * FROM rawdata";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['place'] . "</td>";
echo "<td>" . $row['level'] . "</td>";
echo "<td>" . $row['longt'] . "</td>";
echo "<td>" . $row['lat'] . "</td>";
echo "</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['place'] . "</td>";
echo "<td>" . $row['level'] . "</td>";
echo "<td>" . $row['longt'] . "</td>";
echo "<td>" . $row['lat'] . "</td>";
echo "</tr>";
}
echo "</table>";
?>

</table><br>
</div>
</div>
</div>
<br><br><br><br>


<div class="footer">
  
	  <a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
</div>
</body>

</html>