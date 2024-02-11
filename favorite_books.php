<?php
session_start();

include 'navbar.php';
include 'db.php';

if(isset($_SESSION['favorite_books']) && !empty($_SESSION['favorite_books'])) {
    $favoriteBooks = $_SESSION['favorite_books'];
    $book_ids_string = implode(',', $favoriteBooks);

    $query = "SELECT * FROM libri WHERE id IN ($book_ids_string)";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        
        echo '<div class="container">';
        echo '<h2 class="py-2">My Favorite Books</h2>';
        echo '<div class="row">';
        while ($book = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card h-100 w-100">';
            echo '<img src="' . $book['image_path'] . '" class="card-img-top" alt="' . $book['titolo'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $book['titolo'] . '</h5>';
            echo '<p class="card-text">Author: ' . $book['autore'] . '</p>';
            echo '<a href="book_details.php?book_id=' . $book['id'] . '" class="btn mb-2 mb-md-0 btn-primary btn-sm">View Details</a>';
            
            echo '<form method="post">';
            echo '<input type="hidden" name="remove_book_id" value="' . $book['id'] . '">';
            echo '<button type="submit" class="btn btn-danger btn-sm p-1 mb-2 mb-md-0">Dont like anymore</button>';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo '</div>';
        echo '</div>';
    } else {
        
        echo '<div class="container">';
        echo '<h2>No Favorite Books</h2>';
        echo '</div>';
    }
} else {
    
    echo '<div class="container">';
    echo '<h2>No Favorite Books</h2>';
    echo '</div>';
}

include 'footer.php';


if(isset($_POST['remove_book_id'])) {
    $remove_book_id = $_POST['remove_book_id'];
    if(($key = array_search($remove_book_id, $_SESSION['favorite_books'])) !== false) {
        unset($_SESSION['favorite_books'][$key]);
    }
}
?>
