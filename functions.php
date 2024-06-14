// functions.php
<?php
function get_frontpage_data($conn) {
    // Replace this with actual query to fetch front page data
    $sql = "SELECT data FROM frontpage LIMIT 1";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['data'];
    } else {
        return '';
    }
}

function update_frontpage_data($conn, $new_data) {
    // Replace this with actual query to update front page data
    $sql = "UPDATE frontpage SET data = ? WHERE id = 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $new_data);
    return $stmt->execute();
}
?>
