<?php
include 'db.php';

$selected_genre = isset($_GET['genre']) ? $_GET['genre'] : null;

$sql = "SELECT DISTINCT genere FROM libri";
$result = mysqli_query($conn, $sql);
/* 
if (mysqli_num_rows($result) > 0) {
    
    echo "<li><a  href='index.php'" . (!$selected_genre ? " class='active'" : "") . ">All Books</a></li>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li><a  href='index.php?genre=".$row['genere']."' " . ($selected_genre === $row['genere'] ? " class='active'" : "") . ">".$row['genere']."</a></li>";
    }
    echo "</ul>";
} else {
    echo "No genres found";
}

mysqli_close($conn);
 */
 
if (mysqli_num_rows($result) > 0) {

    echo "<select class='form-control' onchange='location = this.value;'>";
    echo "<option value='index.php'" . (!$selected_genre ? " selected" : "") . ">All Books</option>"; 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<option value='index.php?genre=".$row['genere']."'" . ($selected_genre === $row['genere'] ? " selected" : "") . ">".$row['genere']."</option>";
    }
    echo "</select>";
} else {
    echo "No genres found";
} 

?>


