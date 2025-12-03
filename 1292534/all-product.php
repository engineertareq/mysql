<main>
<?php 
include_once('db.php'); 
?>

<h1>All Product List</h1>
<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Manufacturer ID</th>
    </tr>
    <?php
    // Query the view
    $sql = "SELECT * FROM all_product_list";
    $rawdata = $db->query($sql);

    if ($rawdata && $rawdata->num_rows > 0) {
        while ($row = $rawdata->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['price']}</td>
                    <td>{$row['manufacturer_id']}</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='4'>No products found</td></tr>";
    }
    ?>
</table>

<?php
// Handle manufacturer entry form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $address = $_POST['address'] ?? '';
    $contact_no = $_POST['contact_no'] ?? '';

    if (!empty($name) && !empty($address) && !empty($contact_no)) {
        $sql = "CALL Manufacturer_Entry('$name', '$address', '$contact_no')";
        if ($db->query($sql)) {
            echo "<p style='color:green;'>Inserted successfully</p>";
        } else {
            echo "<p style='color:red;'>Error: " . $db->error . "</p>";
        }
    } else {
        echo "<p style='color:red;'>Missing value in the form</p>";
    }
}
?>
</main>