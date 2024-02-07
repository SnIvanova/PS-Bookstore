<?php

include 'db.php';


$titolo = $_POST['titolo'];
$autore = $_POST['autore'];
$anno_pubblicazione = $_POST['anno_pubblicazione'];
$genere = $_POST['genere'];
$image_path = $_POST['image_path'];

$sql = "INSERT INTO libri (titolo, autore, anno_pubblicazione, genere, image_path) VALUES ('$titolo', '$autore', '$anno_pubblicazione', '$genere')";

if (mysqli_query($conn, $sql)) {
    echo "Libro aggiunto con successo";
} else {
    echo "Errore durante l'aggiunta del libro: " . mysqli_error($conn);
}

?>
