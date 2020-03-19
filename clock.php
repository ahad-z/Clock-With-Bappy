<?php 

$respponse = json_decode(file_get_contents('https://www.metaweather.com/api/location/1915035/'), true);
// json string 
$data = $respponse['consolidated_weather'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Clock</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	 <script type="text/javascript" src="script.js" defer></script>
</head>
<body>
	
	<div class="clock-box">

		<div class="clock">HH:MM:SS</div>

		<div class="date">DD-MM-YY</div>

		<div id="temp"><?php echo $data[0]['the_temp']; ?> Celcius</div>
		<div id="temp"><?php echo $data[0]['humidity']; ?>%</div>
	</div>

</body>
</html> 


