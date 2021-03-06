<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/header.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/index.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/activites.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="CSS/footer.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <a style="display: none;" href="https://icons8.com/icon/9780/climbing">Climbing icon by Icons8</a>
    <title>O Tennis Tour | Tennis academy </title>
</head>
<body>
    <header>
      <?php
          require 'header.php'
      ?>
    </header>
    
        <!-- La Page Index.php -->
        <div class="titre titre-activites">
            <h1> Les <span class="titre-color">activités <span> </h1>
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

                <div class="card-activites">
                    <div class="logo-activites">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f46e54"><path d="M87.72,0c-8.54625,0 -15.48,6.93375 -15.48,15.48c0,8.54625 6.93375,15.48 15.48,15.48c8.54625,0 15.48,-6.93375 15.48,-15.48c0,-8.54625 -6.93375,-15.48 -15.48,-15.48zM48.4825,26.875c-14.9425,0 -28.2725,7.095 -35.7975,18.92c-3.06375,4.82406 -3.19812,10.89781 -0.215,16.34c2.19031,3.99094 5.68406,6.97406 9.46,8.385c1.80063,-4.91812 4.82406,-8.45219 6.3425,-10.2125l0.3225,-0.43c1.29,-1.51844 2.59344,-3.07719 3.9775,-4.73c3.57438,-4.27312 7.68625,-9.08375 13.115,-15.265l0.1075,-0.215c4.24625,-4.8375 8.07594,-9.08375 11.9325,-11.9325c-3.02344,-0.59125 -6.16781,-0.86 -9.245,-0.86zM67.51,30.96c-4.86437,0 -10.05125,5.9125 -16.6625,13.4375c-7.48469,8.51938 -12.37594,14.55281 -16.985,19.995c-1.77375,2.08281 -7.4175,8.10281 -6.3425,16.0175c1.075,7.91469 9.66156,11.62344 17.2,14.0825c7.67281,2.49938 23.5425,7.8475 23.5425,7.8475c0,0 14.57969,30.71813 16.555,34.5075c1.97531,3.78938 4.87781,8.90906 10.32,6.7725c5.44219,-2.13656 4.66281,-7.91469 3.01,-12.5775c-1.81406,-5.10625 -10.91125,-29.025 -13.0075,-34.0775c-2.55312,-6.18125 -3.225,-6.65156 -10.2125,-10.32c-6.89344,-3.61469 -19.135,-8.4925 -19.135,-8.4925c0,0 18.06,-19.8875 19.135,-21.07c1.81406,-1.97531 4.01781,-2.92937 6.5575,-2.2575c3.13094,0.81969 34.69563,10.17219 38.7,11.5025c5.93938,1.97531 11.70406,1.59906 13.33,-1.505c1.81406,-3.46687 1.22281,-6.9875 -5.0525,-9.7825c-5.87219,-2.60687 -38.95531,-15.3725 -44.3975,-17.845c-6.24844,-2.83531 -11.61,-6.235 -16.555,-6.235zM137.6,75.68c-18.96031,0 -34.4,15.43969 -34.4,34.4c0,18.96031 15.43969,34.4 34.4,34.4c18.96031,0 34.4,-15.43969 34.4,-34.4c0,-18.96031 -15.43969,-34.4 -34.4,-34.4zM137.6,82.56c15.23813,0 27.52,12.28188 27.52,27.52c0,15.23813 -12.28187,27.52 -27.52,27.52c-15.23812,0 -27.52,-12.28187 -27.52,-27.52c0,-15.23812 12.28188,-27.52 27.52,-27.52zM34.4,103.2c-18.96031,0 -34.4,15.43969 -34.4,34.4c0,18.96031 15.43969,34.4 34.4,34.4c18.96031,0 34.4,-15.43969 34.4,-34.4c0,-18.96031 -15.43969,-34.4 -34.4,-34.4zM34.4,110.08c15.23813,0 27.52,12.28188 27.52,27.52c0,15.23813 -12.28187,27.52 -27.52,27.52c-15.23812,0 -27.52,-12.28187 -27.52,-27.52c0,-15.23812 12.28188,-27.52 27.52,-27.52z"></path></g></g></svg>
                    </div>
                    <div class="activites-content">
                        <h2> VTT </h2>
                        <p> Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Ex, mollitia voluptatibus. 
                            Consectetur beatae ducimus ratione quae iusto 
                            voluptas explicabo, 
                            aliquam alias, quibusdam eius ut! Odio.</p>
                    </div>
                </div>

                <div class="card-activites">
                    <div class="logo-activites">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                    width="100" height="100"
                    viewBox="0 0 172 172"
                    style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f46e54"><path d="M94.6,10.32c-8.54937,0 -15.48,6.93063 -15.48,15.48c0,8.54937 6.93063,15.48 15.48,15.48c8.54937,0 15.48,-6.93063 15.48,-15.48c0,-8.54937 -6.93063,-15.48 -15.48,-15.48zM126.97094,13.78016c-0.61302,0.03757 -1.2255,0.13792 -1.8275,0.30906c-6.27456,1.77848 -9.60803,10.5135 -7.59219,19.8875c1.22464,5.70008 4.21819,10.46163 7.99531,12.73203c1.16641,0.70035 2.37024,1.14161 3.58109,1.33703l3.63485,17.73078l-19.82703,2.52625l-22.19875,-19.11485c-0.172,-0.18232 -4.20669,-4.46797 -10.05125,-4.46797c-6.04752,0 -9.9982,1.24087 -13.55172,7.78031c-7.69872,14.1728 -11.61968,29.88881 -11.63688,30.01265c-0.49192,3.5604 -0.58491,7.11844 -0.28219,10.56188c0.45752,5.48336 1.92807,10.77187 4.37391,15.71515c0.3612,0.87032 5.4962,13.57026 7.9214,19.65906l-20.2436,21.99719c-1.64088,1.62712 -2.5464,3.77927 -2.5464,6.07375c0,2.29448 0.90273,4.45056 2.51953,6.0536c1.60304,1.64432 3.76191,2.5464 6.08047,2.5464c2.31856,0 4.47447,-0.90585 6.06031,-2.53297l24.06656,-25.78656c2.3392,-2.29792 2.91572,-4.46678 2.35156,-8.6739c-0.60888,-4.52016 -1.51844,-18.04656 -1.51844,-18.04656c0,-7.052 1.02592,-25.77017 5.5564,-32.20297l17.50906,7.10844c1.16616,0.6364 2.45057,0.96078 3.81625,0.96078c0.45752,0 9.37427,-1.17847 26.50547,-3.50047c0.05848,-0.00688 0.28418,-0.05343 0.34266,-0.06719c4.48232,-1.09392 7.28715,-5.71416 6.25515,-10.30656c-0.52288,-2.30824 -1.87281,-4.24803 -3.80953,-5.46235c-0.17697,-0.11119 -0.36846,-0.17907 -0.55094,-0.27547l-4.1186,-20.0689c4.29613,-3.30035 6.33433,-10.55573 4.66281,-18.31531c-1.22464,-5.70008 -4.21819,-10.46163 -7.99531,-12.73203c-1.77762,-1.06812 -3.64344,-1.55053 -5.4825,-1.43781zM37.84,41.28c-3.79972,0 -6.88,3.08028 -6.88,6.88c0,3.79972 3.08028,6.88 6.88,6.88c3.79972,0 6.88,-3.08028 6.88,-6.88c0,-3.79972 -3.08028,-6.88 -6.88,-6.88zM91.64375,99.89437c-0.3096,3.3712 -0.48375,6.81335 -0.48375,9.94375c0.1376,2.1672 0.44962,6.26134 0.75922,10.01094l10.42078,5.50265l7.94828,29.58265c0.8256,3.9216 4.36692,6.74563 8.39172,6.74563c0.5848,0 1.20078,-0.07068 1.85437,-0.20828c2.2704,-0.516 4.16348,-1.85625 5.40188,-3.78265c1.2384,-1.9264 1.61707,-4.22825 1.13547,-6.42985l-8.6,-32.54562c-0.3784,-1.7888 -1.30397,-3.37066 -2.71437,-4.60906c-0.0688,-0.0688 -0.17227,-0.13948 -0.27547,-0.20828z"></path></g></g></svg>
                    </div>
                    <div class="activites-content">
                        <h2> Paddle Tennis </h2>
                        <p> Lorem ipsum dolor sit amet consectetur 
                            adipisicing elit. Ex, mollitia voluptatibus. 
                            Consectetur beatae ducimus ratione quae iusto 
                            voluptas explicabo, 
                            aliquam alias, quibusdam eius ut! Odio.</p>
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