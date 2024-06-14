<?php
include 'config.php'; // Ensure this connection uses mysqli_connect

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) && $_POST['username'] != "" ? mysqli_real_escape_string($conn, $_POST['username']) : null;
    $password = isset($_POST['password']) && $_POST['password'] != "" ? mysqli_real_escape_string($conn, $_POST['password']) : null;
    $filename = null;

    if (isset($_FILES['img']['name']) && $_FILES['img']['name'] != "") {
        $target_directory = "images/";
        $original_filename = basename($_FILES["img"]["name"]);
        $target_file = $target_directory . $original_filename;
        $imageFileType = strtolower(pathinfo($original_filename, PATHINFO_EXTENSION));

        // Validate file is an image
        $check = getimagesize($_FILES["img"]["tmp_name"]);
        if ($check !== false) {
            // Check if file already exists
            if (!file_exists($target_file)) {
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    $filename = $original_filename;
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            } else {
                echo "File already exists. ";
                $filename = $original_filename; // Use the original file name even if it exists
            }
        } else {
            echo "File is not an image.";
        }
    }

    // Begin transaction
    mysqli_begin_transaction($conn);

    try {
        $updates = [];
        if ($username) $updates[] = "username = '$username'";
        if ($password) {
            // Storing password as plain text (not recommended)
            $updates[] = "password = '$password'";
        }
        if ($filename) {
            $updates[] = "img = '$filename'";
        }
        if (count($updates) > 0) {
            $sql = "UPDATE users SET " . implode(', ', $updates) . " WHERE id = 1"; // Placeholder ID
            if (mysqli_query($conn, $sql)) {
                mysqli_commit($conn);
                echo '<script>alert("Profile Updated Successfully")</script>'; 
                echo '<script>window.location.href = "admin-dashboard.php";</script>';
            } else {
                throw new Exception("Error executing query: " . mysqli_error($conn));
            }
        }
        
    } catch (Exception $e) {
        mysqli_rollback($conn);
        echo "Error updating record: " . $e->getMessage();
    }
} else {
    echo "Invalid request";
}
?>
