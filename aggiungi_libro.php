<?php
include 'db.php';

$titolo = $_POST['titolo'];
$autore = $_POST['autore'];
$anno_pubblicazione = $_POST['anno_pubblicazione'];
$genere = $_POST['genere'];
$image_path = $_POST['image_path'];

$sql = "INSERT INTO libri (titolo, autore, anno_pubblicazione, genere, image_path) VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    
    mysqli_stmt_bind_param($stmt, "sssss", $titolo, $autore, $anno_pubblicazione, $genere, $image_path);

   
    if (mysqli_stmt_execute($stmt)) {
        
        header("Location: index.php?status=success");
        exit();
    } else {
        
        header("Location: index.php?status=error&message=" . urlencode(mysqli_error($conn)));
        exit();
    }
} else {
    
    header("Location: index.php?status=error&message=Failed to prepare statement");
    exit();
}


mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
