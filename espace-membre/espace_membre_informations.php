<?php
include '../espace-membre/espace_membre_header.php';
$user = $_SESSION["useruid"];

$sql = $conn->query("SELECT * FROM users WHERE userUid = '$user");
?>
<script>
    $(document).ready(function(){ 
        var messageDelete = false;
        $("#form-informations").submit(function(event){
            event.preventDefault();
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            var email = $("#email").val();
            var birthdate = $("#birthdate").val();
            var classement = $("#classement").val();
            var revers = $("#revers").val();
            var main = $("#main").val();
            var description = $("#description").val();
            var motdepasse = $("#motdepasse").val();
            var submit = $("#button-information").val();
            
            $(".message").load("../espace-membre/informationUpdateProcess.php", {
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    birthdate: birthdate,
                    classement: classement,
                    revers: revers,
                    main: main,
                    description: description,
                    motdepasse: motdepasse,
                    submit: submit
            });
            
        });
    });
</script>

<div id="espace-membre-page"  class='espace-membre-page'>
    <?php
    include '../espace-membre/espace_membre_sidebar.php';
    ?>
    <div class="espace-membre-container">
        <div class="message"></div>
        <div class=container_information>
            <div class="titre-offres">
                <h2> Informations </h2>
            </div>
            <div class="formulaire-information">
                <form action='#' method='POST' id="form-informations">
                    <div class="user-form">
                        <div class="ligne ">
                            <label class="material-input__label" for="firstname">Prénom</label>
                            <input name="firstname" class="material-input__input" type="text" id="firstname" placeholder="John" value=<?php echo $_SESSION["username"]; ?>>
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="lastname">Nom</label>
                            <input name="lastname" class="material-input__input" type="text" id="lastname" placeholder="Dupont" value=<?php echo $_SESSION["usersurname"]; ?>>
                        </div>
                        <div class="ligne ">
                            <label class="material-input__label" for="useruid" >Nom d'utilisateur</label>
                            <input name="useruid" class="material-input__input" type="text" disabled="disabled" id="useruid" placeholder="John Dupont" value=<?php echo $_SESSION["useruid"]; ?>>
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="email">Email</label>
                            <input name="email" class="material-input__input" type="text" id="email" placeholder="John@example.com" value=<?php echo $_SESSION["useremail"]; ?>>
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="firstname">Date de naissance</label>
                            <input name="birthdate" class="material-input__input" type="date" id="birthdate" placeholder="DD/MM/YY" value="<?php echo $_SESSION["userbirthdate"]; ?>">
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="classement"> Classement </label>
                            <input name="classement" class="material-input__input" type="text" id="classement" placeholder="15/1" value="<?php echo $_SESSION["userclassement"]; ?>">
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="revers"> Revers </label>
                            <select name="revers" id="revers">
                                <option value="deux mains"
                                <?php 
                                if($_SESSION['userrevers'] == 'deux mains'){ 
                                    echo 'selected';
                                }
                                ?> 
                                > Deux Mains</option>
                                <option value="une main"
                                <?php 
                                if($_SESSION['userrevers'] == 'une main'){ 
                                    echo 'selected';
                                }
                                ?> 
                                > Une Main</option>
                            </select>
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="main"> Main dominante </label>
                            <select name="main" id="main">
                                <option value="droitier" 
                                <?php 
                                if($_SESSION['usermain'] == 'droitier'){ 
                                    echo 'selected';
                                }
                                ?> 
                                > Droitier </option>
                                <option value="gaucher" 
                                <?php 
                                if($_SESSION['usermain'] == 'gaucher'){ 
                                    echo 'selected';
                                }
                                ?> 
                                > Gaucher </option>
                            </select>
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="description"> Description </label>
                            <textarea id="description" name="description"
                                    rows="5" cols="33" maxlength="350">
                                    <?php echo $_SESSION['userdescription'];?>
                            </textarea>
                        </div>

                        <div class="ligne ">
                            <label class="material-input__label" for="motdepasse">mot de passe  </label>
                            <input name="motdepasse" class="material-input__input" type="password" id="motdepasse" placeholder="*******">
                        </div>
                    </div>

                    <div class="form-valider">
                        <input type="submit" class="button-valide" id="button-information" name="valider" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>










