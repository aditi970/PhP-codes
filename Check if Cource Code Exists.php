<form method="post">
    Enter Course Code: <input type="text" name="code">
    <input type="submit" value="Check Course">
</form>

<?php
$courses = array(101=>'RDBMS', 102=>'PHP', 103=>'Statistics', 104=>'Python');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $code = $_POST['code'];
    if (array_key_exists($code, $courses)) {
        echo "Course Code $code exists: " . $courses[$code];
    } else {
        echo "Course Code $code not found!";
    }
}
?>
