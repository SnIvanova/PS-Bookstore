<!-- <a href="#">
    <div class="app-cover p-2 shadow-md bg-white">
        <div class="row">
            <div class="img-cover pe-0 col-4">
                <img class="rounded" src="<?php echo $book['image_path']; ?>" alt="" />
            </div>
            <div class="det mt-2 col-8">
                <h5 class="mb-0 fs-6"><?php echo $book['titolo']; ?></h5>
                <h6><?php echo $book['autore']; ?></h6>
                <span class="fs-8"><?php echo $book['genere']; ?></span>
                <ul class="row my-2">
                    <li class="col-8 ratfac">
                        <i class="bi text-warning bi-star-fill"></i>
                        <i class="bi text-warning bi-star-fill"></i>
                        <i class="bi text-warning bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </li>
                    <li class="col-4">
                        <span class="text-success fs-8 float-end">Featured</span>
                    </li>
                </ul>
                <p class="fs-8">Year: <?php echo $book['anno_pubblicazione']; ?></p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    
                </div>
            </div>
        </div>
    </div>
</a> -->


        <div class="col-md-3">
            <div class="card">
                <div class="image-container">
                    <div class="first">
                        <div class="d-flex justify-content-between align-items-center"> 
                            <span class="discount">-25%</span> <span id="wishlist boot-icon" class="bi bi-heart-fill" style=" color: rgb(255, 0, 0);"></span> </div>
                    </div> <img src="<?php echo $book['image_path']; ?>" class="img-fluid rounded thumbnail-image">
                </div>
                <div class="product-detail-container p-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="fs-6 font-weight-bold w-75"><?php echo $book['titolo']; ?></h6>
        
                      
                        <div class="d-flex flex-column mb-2"> <span class="new-price">$3.99</span> <small class="old-price text-right">$5.99</small> </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                    <blockquote> <?php echo $book['autore']; ?></blockquote> 
                    
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-1">
                        <div class="color-select d-flex "> 
                        <?php
                    
                        $genre = $book['genere'];
                            if ($genre === 'Fantasy') {
                                echo '<input type="button" name="grey" class="btn creme"><i class="fa-solid fa-dragon"></i>';
                            } elseif ($genre === 'Romance') {
                                echo '<input type="button" name="grey" class="btn creme"><i class="bi bi-heart"></i>';
                            } else {
                                echo '<input type="button" name="grey" class="btn creme"><i class="bi bi-book"></i>';
                            }
                        ?> 
                            <a href='rimuovi_libro.php?id=<?php echo $book['id']; ?>' class="btn red ml-2"><i class="bi bi-file-earmark-x"></i></a>
                            <a href='modifica_libro.php?id=<?php echo $book['id']; ?>' class="btn blue ml-2"><i class="bi bi-pencil-square"></i></a></div>
                        <div class="d-flex ">  </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center pt-1">
                        <div> <i class="bi bi-star "></i> <span class="rating-number">4.8</span> </div> <span class="buy">BUY +</span>
                    </div>
                </div>
            </div>
        </div>
        