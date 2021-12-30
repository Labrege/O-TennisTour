<header>
    <?php
        require 'header.php';
        require 'includes/dbh.inc.php';
    ?>
</header>

<div class="rest">
    <div id='espace_membre_equipe_1' class="espace_membre_equipe">
        <div class="screen-equipe"></div>
        <img class="background-equipe" src="Images/coach.jpg" alt="">
        <div class="container-equipe">
            <div class="card-equipe">
                <h2> Notre philosophie </h2>
                <p> Ayant travaillé dans des clubs de Paris, nous partageons la même vision du tennis. L’Académie comprend que le tennis d’aujourd’hui et du futur se joue d’abord avec les « yeux », puis avec « le mental », ensuite avec les « jambes » et finalement avec les « mains ».
                
                <br><br>
                Nous sommes convaincus que l’on peut apprendre le goût de l’effort, le dépassement de soi quelque soit le niveau du joueur.
                Parce que chaque joueur est unique, que chaque joueur est un projet en soi, il mérite une méthodologie de coaching individualisée et propre à ses besoins, ses attentes que ce soit aussi bien en cours collectifs qu’en leçon individuelle.
                Notre objectif commun est de faire évoluer le joueur dans les meilleures conditions possibles grâce à un cadre idéal sur le terrain comme en dehors.
                </p>
                <div class="ligne"></div>
                <a class='button' href="contact.php" target='_blank'> Nous rejoindre</a>
            </div>
        </div>
    </div>
    <div id='espace_membre_equipe_2' class="espace_membre_equipe">
        <div class="container-liste">
            <h2 id='pro-liste'> L'Equipe des pros</h2>
            <div class="card-liste-container">
                <div class="card-liste">
                    <div class="img-coach">
                        <img src="Images/coachs/alexandre.jpg" alt="">
                    </div>
                    <div class="card-liste-contenu">
                        <h3>Alexandre SIDORENKO</h3>
                        <div class="ligne"></div>
                        <ul>
                            <li> <i class="fa fa-medal" aria-hidden="true"></i>Classement - (ex) 145e ATP</li>
                            <li> Droitier // Revers à deux mains </li>
                            <br>
                            <li>
                            En 2006, il remporte <span class="red" style='color: #F46E54;'>l'Open d'Australie Junior</span> en simple.
                            Durant sa carrière, Alexandre a gagné quatre tournois Future en simple et huit en doubles ainsi que trois sur le circuit Challenger.
                            Il a été huitième de finaliste en double à deux reprises  <span class="red" style='color: #F46E54;'>à Roland-Garros.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-liste">
                    <div class="img-coach">
                        <img src="Images/coachs/kyrian.jpg" alt="">
                    </div>
                    <div class="card-liste-contenu">
                        <h3>Kyrian JACQUET</h3>
                        <div class="ligne"></div>
                        <ul>
                            <li> <i class="fa fa-medal" aria-hidden="true"></i>Classement - 300e ATP</li>
                            <li> Droitier // Revers à deux mains </li>
                            <br>
                            <li>
                            Kyrian est un des espoirs du tennis français. 
                            Il compte déjà dans son palmarès plusieurs <span class="red" style='color: #F46E54;'> tournois Futurs </span> (simple et double) et deux quart de finales en <span class="red" style='color: #F46E54;'> Challenger</span>! 
                            Il a également participé aux éditions 2019 et 2020 de <span class="red" style='color: #F46E54;'> Roland-Garros.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card-liste">
                    <div class="img-coach">
                        <img src="Images/coachs/martin.jpg" alt="">
                    </div>
                    <div class="card-liste-contenu">
                        <h3>Martin BREYSACH</h3>
                        <div class="ligne"></div>
                        <ul>
                            <li> <i class="fa fa-medal" aria-hidden="true"></i>Classement - 821e ATP</li>
                            <li> Droitier // Revers à deux mains </li>
                            <br>
                            <li>
                            Excellent chez les juniors <span class="red" style='color: #F46E54;'>(19ème mondial en 2020)</span>, Martin commence fort sa transition chez les adultes ! Actuellement à son meilleur classement ATP, 
                            le jeune français s'illustre sur le circuit Futur en remportant déjà <span class="red" style='color: #F46E54;'>deux titres à Monastir </span>(simple et doubles).
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <br>
            <h2 id='coach-liste'> Les coachs O'TENNIS TOUR</h2>
            <p>Chez O’TENNIS TOUR, nous avons souhaité travailler uniquement avec des coachs partageant la même philosophie que nous. Nos expériences tennistiques et personnelles différentes nous amènent à nous compléter pour la réalisation de vos projets.
            <br><br>
            Tous nos coachs OTT sont titulaires du DEJEPS ou DESJEPS et prêts à vous aider à remplir vos objectifs !</p>
            <div class="card-liste-container">
            <?php
            $sqlCoach = "SELECT * FROM users WHERE userStatut='coach'";
            $searchCoach = $conn->query($sqlCoach);

            if($searchCoach->num_rows > 0){
                //Tant qu'il y a des résultat dans la table, afficher...
                while ($donnees = $searchCoach->fetch_assoc()){
                    ?>
                    <div class="card-liste">
                        <div class="img-coach">
                            <img src="Images/coachs/<?php echo $donnees['userPhoto'];?>" alt="">
                        </div>
                        <div class="card-liste-contenu">
                            <h3><?php echo $donnees['userSurname'];?> <?php echo $donnees['userName'];?></h3>
                            <div class="ligne"></div>
                            <ul>
                                <li> <i class="fa fa-medal" aria-hidden="true"></i>Classement - <?php echo $donnees['userClassement'];?></li>
                                <li> <span class="capitalize"><?php echo $donnees['userMain'];?></span> // Revers à <?php echo $donnees['userRevers'];?> </li>
                                <br>
                                <li>  <?php echo $donnees['userDescription'];?> </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        
            </div>
            <br>
            <br>
            <h2 id='sparring-liste'> Les sparrings O'TENNIS TOUR</h2>
            <p>Chez O’TENNIS TOUR, nous avons souhaité travailler avec des sparrings ayant la même vision du jeu, du tennis. Leurs expériences, leurs qualités de balles seront un allié afin de jouer dans un cadre idéal et favoriser ainsi votre progression !</p>
            <div class="card-liste-container">
            <?php
            $sqlCoach = "SELECT * FROM users WHERE userStatut='sparring'";
            $searchCoach = $conn->query($sqlCoach);

            if($searchCoach->num_rows > 0){
                //Tant qu'il y a des résultat dans la table, afficher...
                while ($donnees = $searchCoach->fetch_assoc()){
                    ?>
                    <div class="card-liste">
                        <div class="img-coach">
                            <img src="Images/coachs/<?php echo $donnees['userPhoto'];?>" alt="">
                        </div>
                        <div class="card-liste-contenu">
                            <h3><?php echo $donnees['userSurname'];?> <?php echo $donnees['userName'];?></h3>
                            <div class="ligne"></div>
                            <ul>
                                <li> <i class="fa fa-medal" aria-hidden="true"></i>Classement - <?php echo $donnees['userClassement'];?></li>
                                <li> <span class="capitalize"><?php echo $donnees['userMain'];?></span> // Revers à <?php echo $donnees['userRevers'];?> </li>
                                <br>
                                <li>  <?php echo $donnees['userDescription'];?> </li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>