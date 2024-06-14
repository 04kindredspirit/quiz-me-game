<?php
include 'config.php';

$action = $_POST['action'];

if ($action == 'add') {
    $title = $_POST['title'];
    $sql = "INSERT INTO frontnews (Title) VALUES ('$title')";
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo json_encode(['success' => true, 'id' => $last_id]);
    } else {
        echo json_encode(['success' => false]);
    }
} elseif ($action == 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM frontnews WHERE ID = $id";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}

$conn->close();
?>