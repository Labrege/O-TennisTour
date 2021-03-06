<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/infrastructures.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../CSS/footer.css?v=<?php echo time(); ?>">
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
        <div class="infrastructures-container">
            <div class="titre">
                <h1> Les <span class="titre-color">infrastructures<span> </h1>
            </div>

            <div id="all" class="photo-infrastructures-container">

                <div class="view view-second">
                    <img src="../Images/tente.jpg" />
                    <div class="mask"></div>
                    <div class="content">
                        <h2 id="testimonials">Skyscrapers</h2>
                        <p>&ldquo;A description of some sort between these tags. I am so cool. Didn't you hear? 
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui possimus labore aliquam hic vitae adipisci, eaque ipsa earum fugiat ipsum necessitatibus voluptatibus, cumque dignissimos facere dolore non, et corporis ipsam.&rdquo;</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

                <div class="view view-second">
                    <img src="../Images/tennis.jpg" />
                    <div class="mask"></div>
                    <div class="content">
                        <h2 id="testimonials">Skyscrapers</h2>
                        <p>&ldquo;A description of some sort between these tags. I am so cool. Didn't you hear? &rdquo;</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

                <div class="view view-second">
                    <img src="../Images/lac.jpg" />
                    <div class="mask"></div>
                    <div class="content">
                        <h2 id="testimonials">Skyscrapers</h2>
                        <p>&ldquo;A description of some sort between these tags. I am so cool. Didn't you hear? &rdquo;</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>

                <div class="view view-second">
                    <img src="../Images/lac.jpg" />
                    <div class="mask"></div>
                    <div class="content">
                        <h2 id="testimonials">Skyscrapers</h2>
                        <p>&ldquo;A description of some sort between these tags. I am so cool. Didn't you hear? &rdquo;</p>
                        <a href="#" class="info">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../JS/script.js"></script>

</body>
</html>