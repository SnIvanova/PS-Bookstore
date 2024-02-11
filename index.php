<?php 
session_start(); 

include('navbar.php');
include('db.php');
include('functions.php');

$books = getAllBooks($conn);

if (isset($_GET['genre'])) {
    $selected_genre = $_GET['genre'];
    $books = getBooksByGenre($conn, $selected_genre);
} 

?>

<div class="container">
    
    <h2>Avaliable Books</h2>
    <?php echo session_id();?>
    <?php if ($books): ?>
        <?php displayBooks($books); ?>
    <?php else: ?>
        <p>No books in your library</p>
    <?php endif; ?>

</div>

<?php 
include('footer.php');
?>
