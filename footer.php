
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/jquery.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/popper.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/mdbootstrap/js/mdb.min.js"></script>
<script>
document.querySelectorAll('.wishlist').forEach(function(heartIcon) {
    heartIcon.addEventListener('click', function() {
        var bookId = this.getAttribute('data-book-id');
        var sessionId = '<?php echo session_id(); ?>'; 
        toggleFavorite(sessionId, bookId);
    });
});

function toggleFavorite(sessionId, bookId) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'favorites.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            
            var isFavorite = xhr.responseText.trim() === 'added';
            var heartIcon = document.querySelector('.wishlist[data-book-id="' + bookId + '"]');
            if (isFavorite) {
                heartIcon.classList.remove('bi-heart');
                heartIcon.classList.add('bi-heart-fill', 'text-danger');
            } else {
                heartIcon.classList.remove('bi-heart-fill', 'text-danger');
                heartIcon.classList.add('bi-heart');
            }
        }
    };
    xhr.send('session_id=' + sessionId + '&book_id=' + bookId);
}
</script>
<script>
function removeFromFavorites(bookId) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'favorites.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
           
            window.location.reload();
        }
    };
    xhr.send('book_id=' + bookId);
}
</script>

</body>
</html>
