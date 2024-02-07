<?php 
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
    <h1>Libreria</h1>
    <h2>Elenco dei libri disponibili</h2>
   
    <?php if ($books): ?>
        <?php displayBooks($books); ?>
    <?php else: ?>
        <p>Nessun libro trovato</p>
    <?php endif; ?>

    <h2>Aggiungi un nuovo libro</h2>
    <?php include('add_book_form.php'); ?>
</div>

<?php 
include('footer.php');
?>
