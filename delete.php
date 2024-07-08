<?php
include 'connect.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    // Use prepared statements to avoid SQL injection
    $stmt = $conn->prepare("DELETE FROM `crud` WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Redirect to display page after successful deletion
        header('Location: display.php');
        exit();
    } else {
        die("Error deleting record: " . $stmt->error);
    }

    $stmt->close();
}

$conn->close();
