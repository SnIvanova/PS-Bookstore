<?php

function getAllBooks($conn) {
    $sql = "SELECT * FROM libri";
    $result = mysqli_query($conn, $sql);
    return ($result && mysqli_num_rows($result) > 0) ? mysqli_fetch_all($result, MYSQLI_ASSOC) : false;
}


function getBooksByGenre($conn, $genre) {
    $sql = "SELECT * FROM libri WHERE genere='$genre'";
    $result = mysqli_query($conn, $sql);
    return ($result && mysqli_num_rows($result) > 0) ? mysqli_fetch_all($result, MYSQLI_ASSOC) : false;
}


function displayBooks($books, $selected_genre = null) {
    if ($books) {
        ?>
        <div class="section-container p-2 p-xl-4">
            <h4 class="fs-6 fw-bolder my-4 mb-3">
                <?php echo "<h2>Books " . ($selected_genre ? "in $selected_genre" : "by Genre") . "</h2>"; ?>
            </h4>
            <div class="row m-0">
                <?php foreach ($books as $book) { ?>
                   
                        <?php include 'book_card.php'; ?>
                    
                <?php } ?>
            </div>
        </div>
    <?php } else {
        echo "Nessun libro trovato.";
    }
}
?>
