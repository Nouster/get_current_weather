<?php
require_once 'layout/header.php';
require_once 'classes/Weather.php';
require_once 'functions/functions.php';

$weather = new Weather(45.75, 4.85,'12d8a10ed4a8966b8d2f0e60baab934a', 'metric', 'fr');
$forecast= $weather->getWeather();
?>

    <h1 class="text-center my-5">Prévisions météorologique des 5 prochains jours</h1>

    <section class="container">
        <div class="row justify-content-center gap-3">
                <?php foreach($forecast as $day) {
                    if ($day['date']->format('H:i:s') == '06:00:00') {
                    ?>
                    <div class="col-md-2 d-flex flex-column p-3 border rounded gap-2">
                        <h5> <?php echo $day['date'] -> format('d/m/Y')  ?> </h5>
                        <span><?php echo displayWeatherIcon($day) ?></span>
                        <span><?php echo $day['temps'] ?></span>
                    </div>
                <?php }}?>
        </div>
    </section>


<?php

require_once 'layout/footer.php';






