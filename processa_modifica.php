<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $titolo = $_POST['titolo'];
    $autore = $_POST['autore'];
    $anno_pubblicazione = $_POST['anno_pubblicazione'];
    $genere = $_POST['genere'];
    $image_path = $_POST['image_path'];

   
    $sql = "UPDATE libri SET titolo='$titolo', autore='$autore', anno_pubblicazione='$anno_pubblicazione', genere='$genere', image_path='$image_path' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        echo "Libro aggiornato con successo";
    } else {
        echo "Errore durante l'aggiornamento del libro: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>