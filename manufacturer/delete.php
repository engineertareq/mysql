<?php
include_once('db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    
    $sql = "DELETE FROM manufacturer WHERE id = $id";

    if ($db->query($sql)) {
        echo "<p style='color:green;'>Manufacturer deleted successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error deleting manufacturer: " . $db->error . "</p>";
    }
} else {
    echo "<p style='color:red;'>No manufacturer ID provided.</p>";
}

$db->close();


header("location: manufracturer.php"); 
?>