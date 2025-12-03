<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['student_id'])) {
    $id = intval($_POST['student_id']); // sanitize input

    // Delete student record
    $stmt = $conn->prepare("DELETE FROM student WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect instantly back to student list
        header("Location: student.php");
        exit();
    } else {
        // If error, show message (optional)
        echo "Error deleting student: " . $conn->error;
    }

    $stmt->close();
    $conn->close();
}
?>