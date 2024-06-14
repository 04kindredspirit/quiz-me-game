<?php

@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ins_id = $_POST["ins_id"];
    $ins_name = $_POST["ins_name"];
    $ins_description = $_POST["ins_description"];
    $file_name = $_FILES['ins_image']['name'];
    $file_tmp = $_FILES['ins_image']['tmp_name'];

    // Move uploaded image to a folder
    $target_dir = "images/";
    $target_file = $target_dir . basename($file_name);
    move_uploaded_file($file_tmp, $target_file);


    // Update ins content in the database for the selected ID
    $sql = "UPDATE instructors SET Name='$ins_name', Description='$ins_description', Img='$file_name' WHERE ID='$ins_id'";
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Submitted Successfully")</script>'; 
        echo '<script>window.location.href = "instructors.php";</script>';
        exit();
    } else {
        echo "Error updating ins: " . $conn->error;
    }
}

$conn->close();

?>
