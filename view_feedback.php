<?php
include "db_config.php";

$sql = "SELECT * FROM feedback ORDER BY id DESC";
$result = $conn->query($sql);

echo "<h2>All Student Feedback</h2>";
echo "<table border='1'>
<tr><th>Name</th><th>USN</th><th>Sem</th><th>Subject</th><th>Rating</th><th>Feedback</th></tr>";

while($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>".$row['name']."</td>
        <td>".$row['usn']."</td>
        <td>".$row['sem']."</td>
        <td>".$row['subject']."</td>
        <td>".$row['rating']."</td>
        <td>".$row['feedback']."</td>
    </tr>";
}
echo "</table>";

$conn->close();
?>
