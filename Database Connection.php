<form method="post">
    PRN: <input type="text" name="prn"><br>
    Name: <input type="text" name="name"><br>
    Programme: <input type="text" name="programme"><br>
    Course: <input type="text" name="course"><br>
    Marks: <input type="text" name="marks"><br>
    <input type="submit" value="Submit">
</form>

<?php
$conn = mysqli_connect("localhost", "root", "", "institution");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prn = $_POST['prn'];
    $name = $_POST['name'];
    $programme = $_POST['programme'];
    $course = $_POST['course'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO Student VALUES ('$prn','$name','$programme','$course','$marks')";
    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
