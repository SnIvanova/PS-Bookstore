<?php 
include('navbar.php');


?>

<h1>Libreria</h1>
    <h2>Elenco dei libri disponibili</h2>
    <?php
    
    include 'db.php';

   
    $sql = "SELECT * FROM libri";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Titolo</th><th>Autore</th><th>Anno di pubblicazione</th><th>Genere</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['titolo']."</td>";
            echo "<td>".$row['autore']."</td>";
            echo "<td>".$row['anno_pubblicazione']."</td>";
            echo "<td>".$row['genere']."</td>";
            echo "<td><a href='modifica_libro.php?id=".$row['id']."'>Modifica</a> | <a href='rimuovi_libro.php?id=".$row['id']."'>Rimuovi</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nessun libro trovato";
    }

    
    ?>
    <h2>Aggiungi un nuovo libro</h2>
    <form action="aggiungi_libro.php" method="post">
        Titolo: <input type="text" name="titolo"><br>
        Autore: <input type="text" name="autore"><br>
        Anno di pubblicazione: <input type="text" name="anno_pubblicazione"><br>
        Genere: <input type="text" name="genere"><br>
        <input type="submit" value="Aggiungi">
    </form>
</body>
</html>
