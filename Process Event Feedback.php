<form method="post">
    Enter Feedback: <br>
    <textarea name="feedback"></textarea><br>
    <input type="submit" value="Submit Feedback">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST['feedback'];
    echo "Feedback in Capital: " . strtoupper($feedback) . "<br>";
    echo "Word Count: " . str_word_count($feedback);
}
?>
