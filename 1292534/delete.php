<?php
include_once('db.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); 

    $stmt = $db->prepare("DELETE FROM manufacturer WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        
        header("Location: manufacturer.php"); 
        exit();
    } else {
        echo "Error deleting manufacturer: " . $db->error;
    }

    $stmt->close();
    $db->close();
} else {
    echo "No ID provided.";
}
?>