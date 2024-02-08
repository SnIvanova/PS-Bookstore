<?php
include 'db.php';


if(isset($_GET['author_id'])) {
    $author_id = $_GET['author_id'];

    
    $sql = "DELETE FROM authors WHERE author_id = $author_id";
    if (mysqli_query($conn, $sql)) {
       
        echo "Author and associated books deleted successfully.";
    } else {
       
        echo "Error deleting author and associated books: " . mysqli_error($conn);
    }
} else {
    echo "Author ID not provided.";
}
?>
