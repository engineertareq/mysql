<main>
    <?php include_once ('db.php') ?>
<style>
        table, td, th, tr {
            border: 1px solid black;
            border-collapse: collapse;
            border-radius: 1px;
            width: 500px;
            height: auto;
        }
    </style>
<h1>Product List</h1>
    <table>
        
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Company</th>
        <!-- <th>Company</th> -->
        </tr>
    <?php
    $sql = "SELECT * FROM product_list";
    $rawdata = $db->query($sql);
    while($row = $rawdata->fetch_assoc()){
    ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['Company']; ?></td>
            <!-- <td> <a href="delete.php?id=<?php echo $row['id']; ?>" 
     onclick="return confirm('Are you sure you want to delete this manufacturer?');">
     Delete
  </a> -->
</td>


        </tr>
    <?php } ?>
   

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
</main>
<div>
    <a href="manufracturer.php">Manufacturer</a>
</div>