<?php
/*
 * index.php
 * 
 * Copyright 2021  <pi@raspberrypi>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */
 /* https://raspberrytips.com/web-server-setup-on-raspberry-pi/#PHPMyAdmin 
  * https://pimylifeup.com/raspberry-pi-phpmyadmin/
  * */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	<?php 
	$dbhost = 'localhost:3306';
         $dbuser = 'root';
         $dbpass = 'Database_17';
	 echo "trying to connect to database <br>";

		$conn = new mysqli("localhost", "username", "password", "testing_maria");
		if (!$conn) {
			echo "failed";
		}
		
		// select all information from database
		echo "connected to the database. <br>";
		$stmt = $conn->prepare("SELECT * FROM test");
		// execute query
		$stmt->execute();
		
		// get results
		$result = $stmt->get_result();
		
		// add each data to an associative array
		$resultsArray = array();
            
		while ($single = $result->fetch_assoc()) {
			array_push($resultsArray, $single);
		}
		
	?>
	<h2>Hello World! This is a php project to test Geany, MariaDB, and Apache2.</h2>
	<p>Testing changing an existing document.</p>
	<p>Database Data: <br>
	<?php 
	for ($x = 0; $x < count($resultsArray); $x++) {
		echo "ID: " . $resultsArray[$x]['ID'] . "<br>"; 
		echo "TITLE: " . $resultsArray[$x]['TITLE'] . "<br>"; 
	}
	?>
	</p>
	
</body>

</html>
