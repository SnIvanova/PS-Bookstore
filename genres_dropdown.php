<?php
include 'db.php';

if (isset($_GET['genre'])) {
    $selected_genre = $_GET['genre'];
}


$sql = "SELECT DISTINCT genere FROM libri";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<select class='form-control' onchange='location = this.value;'>";
    echo "<option value='index.php'" . (!$selected_genre ? " selected" : "") . ">All Books</option>"; // Option to display all books
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='index.php?genre=".$row['genere']."'" . ($selected_genre === $row['genere'] ? " selected" : "") . ">".$row['genere']."</option>";
    }
    echo "</select>";
} else {
    echo "No genres found";
}

mysqli_close($conn);
?>
