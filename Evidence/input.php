
<?php include_once ('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
</head>
<body>
    <h3>Entry A student</h3>
    <form action="" method="post">
        <label>Student Name:</label><br>
        <input type="text" name="name" required> <br>

        <label>Address:</label><br>
        <input type="text" name="address" required> <br>

        <label>Contact Number:</label><br>
        <input type="text" name="contact_no" required> <br><br>
        <input type="submit" value="Submit">
    </form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $contact_no = ($_POST['contact_no']);


    $sql = "CALL 	student_input('$name', '$address', '$contact_no')";
    $db->query($sql);


    if ($db->affected_rows) {
        echo "inserted";
    } else {
        echo "error";
    }
}
$db->close();
?>


</body>
</html>