<?php
	include ('shared.php');
?>
<!DOCTYPE HTML>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $nav; ?>
	<main>
	    <div class='container'>
            <div class='row'>
        	    <div class="col-sm-12 col-md-12 col-lg-12">
        	        <div class="hero">
                        <img src="images/headerImage.jpg" alt="header image" style="width:100%;">
                        <div class="h2">Candle Nail Spa</div>
                        <div class="centered">Step into Ultimate Foot Care: Where Beauty Meets Health at Our Premium Nail Salon!</div>
                        <a href="appointment.php" class="btn btn-primary"><strong>Appointment</strong></a>
                    </div>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='row'>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h2 style="text-align:center;">Services</h2>
                    <div class='nav-menu'>
                        <?php echo $navigation; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='container' style="margin-top:50px;">
            <div class='row'>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <img src="https://www.scheduleanyone.com/cdn-schedule/htm/NailSpaDr.png" style="max-width: 100%;"><br><br>
                    <a href="#" style="text-decoration:none; ">888-864-2418</a><br><br>
                    <a href="mailto:info@NailSpaDr.com" style="text-decoration:none;">info@NailSpaDr.com</a></li>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p>NailSpaDr is a Medi - Nail Spa concept that is the first of its kind in the medical nail industry to accept medical insurance in Dallas!  At NailSpaDr, we believe health and beauty go hand in hand, especially when it comes to the nail industry.</p>
                    <p>We aim to infuse podiatry and medicine into the artistry of nail care through our Dallas NailSpaDr locations.  We aim to empower this journey with anti-aging podiatrists on site as well as certified medical nail technicians ready to serve you and the senior living community.</p>
                    <p>Our grand launch event promises to be an extraordinary affair, filled with fun, pampering, education, and delightful surprises. join us for this exclusive NailspaDr experience</p>
                    <p>Our podiatrist and certified medical nail technicians eagerly await to serve you!</p>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='row'>
                <img src="https://www.scheduleanyone.com/cdn-schedule/upload-folder/f76fba98-f028-42cc-a5a3-76fc1b142ab8.jpg" style="max-width: 100%;">
            </div>
        </div>
    </main>

	<?php echo $footer; ?>

</BODY>
</HTML>