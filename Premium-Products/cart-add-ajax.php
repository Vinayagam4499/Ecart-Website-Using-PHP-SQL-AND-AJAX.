<?php
require("includes/common.php");

if (!isset($_SESSION['email'])) {
    echo "not_logged_in";
    exit();
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items (user_id, item_id, status) VALUES ('$user_id', '$item_id', 'Added to cart')";

    if (mysqli_query($con, $query)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
