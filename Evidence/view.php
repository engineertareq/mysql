
<?php
include 'db.php';
$sql = "SELECT * FROM student_data";  
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:hover { background-color: #f9f9f9; }
    </style>
</head>
<body>
    <h2>Student Data</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Module</th>
            <th>Marks</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['ID']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Address']}</td>
                        <td>{$row['Contact']}</td>
                        <td>{$row['Module']}</td>
                        <td>{$row['Marks']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No data found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>