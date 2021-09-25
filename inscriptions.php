<header>
    <?php
        require 'header.php'
    ?>
</header>

<div class="rest">
    <div id='espace_membre_inscription_1'>
        <div class="recherche-container">
            <div class="screen-inscription"></div>
            <img class="background-inscription" src="Images/court.jpg" alt="">
            <div class="rechercher-container">
                <h2> Réserver un stage </h2>
                <div class="input-container">
                    <form action="" method='POST'>
                        <div class="label-container">
                            <label for="date-début">Date de début</label>
                            <input type="date" name='date-début'>
                        </div>
                        <div class="label-container">
                            <label for="date-fin">Date de fin</label>
                            <input type="date" name='date-fin'>
                        </div>
                        <div class="label-container">
                            <label for="stage-select">Type de stage</label>
                            <select name="stage-select" id="">
                                <option value="" disabled> Stages </option>
                                <option value=""> Stage compétition </option>
                                <option value=""> Stage jeune </option>
                                <option value=""> Stage loisir </option>
                                <option value=""> Stage perfectionnement </option>
                            </select>
                        </div>
                        <div class="label-container">
                            <label for="age">Age</label>
                            <input type="number" min=4 max=99 placeholder='15'>
                        </div>

                        <div class="label-container">
                            <label for="age" style='visibility: hidden;'>Age</label>
                            <button class='button'> rechercher </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id='espace_membre_inscription_2'>
        <div class="container-formules">
            <div class="card-formule">
                <div class="image-card">
                    <img src="Images/image-tennis.png" alt="">
                </div>
                <div class="titre-formule">
                    <h2>ATP 500</h2>
                </div>
                <div class="date-container">
                    <h3 class="date"> du 17/06 au 22/06 </h3>
                    <h3 class="prix"> 400€ </h3>
                </div>
                    
                <div class="contenue_propose">
                    <ul class="liste_contenu_plan">
                        <li class="contenu_plan"><img src="Images/tick.png" alt=""> <p>2 sessions de tennis par jour </p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>3h d'activité physique par jour </p> </li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Rapport individuel</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Pension complète</p></li>
                        <li class="contenu_plan"> <img src="Images/tick.png" alt=""><p>Transport (train/mini-bus)</p></li>

                    </ul>
                </div>

                <button class="detail">EN DETAILS</button>
                <div class="info_detail contenue_cacher">
                    <h4> stage pour s'ammeliorer et s'amuser !</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi ab, corrupti dicta magnam nemo a fugiat optio, quae distinctio ut porro tempora iusto iste repellendus culpa suscipit voluptatem doloribus incidunt?</p>
                    <div class="slider">
                        <div class="inscription_carousel">
                                <div class="emplacement_img one" style="background-color:blue"></div>
                                <div class="emplacement_img two" style="background-color:red"></div>
                                <div class="emplacement_img three" style="background-color:yellow"></div>
                                <div class="emplacement_img four" style="background-color:orange"></div>
                                <div class="emplacement_img five" style="background-color:pink"></div>
                        </div>
                        <div class="fleche">
                            <div class="next">
                                <svg class="button_carousel btn--next" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.59 16.34l4.58-4.59-4.58-4.59L10 5.75l6 6-6 6z"/>
                                    <path d="M0-.25h24v24H0z" fill="none"/>
                                </svg>
                            </div>
                            <div class="prev">
                                <svg class="button_carousel btn--prev" height="96" viewBox="0 0 24 24" width="96" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.41 16.09l-4.58-4.59 4.58-4.59L14 5.5l-6 6 6 6z"/>
                                    <path d="M0-.5h24v24H0z" fill="none"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                
                </div>
                <div class="boite-bouton-valider">
                    <button type="button_gratuit" class="bouton_valider" name="button_gratuit">Choisir ce plan</a>
                </div>  
            </div>
        </div>
    </div>
</div>
<script src="JS/carousel_inscription.js?v=<?php echo time(); ?>"></script>
</body>
</html>