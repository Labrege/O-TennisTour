<header>
    <?php
        require 'header.php'
    ?>
</header> 

<div class="titre titre-inscription">
    <h1> Mon <span class="titre-color">Inscription <span> </h1>
</div>
<div class="rest inscription-container">
    <div class="inscription-info">
        <div class="form-container">
            <form action="#">
                <input type="text" placeholder="nom" name="nom">
                <input type="text" placeholder="Prénom" name="nom">
                <input type="date" placeholder="Age" name="nom">
                <input type="email" placeholder="email" name="email">
                <input type="tel" placeholder="téléphone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                <select name="cars" id="cars">
                    <option value="A">Semaine A</option>
                    <option value="B">Semaine B</option>
                    <option value="C">Semaine C</option>
                    <option value="D">Semaine D</option>
                </select>

                <button> Envoyer </button>

            </form>
        </div>

        <div class="explication-container">
            <div class="explication-texte">
                <h2> Et après ?</h2>
                <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident voluptates rerum vitae vero nostrum fugit nisi ratione. Animi <br><br>dolore sapiente doloremque nostrum numquam? Dolor velit quia fugit perspiciatis praesentium soluta neque doloremque libero quos. Dolor quas facere, impedit vero officiis dolore ex molestias necessitatibus hic doloribus ipsam sed culpa quod tempora a sint natus modi fugiat dolorum placeat aut vel temporibus quaerat accusantium. Optio, sequi. Commodi a reiciendis facilis quae architecto dolorem sequi consequatur vitae obcaecati assumenda dolor quibusdam neque fugit autem maxime eius, fugiat repellat esse consequuntur temporibus, at culpa! Quod sapiente obcaecati iste expedita!</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>