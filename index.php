<?php
	$hostname = "localhost";
	$username = "hkhan79";
	$password = "Farry999";
	$dbname = "hkhan79";

	//create connecion 
	$conn = new MySQLi($hostname, $username, $password, $dbname);

	//check connection 
	if ($conn->connect_error) {
		die("connection failed: " . $conn->connect_error);
	}

$sql = "SELECT DateAndTime, WaterLevel FROM flood";
$result = $conn-> query($sql);

if ($result-> num_rows > 0) {
	while ($row = $result-> fetch_assoc()){
		echo "<tr><td>". $row["DateAndTime"]."</td><td>". $row["WaterLevel"] ."</td><td>";
	}
	echo "</table>";
}
else {
	echo "0 result";
}
$conn-> close();

?>





<!doctype html>
<html>
<head>
	<title>ChartJS - BarGraph</title>
	<style type="text/css">
		#chat-container { 
			width: 640px;
			height: auto;
		}
	</style>
	</head>
  <body>
    <div id="chart-container">
      <canvas id="mycanvas"></canvas>
    </div>
	  
	<!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>  
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>