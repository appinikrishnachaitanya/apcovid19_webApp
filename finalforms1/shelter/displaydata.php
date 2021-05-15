<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 15px;
text-align: left;
}
th {
background-color: #ff3399;
color: white;
}
tr:nth-child(even) {background-color: #ffcce6}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Phone No.</th>
<th>Alternative No.</th>
<th>District</th>
<th>Village/city</th>
<th>Address</th>
<th>From date</th>
<th>To date</th>
<th>Accommodation</th>
<th>Shelter Beds</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "shelter_reg");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, provider, phoneno, phoneno2, district, city, address, fromdate, todate, accommodation, shelter FROM helpinghands_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>"
. $row["provider"] . "</td><td>"
. $row["phoneno"] . "</td><td>"
. $row["phoneno2"] . "</td><td>"
. $row["district"] . "</td><td>"
. $row["city"] . "</td><td>"
. $row["address"] . "</td><td>"
. $row["fromdate"] . "</td><td>"
. $row["todate"] . "</td><td>"
. $row["accommodation"] . "</td><td>"
. $row["shelter"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
