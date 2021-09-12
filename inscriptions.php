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
                <div class="boite-bouton-valider">
                    <button type="button_gratuit" class="bouton_valider" name="button_gratuit">Choisir ce plan</a>
                </div>  
            </div>
        </div>
    </div>
</div>
</body>
</html>