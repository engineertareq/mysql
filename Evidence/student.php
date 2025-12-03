<?php
include 'db.php';

// Fetch student IDs and names
$sql = "SELECT id, name FROM student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Student</title>
</head>
<body>
    <h2>Delete Student Record</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>
                            <form method='POST' action='delete_student.php' 
                                  onsubmit=\"return confirm('Are you sure you want to delete this student?');\">
                                <input type='hidden' name='student_id' value='{$row['id']}'>
                                <input type='submit' value='Delete'>
                            </form>
                        </td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No students found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>