
<?php include_once ('db.php') ?>
<!DOCTYPE html>
<html lang="en">
    <style>
        .table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            border-radius: 1px;
        }
    </style>
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

    <h1>List of Manufacturer</h1>
    <table>
        
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Contact</th>
        <th>Action</th>
        </tr>
    <?php
    $sql = "SELECT * FROM manufacturer";
    $rawdata = $db->query($sql);
    while($row = $rawdata->fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['contact_no']; ?></td>
            <td> <a href="delete.php?id=<?php echo $row['id']; ?>" 
     onclick="return confirm('Are you sure you want to delete this manufacturer?');">
     Delete
  </a>
</td>


        </tr>
    <?php } ?>
    </table>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = ($_POST['name']);
    $address = ($_POST['address']);
    $contact_no = ($_POST['contact_no']);


    $sql = "CALL Manufacturer_Entry('$name', '$address', '$contact_no')";
    $db->query($sql);


    if ($db->affected_rows) {
        echo "inserted";
    } else {
        echo "error";
    }
}
?>
</body>
</html>