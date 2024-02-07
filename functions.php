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
        echo "<h2>Books " . ($selected_genre ? "in $selected_genre" : "by Genre") . "</h2>";
        echo "<table class='table'>";
        echo "<tr><th>ID</th><th>Titolo</th><th>Autore</th><th>Anno di pubblicazione</th><th>Genere</th><th>Actions</th></tr>";
        
        foreach ($books as $book) {
            echo "<tr>";
            echo "<td>".$book['id']."</td>";
            echo "<td>".$book['titolo']."</td>";
            echo "<td>".$book['autore']."</td>";
            echo "<td>".$book['anno_pubblicazione']."</td>";
            echo "<td>".$book['genere']."</td>";
            echo "<td><a href='modifica_libro.php?id=".$book['id']."'>Modifica</a> | <a href='rimuovi_libro.php?id=".$book['id']."'>Rimuovi</a></td>";
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "Nessun libro trovato.";
    }
}
?>
