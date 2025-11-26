
<?php include_once ('db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
</head>
<body>
    <h3>Entry A Manufacturer</h3>
    <form action="" method="post">
        <label>Manufacturer Name:</label><br>
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


    $sql = $db->prepare("INSERT INTO manufacturer (name, address, contact_no) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $name, $address, $contact_no);


    if ($sql->execute()) {
        echo "inserted";
    } else {
        echo "error";
    }

    $sql->close();
}
$db->close();
?>
</body>
</html>