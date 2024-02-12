<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBooks</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.php">
  
    
  </head>
<body>

<header class="head">
    <div class="logo border-bottom">
    <a href="index.php"><img class="w-100" src="assets/images/logo.svg" alt="" /></a>
      <a
        class="navbar-toggler d-block d-lg-none"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="bi bi-list"></i>
      </a>
    </div>
    <div id="navbarSupportedContent" class="navcol pt-0 d-none d-lg-block">
      <ul>
        <li class="border-bottom">
          <a href="index.php">
            <i class="bi bi-house-door fs-6 me-2"></i> Home
            </a>
        </li>

        <li class="border-bottom">
        <a href="favorite_books.php">
            <i class="bi bi-bookmark-heart me-2 fs-6"></i> My books</a
          >
        </li>
        <li class="border-bottom">
          <a href="#" data-bs-toggle="modal" data-bs-target="#aboutUsModal">
            <i class="bi me-2 fs-6 bi-info-square"></i> About Us
          </a>
        </li>
        <li class="border-bottom">
          <a href="#"
            ><i class="bi me-2 bi-chat-left-dots"></i> Contact Us</a
          >
        </li>
        
        <li class="nav-item">
                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Add new book</button>
        </li>
        
      </ul>
    </div>
  </header>
  <div class="main-content">
    <div class="nav-bar sticky-top sticky-top-xl bg-white shadow-sm w-100 p-3">
      <div class="row  align-items-center">
        <div class="col-md-4">
          <div class="input-group mb-0">
            <form class="form-inline input-group align-items-center mb-0 " action="search.php" method="GET">
                <input class="form-control border-end-0  mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="query">
                <button class="btn" type="submit">
                  <span class="input-group-text sit border-start-0" id="basic-addon2">
              <i class="bi bi-search">
              </i>
              </span>
            </button>
            </form>
            
          </div>
        </div>



        <div class="col-md-3 mb-0">
        <li>
              <ul class="colLeft">
                <?php include 'genres_dropdown.php'; ?>
              </ul>
        </li>


        </div>
      

      </div>
    </div>


<nav >




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Book</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addBookForm" action="aggiungi_libro.php" method="post">
                    <div class="form-group">
                        <label for="bookTitle">Title:</label>
                        <input type="text" class="form-control" id="bookTitle" name="titolo" required>
                    </div>
                    <div class="form-group">
                        <label for="bookAuthor">Author:</label>
                        <input type="text" class="form-control" id="bookAuthor" name="autore" required>
                    </div>
                    <div class="form-group">
                        <label for="publicationYear">Publication Year:</label>
                        <input type="text" class="form-control" id="publicationYear" name="anno_pubblicazione" required>
                    </div>
                    <div class="form-group">
                        <label for="bookGenre">Genre:</label>
                        <input type="text" class="form-control" id="bookGenre" name="genere" required>
                    </div>
                    <div class="form-group">
                        <label for="bookImage">Image Path:</label>
                        <input type="text" class="form-control" id="bookImage" name="image_path" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Book</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal about-->
<div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="aboutUsModalLabel">About Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <p>Welcome to Ebook. Created by Snizhana Ivanova  2024...</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


        
       
        
        
        


      

</nav>


