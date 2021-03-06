<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/infrastructures.css?v=<?php echo time(); ?>">
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
    <div class="titre titre-inf">
        <h1> Les <span class="titre-color">infrastructures<span> </h1>
    </div>
    <!-- La Page Index.php -->
    <div class="rest infrastructures-body">
        <div class="infrastructures-container">
            <div class="container">
                <div class="card">
                    <div class="mask"></div>
                    <div class="content">
                        <h2> Card One </h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto voluptates repudiandae nulla. Voluptatum aliquam nulla sint quis. Cupiditate quaerat officiis magni quam tenetur possimus ipsam in accusamus iure! Fuga, magni?
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="mask"></div>
                    <div class="content">
                        <h2> Card TWo </h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto voluptates repudiandae nulla. Voluptatum aliquam nulla sint quis. Cupiditate quaerat officiis magni quam tenetur possimus ipsam in accusamus iure! Fuga, magni?
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="mask"></div>
                    <div class="content">
                        <h2> Card Three </h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto voluptates repudiandae nulla. Voluptatum aliquam nulla sint quis. Cupiditate quaerat officiis magni quam tenetur possimus ipsam in accusamus iure! Fuga, magni?
                        </p>
                    </div>
                </div>

                <div class="card">
                    <div class="mask"></div>
                    <div class="content">
                        <h2> Card Three </h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto voluptates repudiandae nulla. Voluptatum aliquam nulla sint quis. Cupiditate quaerat officiis magni quam tenetur possimus ipsam in accusamus iure! Fuga, magni?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        require 'footer.php'
    ?>
    <script src="JS/script.js"></script>

</body>
</html>