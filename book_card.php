<div class="col-lg-3 col-md-4 col-sm-6 mb-4">
    <div class="card h-100 w-100">
        <!-- Image Container -->
        <div class="image-container">
            <div class="first">
            <div class="d-flex justify-content-between align-items-center"> 
                <span class="discount">-25%</span> 
                
                <?php
                    
                    $isFavorite = in_array($book['id'], $_SESSION['favorite_books']);
                    
                    $heartClass = $isFavorite ? 'bi-heart-fill' : 'bi-heart';
                   
                    $heartColor = $isFavorite ? 'text-danger' : '';
                ?>
                
                <span class="wishlist bi <?php echo $heartClass; ?> <?php echo $heartColor; ?>" data-book-id="<?php echo $book['id']; ?>"></span> 
            </div>
            </div> 
            <a href="book_details.php?book_id=<?php echo $book['id']; ?>">
                <img src="<?php echo $book['image_path']; ?>" class="img-fluid rounded thumbnail-image" alt="<?php echo $book['titolo']; ?>"> 
            </a>
        </div>
        
        <div class="product-detail-container p-2">
            <!-- Title and Price -->
            <div class="d-flex justify-content-between align-items-center">
                <h6 class="fs-6 font-weight-bold w-75"><?php echo $book['titolo']; ?></h6>
                <div class="d-flex flex-column mb-2"> 
                    <span class="new-price">$3.99</span> 
                    <small class="old-price text-right">$5.99</small> 
                </div>
            </div>
            <!-- Author -->
            <div class="d-flex justify-content-between align-items-center">
                <blockquote class="author-name" data-author-id="<?php echo $book['author_id']; ?>"><?php echo $book['autore']; ?></blockquote> 
            </div>
            <!-- Genre  -->
            <div class="d-flex justify-content-between align-items-center pt-1">
                <div class="color-select d-flex">
                
                    
                    <!-- Action buttons -->
                    <a href='rimuovi_libro.php?id=<?php echo $book['id']; ?>' class="btn red ml-2"><i class="bi bi-file-earmark-x"></i></a>
                    <a href='modifica_libro.php?id=<?php echo $book['id']; ?>' class="btn blue ml-2"><i class="bi bi-pencil-square"></i></a>
                </div>
                <div class="d-flex">  
                </div>
            </div>
            <!-- Rating and Buy -->
            <div class="d-flex justify-content-between align-items-center pt-1">
                <div> <i class="bi bi-star "></i> <span class="rating-number">4.8</span> </div> 
                <span class="buy">BUY +</span>
            </div>
        </div>
    </div>
</div>
