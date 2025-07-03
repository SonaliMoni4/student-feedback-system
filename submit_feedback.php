<?php
include "db_config.php";

$name = $_POST['name'];
$usn = $_POST['usn'];
$sem = $_POST['sem'];
$subject = $_POST['subject'];
$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback (name, usn, sem, subject, rating, feedback)
        VALUES ('$name', '$usn', '$sem', '$subject', '$rating', '$feedback')";

if ($conn->query($sql) === TRUE) {
    echo "Feedback submitted successfully.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>
