<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EBooks</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="style.php">
   
  </head>
<body>

<header class="head">
    <div class="logo border-bottom">
      <img class="w-100" src="assets/images/logo.svg" alt="" />
      <a
        class="navbar-toggler d-block d-lg-none"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="bi bi-list"></i>
      </a>
    </div>
    <div id="navbarNav" class="navcol pt-0 d-none d-lg-block">
      <ul>
        <li class="border-bottom">
          <a href="index.php"
            ><i class="bi bi-house-door fs-6 me-2"></i> Home</a
          >
        </li>
        <li class="border-bottom">
          <a href=""
            ><i class="bi fs-6 me-2 bi-window-stack"></i>
            <i class="bi fs-6 bi-google-play"></i> Applications</a
          >
        </li>
   
        <li class="border-bottom">
          <a href="index.html"
            ><i class="bi me-2 fs-6 bi-controller"></i> Games</a
          >
        </li>
        <li class="border-bottom">
          <a href="index.html"
            ><i class="bi me-2 fs-6 bi-journal-bookmark"></i> Books</a
          >
        </li>
        <li class="border-bottom">
          <a href="index.html"
            ><i class="bi me-2 fs-6 bi-music-note-beamed"></i> Music</a
          >
        </li>
        <li class="border-bottom">
          <a href="index.html"><i class="bi fs-6 me-2 bi-film"></i> Movies</a>
        </li>
        <li class="border-bottom">
          <a href="index.html"
            ><i class="bi me-2 fs-6 bi-card-image"></i> Wallpapers</a
          >
        </li>
        <li class="border-bottom">
          <a href="about.html"
            ><i class="bi me-2 fs-6 bi-info-square"></i> About Us</a
          >
        </li>
        <li class="border-bottom">
          <a href="contact.html"
            ><i class="bi me-2 bi-chat-left-dots"></i> Contact Us</a
          >
        </li>
      </ul>
    </div>
  </header>
  <div class="main-content">
    <div class="nav-bar sticky-top-xl bg-white shadow-sm w-100 p-3">
      <div class="row  align-items-center">
        <div class="col-md-5">
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
        <div class="col-md-4 text-end d-lg-flex  justify-content-lg-end">
          <div class="dropdown pt-2">
            <a
              class="cp pt-4 fw-bolder fs-8 dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Name Lastname
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Cart</a></li>
              <li><a class="dropdown-item" href="#">My Books</a></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>


<nav >
 
        
        
       
        
        
        


      

</nav>


