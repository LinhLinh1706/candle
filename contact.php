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
        <div class="container" style="background-color: white;">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h3>Send us a message</h3>
                    <form class="form" action="" method="post">
                        <label 
                            for="fullName" 
                            class="col-sm-12
                            col-form-label">
                            Full Name:
                        </label>
                        <input 
                            type="text" 
                            name="fullName" 
                            id="fullname" 
                            class="form-control" 
                            maxlength="30"
                            placeholder="John Doe"
                            style="border: 2px solid red;"
                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['fullName']);} ?>"
                        />
                        <label 
                            for="email" 
                            class="col-sm-12
                            col-form-label">
                            Email:
                        </label>
                        <input 
                            type="email" 
                            name="email" 
                            id="email" 
                            class="form-control" 
                            placeholder="user@email.com"
                            style="border: 2px solid red;"
                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['email']);} ?>"
                        />
                        <label 
                            for="phone" 
                            class="col-sm-12
                            col-form-label">
                            Phone:
                        </label>
                        <input
                            name="phone"
                            id="reason"
                            class="form-control"
                            placeholder="123 456 7890"
                            style="border: 2px solid red;"
                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['phone']);} ?>"
                        />
                        <label 
                            for="instruction" 
                            class="col-sm-12 
                            col-form-label">
                            Send message:
                        </label>
                        <textarea
                            name="instruction"
                            id="message"
                            maxlength="200"
                            placeholder="Message"
                        ><?php if (!empty($missing)) {echo $instruction;} ?>  
                        </textarea>
                        <input 
                            type="submit" 
                            name="register" 
                            id="submit" 
                            value="Submit" 
                            class="btn btn-secondary"
                            title="Send Message"
                        />
                    </form>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h3>November Promotion</h3>
                    <p style='text-align:center;'>*Subject to change each month*</p>
                    <img src="images/contact.jpg" alt="Contact Us" style="width:100%; height:100%";>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <h3>Store Hours</h3>
                    <div>
                        <p style='text-align:center;'>Monday – 9:30am – 7:30pm</p>
                        <p style='text-align:center;'>Tuesday&nbsp;– 9:30am – 7:30pm</p>
                        <p style='text-align:center;'>Wenesday&nbsp;– 9:30am – 7:30pm</p>
                        <p style='text-align:center;'>Thursday&nbsp;– 9:30am – 7:30pm</p>
                        <p style='text-align:center;'>Friday&nbsp;– 9:30am – 7:30pm</p>
                        <p style='text-align:center;'>Saturday – 9:00am – 7:00pm</p>
                        <p style='text-align:center;'>Sunday – 11:00am – 6:00pm</p>
                        <p style='text-align:center;'>Christmas Eve – 9:30am – 5:00pm</p>
                        <p style='text-align:center;'>Christmas – CLOSED</p>
                        <p style='text-align:center;'>New Year Eve – 9:30am – 6:00pm</p>
                        <p style='text-align:center;'>New Year – CLOSED</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                        <h3>Find Us</h3>
                        <h5 style='text-align:center;'>3201 Tracewood Way Ste 101, Fort Worth, TX 76177</h5>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3349.3247120377678!2d-97.31294692433148!3d32.91601817360586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e71c95e3b2473%3A0x535c22374506b410!2sCandle%20Nail%20Spa%20-%20Alliance%20Town!5e0!3m2!1sen!2sus!4v1701368469486!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                </div>
            </div>
        </div>
    </main>
    
    
	<?php echo $footer; ?>

</BODY>
</HTML>
</body>
</html>