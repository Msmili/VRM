<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
    <img src="<?php echo add_img('images.jpg');?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 back" id="work">

    <div class="w3-quarter">
        <h2>Description</h2>
        <?php
            echo $pack[0]['DescriptifP'];
        ?>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="<?php echo add_img('images.jpg');?>" alt="Snow" style="width:100%">
            <div class="w3-container">
                <h3>Début de séance</h3>
                <h5>Préparation physique</h5>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="<?php echo add_img('images1.jpg');?>" alt="Lights" style="width:100%">
            <div class="w3-container">
                <h3>Milieu de séance</h3>
                <h5>Tonification musculaire</h5>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="<?php echo add_img('images6.jpg');?>" alt="Mountains" style="width:100%">
            <div class="w3-container">
                <h3>Fin de séance</h3>
                <h5>Étirements </h5>
            </div>
        </div>
    </div>

</div>
<div class="w3-display-container w3-animate-opacity">

    <div class="transaction">
        <h3>Prix du pack</h3>
        <?php echo '<span class="centre">'.$pack[0]['Prix'].'€</span>';?>
        <div id="paypal-button"></div>
    </div>
</div>

