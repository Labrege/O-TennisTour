<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href=" CSS/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>O Tennis Tour | Tennis academy </title>
</head>
<body>
    <header>
      <?php
          require 'header.php'
      ?>
    </header>
    
    <!-- La Page Index.php -->
    <div class="rest">
      <div class="container-image">
          
      </div>
      
      <div class="valeurs-container">
          <div class="valeurs-texte">
            <h2> PERFORMANCE</h2>
            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Similique vel pariatur quasi ?
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
              Similique vel pariatur quasi ?</p>
          </div>
      </div>

      <div class="pagination-wrapper">
        <svg class="btn btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
          <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
          <path d="M0-.5h24v24H0z" fill="none"/>
        </svg>
        
        <div class="pagination-container">
          <div class="dot big-dot"></div>
          <div class="dot "></div>
          <div class="dot "></div>
        </div>
        
        <svg class="btn btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
          <path d="M0-.25h24v24H0z" fill="none"/>
        </svg>
      </div>

      <a href="#" class="btn-link">
        <div class="button-container">
          <h2> Je m'inscris </h2>
        </div>
      </a>
    </div>
    <script src="JS/script.js"></script>
    <script src="JS/index.js"></script>
</body>
</html>