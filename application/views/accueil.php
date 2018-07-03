<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
    <img src="<?php echo add_img('Image1.jpg');?>" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
    <div class="w3-modal-content w3-card-4 w3-animate-top">
        <header class="w3-container w3-teal w3-display-container">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
            <h4>Oh snap! We just showed you a modal..</h4>
            <h5>Because we can <i class="fa fa-smile-o"></i></h5>
        </header>
        <div class="w3-container">
            <p>Cool huh? Ok, enough teasing around..</p>
            <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
        </div>
        <footer class="w3-container w3-teal">
            <p>Modal footer</p>
        </footer>
    </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
    <h2>Notre équipe</h2>
    <p>Rencontrez notre équipe:</p>

    <div class="w3-row"><br>

        <div class="w3-quarter">
            <img src="<?php echo add_img('Coach1.jpg');?>" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Johnny Walker</h3>
            <p>Web Designer</p>
        </div>

        <div class="w3-quarter">
            <img src="<?php echo add_img('Coach2.jpg');?>" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Rebecca Flex</h3>
            <p>Support</p>
        </div>

        <div class="w3-quarter">
            <img src="<?php echo add_img('Coach3.jpg');?>" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Jan Ringo</h3>
            <p>Boss man</p>
        </div>

        <div class="w3-quarter">
            <img src="<?php echo add_img('Coach4.jpg');?>" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
            <h3>Kai Ringo</h3>
            <p>Fixer</p>
        </div>

    </div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

    <div class="w3-quarter">
        <h2>Nos Programmes</h2>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="<?php echo add_img('images.jpg');?>" alt="Snow" style="width:100%">
            <div class="w3-container">
                <h3>Porgramme 1 </h3>
                <h4>Trade</h4>

            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="<?php echo add_img('images1.jpg');?>" alt="Lights" style="width:100%">
            <div class="w3-container">
                <h3>Programme 2</h3>
                <h4>Trade</h4>
            </div>
        </div>
    </div>

    <div class="w3-quarter">
        <div class="w3-card w3-white">
            <img src="<?php echo add_img('images6.jpg');?>" alt="Mountains" style="width:100%">
            <div class="w3-container">
                <h3>Programme 3</h3>
                <h4>Trade</h4>
            </div>
        </div>
    </div>

</div>


<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
    <div class="w3-row">
        <div class="w3-col m5">
            <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
            <h3>Address</h3>
            <p>Swing by for a cup of coffee, or whatever.</p>
            <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Chicago, US</p>
            <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +00 1515151515</p>
            <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  test@test.com</p>
        </div>
        <div class="w3-col m7">
            <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
                <div class="w3-section">
                    <label>Name</label>
                    <input class="w3-input" type="text" name="Name" required>
                </div>
                <div class="w3-section">
                    <label>Email</label>
                    <input class="w3-input" type="text" name="Email" required>
                </div>
                <div class="w3-section">
                    <label>Message</label>
                    <input class="w3-input" type="text" name="Message" required>
                </div>
                <input class="w3-check" type="checkbox" checked name="Like">
                <label>I Like it!</label>
                <button type="submit" class="w3-button w3-right w3-theme">Send</button>
            </form>
        </div>
    </div>
</div>
