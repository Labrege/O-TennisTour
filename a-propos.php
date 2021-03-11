<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href=" CSS/a-propos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href=" CSS/activites.css?v=<?php echo time(); ?>">
    
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

        <div class="titre titre-activites">
                <h1> A <span class="titre-color">propos <span> </h1>
            </div>
        <div class="rest activites-container">
            <div class="card-activites-container">    
                <div class="card-activites">
                    <div class="logo-activites">
                        <img src="data:image/png;base64,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">
                    </div>
                    <div class="activites-content">
                        <h2> Escalade </h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, mollitia voluptatibus. Consectetur beatae ducimus ratione quae iusto voluptas explicabo, aliquam alias, quibusdam eius ut! Odio.</p>
                    </div>
                </div>

                <div class="card-activites">
                    <div class="logo-activites">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f46e54"><path d="M12.04,6.88c-1.37062,0.08063 -2.75469,0.68531 -3.78937,1.72c-1.02125,1.03469 -1.37063,2.40531 -1.37063,3.78938c0,1.72 0.68531,3.09062 1.72,3.77594c1.76031,1.76031 3.62813,3.13094 5.56313,4.23281l13.16875,95.37937l-19.41719,19.41719c-1.03469,1.03469 -1.38406,2.40531 -0.68531,3.44c0.33594,1.37063 1.37062,2.05594 2.74125,2.40531l14.10937,2.40531l26.48531,-26.48531l-16.54156,-3.01l-12.52375,-90.78375c7.49813,1.67969 15.48,0.52406 22.53469,-0.12094c23.39469,-2.06938 48.16,11.35469 65.01063,24.42937c2.23062,1.73344 5.03906,2.67406 7.80719,2.72781l-66.48875,66.48875l4.87781,4.86438l66.5425,-66.5425c0.02687,2.80844 0.98094,5.67062 2.74125,7.94156c13.07469,16.85063 26.49875,41.61594 24.42937,65.01063c-0.645,7.05469 -1.80062,15.03656 -0.12094,22.53469l-90.74344,-12.51031l-2.71438,-16.555l-26.48531,26.48531l2.06937,14.44531c0.34938,1.37062 1.03469,2.40531 2.40531,2.75469h1.03469c1.03469,0 1.72,-0.34937 2.40531,-1.03469l19.41719,-19.40375l95.39281,13.14187c1.08844,1.94844 2.45906,3.81625 4.21937,5.57656c1.03469,1.03469 2.75469,1.72 4.12531,1.72c1.37063,0 2.75469,-0.34937 3.77594,-1.38406c1.72,-2.05594 2.06938,-5.49594 0,-7.55187c-6.53062,-6.54406 -4.81062,-16.17875 -3.77594,-26.84813c2.75469,-29.92531 1.37063,-46.09062 -7.91469,-66.03187c-3.88344,-8.42531 -11.43531,-19.26938 -19.48438,-19.08125l11.38156,-11.38156c1.11531,0.60469 2.31125,1.02125 3.64156,1.20938h0.67187c2.06938,0 4.13875,-0.68531 5.50938,-2.05594c2.06937,-2.06937 7.57875,-13.07469 11.01875,-19.60531c0.68531,-1.72 0.33594,-3.44 -0.69875,-4.47469c-1.03469,-1.03469 -2.75469,-1.38406 -4.12531,-0.68531c-6.53062,3.09062 -17.53594,8.93594 -19.60531,11.00531c-1.72,1.72 -2.41875,4.12531 -2.06937,6.53063c0.16125,0.9675 0.49719,2.02906 0.9675,3.05031l-11.47563,11.46219c0.05375,-7.99531 -10.70969,-15.46656 -19.08125,-19.32313c-19.94125,-9.28531 -36.10656,-10.66937 -66.03187,-7.91469c-10.66938,1.03469 -20.30406,2.75469 -26.83469,-3.78937c-1.03469,-1.02125 -2.41875,-1.45125 -3.78938,-1.37063z">
                    </path></g></g></svg>
                    </div>
                    <div class="activites-content">
                        <h2> Tir à l'arc </h2>
                        <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, mollitia voluptatibus. Consectetur beatae ducimus ratione quae iusto voluptas explicabo, aliquam alias, quibusdam eius ut! Odio.</p>
                    </div>
                </div>

                <div class="card-activites">
                    <div class="logo-activites">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="100" height="100"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f46e54"><path d="M125.4525,11.395l-31.82,8.385l0.7525,3.3325c0.12094,0.47031 2.98313,11.42188 7.095,19.995c3.46688,7.21594 9.87656,14.98281 17.415,15.05l16.8775,71.38c-2.72781,3.17125 -7.45781,10.33344 -3.225,32.68c-4.15219,0.88688 -8.66719,1.3975 -13.545,1.3975c-1.33031,0 -2.62031,-0.06719 -3.9775,-0.215c-4.085,-6.69187 -15.17094,-21.99719 -34.7225,-27.6275c-0.30906,-4.55531 5.0525,-10.8575 5.0525,-10.8575c0,0 12.685,6.3425 27.95,6.3425c5.30781,0 9.94375,-0.47031 13.8675,-1.075c0.36281,-0.7525 0.77938,-1.49156 1.1825,-2.15l-2.365,-9.9975c-3.58781,0.84656 -8.10281,1.505 -13.2225,1.505c-3.81625,0 -7.525,-1.22281 -10.965,-2.9025c-1.20937,0.20156 -2.49937,0.3225 -3.7625,0.3225c-12.33562,0 -22.36,-10.02437 -22.36,-22.36c0,-12.08031 9.62125,-21.97031 21.6075,-22.36c4.35375,-2.9025 9.59438,-4.73 16.4475,-5.9125l-0.5375,-2.2575c-5.28094,-1.67969 -9.43312,-5.44219 -12.47,-9.245c-13.34344,3.85656 -34.22531,13.34344 -38.8075,35.3675c-20.69375,13.90781 -25.6925,37.24875 -26.7675,44.1825c-24.32187,1.63938 -34.4,24.57719 -34.83,25.585c-0.73906,1.74688 -0.02687,3.7625 1.72,4.515c1.73344,0.7525 3.7625,-0.08062 4.515,-1.8275c0.37625,-0.88687 9.58094,-21.6075 31.2825,-21.6075c11.01875,0 23.60969,6.65156 36.98,13.76c14.53938,7.71313 29.5625,15.695 44.1825,15.695c5.38844,0 10.36031,-0.5375 14.9425,-1.505v0.1075l0.3225,-0.1075c23.62313,-5.07937 36.36188,-20.61312 36.98,-21.3925c1.19594,-1.47812 0.94063,-3.64156 -0.5375,-4.8375c-1.47812,-1.1825 -3.64156,-0.95406 -4.8375,0.5375c-0.05375,0.06719 -1.84094,2.00219 -4.8375,4.6225c-2.2575,-5.76469 -7.53844,-15.65469 -18.705,-20.3175l-16.8775,-71.81c5.38844,-4.42094 5.40188,-13.94812 5.375,-19.565c-0.04031,-9.93031 -4.12531,-21.33875 -4.3,-21.8225zM98.04,79.12c-8.54625,0 -15.48,6.93375 -15.48,15.48c0,8.54625 6.93375,15.48 15.48,15.48c8.54625,0 15.48,-6.93375 15.48,-15.48c0,-8.54625 -6.93375,-15.48 -15.48,-15.48z">
                    </path></g></g></svg>
                    </div>
                    <div class="activites-content">
                        <h2> Canoë </h2>
                        <p> Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Ex, mollitia voluptatibus. 
                            Consectetur beatae ducimus ratione quae iusto 
                            voluptas explicabo, 
                            aliquam alias, quibusdam eius ut! Odio.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="titre titre-activites">
                <h1> NOTRE <span class="titre-color">Equipe <span> </h1>
            </div>
        <div class="container">
            <div class="card">
                <div class="titre-formule">
                <img src="Images/olivier-renaud.jpg" alt=""></img>
                    <h2>OLIVIER</br> RENAUD</h2>
                </div>
                    
                
                <div class="contenue_propose">
                    <ul class="liste_contenu_plan">
                        <li class="contenu_plan"> <p>Age:</p> <p>30 ans </p></li>
                        <li class="contenu_plan"> <p>Diplôme:</p><p>DEJEPS</p> </li>
                        <li class="contenu_plan"> <p>Experience:</p><p>10 ans</p></li>
                    </ul>
                </div>
                               
            </div>
            <div class="card">
                <div class="titre-formule">
                    <img src="Images/olivier-renaud.jpg" alt=""></img>
                    <h2>OLIVIER</br> RENAUD</h2>
                </div>
                    
                
                <div class="contenue_propose">
                    <ul class="liste_contenu_plan">
                        <li class="contenu_plan"> <p>Age:</p> <p>30 ans </p></li>
                        <li class="contenu_plan"> <p>Diplôme:</p><p>DEJEPS</p> </li>
                        <li class="contenu_plan"> <p>Experience:</p><p>10 ans</p></li>
                    </ul>
                </div>
                               
            </div>
            <div class="card">
                <div class="titre-formule">
                <img src="Images/olivier-renaud.jpg" alt=""></img>
                <h2>OLIVIER</br> RENAUD</h2>
                </div>
                    
                
                <div class="contenue_propose">
                    <ul class="liste_contenu_plan">
                        <li class="contenu_plan"> <p>Age:</p> <p>30 ans </p></li>
                        <li class="contenu_plan"> <p>Diplôme:</p><p>DEJEPS</p> </li>
                        <li class="contenu_plan"> <p>Experience:</p><p>10 ans</p></li>
                    </ul>
                </div>
                               
            </div>
        </div>
      
    </div>
    <script src="JS/script.js"></script>
</body>
</html>