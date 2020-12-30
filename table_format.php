<html>
<body bgcolor="#EEFDEF">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "onlinebookstore";
$a='CSE';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM books where branch='IT'";

$result = $conn->query($sql);

echo "<table align='center' border=5 cellpadding=10 cellspacing=0 bordercolor='gold' height=400 width=500>
		<tr>
			<th>SNO</th>
			<th>TEXTBOOK</th>
			<th>AUTHOR</th>
			<th>PRICE (₹)</th>
		</tr>
	";

 

while($row = mysql_fetch_array($result))

  {

  echo "<tr>";

  echo "<td>" . $row['sno'] . "</td>";

  echo "<td>" . $row['textbook'] . "</td>";

  echo "<td>" . $row['author'] . "</td>";

  echo "<td>" . $row['price'] . "</td>";

  echo "</tr>";

  }

echo "</table>";
?>
</body>

</html>