<?php
session_start();

include 'db.php';

if (isset($_POST['book_id'])) {
    $book_id = $_POST['book_id'];
    
    if (!isset($_SESSION['favorite_books'])) {
        $_SESSION['favorite_books'] = [];
    }

    if (!in_array($book_id, $_SESSION['favorite_books'])) {
        $_SESSION['favorite_books'][] = $book_id;
        echo "added";
    } else {
       
        $_SESSION['favorite_books'] = array_diff($_SESSION['favorite_books'], array($book_id));
        echo "removed";
    }
} else {
    echo "Session ID or book ID not provided.";
}
?>
