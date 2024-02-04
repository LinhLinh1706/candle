<?php
	include ('shared.php');
	include('cookies_info_popup.php');
?>
<!DOCTYPE HTML>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $head; ?>
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
        <!--<div class='container'>-->
        <!--    <div class='row'>-->
                <!--<div class="col-sm-12 col-md-12 col-lg-12">-->
                <!--    <h2 style="text-align:center";>Certificates and License</h2>-->
                <!--</div>-->
        <!--        <div class="col-sm-6 col-md-4 col-lg-4">-->
        <!--            <img src="https://zolmi.com/assets/img/com/blog/occupational-spa-license.png" alt="Business License" style="width:120%; height:120%;">-->
        <!--        </div>-->
        <!--        <div class="col-sm-6 col-md-4 col-lg-4">-->
        <!--            <img src="https://p1.hiclipart.com/preview/306/22/495/texas-cosmetologist-license-black-text-png-clipart-thumbnail.jpg" alt="Cosmetology License" style="width:100%; height:100%";>-->
        <!--        </div>-->
        <!--        <div class="col-sm-6 col-md-4 col-lg-4">-->
        <!--            <img src="https://pbs.twimg.com/tweet_video_thumb/FUKy52JWYAQrsfH.jpg" alt="License" style="width:100%; height:100%";>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
        <div class='container-body'>
            <div class='row'>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="images/dazzle.png" alt="Dazzle" style="width:70%; height:70%";>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2>Services</h2>
                        <p>We offer a wide variety of services including men and kids services. Our products are <b>clean and chemical-free</b> that will give you a piece of mind while enjoying beauty services. Some of our products used: <b>epsom salt, collagen gloves, dazzle dry polish, etc.</b></p>
                        <div class="button"><a href="services.php" class="btn btn-secondary"><strong>Services</strong></a></div>
                    </div>
            </div>
        </div>
        <div class='container-body2'>
            <div class='row'>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="images/appointment.jpg" alt="Apointment" style="width:70%; height:70%";>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2>Appointment</h2>
                        <p>Schedule your appointment with us here to receive <b>luxury treatment</b> with chemical-free products and talented nail technicians.</p>
                        <div class="button"><a href="appointment.php" class="btn btn-third"><strong>Appointment</strong></a></div>
                    </div>
            </div>
        </div>
        <div class='container-body'>
            <div class='row'>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="images/about.jpg" alt="About Us" style="width:60%; height:50%";>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2>About Us</h2>
                        <p>Meet our teams of excellent and wonderful nail technicians that can deliver any ideas you want to bring into your nail designs as well as our environmental-friendly products.</p>
                        <div class="button"><a href="about.php" class="btn btn-secondary"><strong>About Us</strong></a></div>
                    </div>
            </div>
        </div>
        <div class='container-body2'>
            <div class='row'>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="images/contact.jpg" alt="Contact Us" style="width:70%; height:70%";>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2>Contact Us</h2>
                        <p>Find our locations, business hours, and many more seasonal offers here.</p>
                        <div class="button"><a href="contact.php" class="btn btn-third"><strong>Contact Us</strong></a></div>
                    </div>
            </div>
        </div>
        <div class='container'>
            <div class='row'>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3>Subscribe to join our luxury treatment</h3>
                    <form id="form" name="form" method="post" action="subscription.php">
                        <p>
                            <input type="email" name="email" id="subscript" placeholder="Enter your email here" />
                            <input type="submit" name="Submit" id="subbutton" value="JOIN" />
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <div class='container' id='gallery'>
            <div class='row'>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1 style="text-align:center";>Gallery</h1>
                </div>
            </div>
        </div>
        <div class='container' id='gallery'>
            <div class='row'>
                <!--<img class="arrow" src="images/arrowL.svg" alt="Left Arrow">-->
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="https://lh3.googleusercontent.com/p/AF1QipPf4hQX9CiXFIVu6ZF92MY0IUhedy85hxyiXYWf=s680-w680-h510">
                      <img src="https://scontent-dfw5-1.xx.fbcdn.net/v/t39.30808-6/392939710_239143729138846_2782316177882891716_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=3635dc&_nc_ohc=oQLekZW5z7MAX_Pv4W2&_nc_ht=scontent-dfw5-1.xx&oh=00_AfCnwUMUHGUyQ1Ni09poht8z_9M0GWY3U8YVMMes22Y5vQ&oe=6573E033" alt="Tony Nail" width="400" height="300">
                    </a>
                    <div class="desc">
                        <ul>
                            <li><b>Nail Technician:</b> Tony</li>
                            <li><b>Price:</b> Starting at 80$</li>
                        </ul>
                    </div>
                  </div>
                </div>
                
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="https://lh3.googleusercontent.com/p/AF1QipMrrk1psqqe9YDIXmmiGraHy1tRCv0UBkySAzHs=s680-w680-h510">
                      <img src="https://lh3.googleusercontent.com/p/AF1QipMrrk1psqqe9YDIXmmiGraHy1tRCv0UBkySAzHs=s680-w680-h510" alt="Nail Design" width="400" height="300">
                    </a>
                     <div class="desc"> 
                        <ul>
                            <li><b>Nail Technician:</b> Tony</li>
                            <li><b>Price:</b> Starting at 80$</li>
                        </ul>
                    </div>
                  </div>
                </div>
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="https://lh3.googleusercontent.com/p/AF1QipNRaW_YP7lVCkfpAzDvdejq0xHY2PnoKPszHrdJ=s680-w680-h510">
                      <img src="https://lh3.googleusercontent.com/p/AF1QipNRaW_YP7lVCkfpAzDvdejq0xHY2PnoKPszHrdJ=s680-w680-h510" alt="Halloween Design" width="400" height="300">
                    </a>
                    <div class="desc">
                         <ul>
                            <li><b>Nail Technician:</b> Yuki</li>
                            <li><b>Price:</b> Starting at 80$</li>
                        </ul>
                    </div>
                  </div>
                </div>
                
                <div class="responsive">
                  <div class="gallery">
                    <a target="_blank" href="https://lh3.googleusercontent.com/p/AF1QipP8Jfj8-BIEr2_dLRObmSkUb8rnM3EKzMcundNR=s680-w680-h510">
                      <img src="https://lh3.googleusercontent.com/p/AF1QipP8Jfj8-BIEr2_dLRObmSkUb8rnM3EKzMcundNR=s680-w680-h510" alt="Mountains" width="400" height="300">
                    </a>
                    <div class="desc">
                         <ul>
                            <li><b>Nail Technician:</b> Iris</li>
                            <li><b>Price:</b> Starting at 70$</li>
                        </ul>
                    </div>
                  </div>
                </div>
                <!--<img class="arrow" src="images/arrowR.svg" alt="Right Arrow">-->
            </div>
        </div>
        <!--<div class='container'>-->
        <!--    <div class='row'>-->
                <!--<div class="col-sm-12 col-md-12 col-lg-12">-->
                <!--    <h2 style="text-align:center";>Certificates and License</h2>-->
                <!--</div>-->
        <!--        <div class="col-sm-6 col-md-4 col-lg-4">-->
        <!--            <img src="https://zolmi.com/assets/img/com/blog/occupational-spa-license.png" alt="Business License" style="width:120%; height:120%;">-->
        <!--        </div>-->
        <!--        <div class="col-sm-6 col-md-4 col-lg-4">-->
        <!--            <img src="https://p1.hiclipart.com/preview/306/22/495/texas-cosmetologist-license-black-text-png-clipart-thumbnail.jpg" alt="Cosmetology License" style="width:100%; height:100%";>-->
        <!--        </div>-->
        <!--        <div class="col-sm-6 col-md-4 col-lg-4">-->
        <!--            <img src="https://pbs.twimg.com/tweet_video_thumb/FUKy52JWYAQrsfH.jpg" alt="License" style="width:100%; height:100%";>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</div>-->
	</main>
    
    
	<?php echo $footer; ?>

</BODY>
</HTML>

