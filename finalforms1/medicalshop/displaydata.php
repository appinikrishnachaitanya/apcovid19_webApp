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
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>MedicalShop</th>
<th>Phone No.</th>
<th>Alternative No.</th>
<th>District</th>
<th>Village/city</th>
<th>Shop Address</th>
<th>Open Time</th>
<th>Close Time</th>
<th>Delivary</th>
<th>Distance</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "shelter_reg");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, provider, phoneno, phoneno2, district, city, address, opentime, closetime, delivary, dist FROM helpinghands_donors";
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
. $row["opentime"] . "</td><td>"
. $row["closetime"] . "</td><td>"
. $row["delivary"] . "</td><td>"
. $row["dist"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>
