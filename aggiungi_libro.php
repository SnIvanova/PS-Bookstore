<?php

include 'db.php';

$titolo = $_POST['titolo'];
$autore = $_POST['autore'];
$anno_pubblicazione = $_POST['anno_pubblicazione'];
$genere = $_POST['genere'];
$image_path = $_POST['image_path'];

$sql = "INSERT INTO libri (titolo, autore, anno_pubblicazione, genere, image_path) VALUES ('$titolo', '$autore', '$anno_pubblicazione', '$genere', '$image_path')";

if (mysqli_query($conn, $sql)) {
    header("Location: index.php?status=success");
    exit();
} else {
    header("Location: index.php?status=error&message=" . urlencode(mysqli_error($conn)));
    exit();
}

?>
