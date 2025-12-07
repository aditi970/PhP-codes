<?php
$conn = mysqli_connect("localhost", "root", "", "institution");
$result = mysqli_query($conn, "SELECT * FROM Book");

echo "<table border='1'>
<tr><th>Book Id</th><th>Book Name</th><th>Price</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['BookId']}</td><td>{$row['BookName']}</td><td>{$row['Price']}</td></tr>";
}
echo "</table>";
?>
