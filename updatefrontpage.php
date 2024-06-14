<?php

@include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $news_id = $_POST["news_id"];
    $news_title = $_POST["news_title"];
    $news_description = $_POST["news_description"];
    $file_name = $_FILES['news_image']['name'];
    $file_tmp = $_FILES['news_image']['tmp_name'];

    // Move uploaded image to a folder
    $target_dir = "images/";
    $target_file = $target_dir . basename($file_name);
    move_uploaded_file($file_tmp, $target_file);

    // Update news content in the database for the selected ID using prepared statements
    $sql = "UPDATE frontnews SET Title=?, Description=?, Img=? WHERE ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $news_title, $news_description, $file_name, $news_id);

    if ($stmt->execute()) {
        echo '<script>alert("Submitted Successfully")</script>'; 
        echo '<script>window.location.href = "news-frontpage.php";</script>';
        exit();
    } else {
        echo "Error updating news: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();

?>
