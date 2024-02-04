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
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h3 style="text-align:center; margin-bottom:50px;">Pedicure</h3>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">Classic Pedicure $33</h4>
                    <p style="text-align:center;">Heel buffing, sugar scrub, leg-feet massage</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">Male Pedicure $33</h4>
                    <p style="text-align:center;">Heel buffing, sugar scrub, leg-feet massage</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">Collagen Pedicure $43</h4>
                    <p style="text-align:center;">Classic Pedicure + <b>collagen socks</b> + warm towels</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">Renew Pedicure $49</h4>
                    <p style="text-align:center;">Classic Pedicure + moisturizer mask + warm towels</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">Deluxe Pedicure $53</h4>
                    <p style="text-align:center;">Classic Pedicure + callus treatment + <b>collagen socks</b></p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">M&H Pedicure $63</h4>
                    <p style="text-align:center;">Classic Pedicure + callus treatment + <b>collagen socks</b> + hot stones</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">Aroma Pedicure $78</h4>
                    <p style="text-align:center;">Classic Pedicure + callus treatment + <b>collagen socks</b> + hot stones + <b>warm neck wrap</b></p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M175.2 476.6c-9.7-18-15.2-38.7-15.2-60.6c0-40.3 19-78.2 51.2-102.4l64-48c8.1-6 12.8-15.5 12.8-25.6V96H128V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C14.2 357.3 0 385.8 0 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l21.6-16.2zM128 64H288V48c0-14.5 3.9-28.2 10.7-39.9C291 3 281.9 0 272 0H176c-26.5 0-48 21.5-48 48V64zM320 96V240c0 20.1-9.5 39.1-25.6 51.2l-64 48C206.2 357.3 192 385.8 192 416c0 53 43 96 96 96c20.8 0 41-6.7 57.6-19.2l115.2-86.4C493 382.2 512 344.3 512 304V96H320zM512 64V48c0-26.5-21.5-48-48-48H368c-26.5 0-48 21.5-48 48V64H512z"/></svg>
                    <h4 style="text-align:center;">CBD Pedicure $98</h4>
                    <p style="text-align:center;">Classic Pedicure + callus treatment + <b>collagen socks</b> + hot stones + <b>warm neck wrap</b></p>
                </div>
            </div>
        </div>
        <div class='container-body2'>
            <div class='row'>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="https://voesh.com/cdn/shop/products/VOESH_CollagenSocksTrio_FootModel_753x@2x.jpg?v=1666044666" alt="Collagen socks" style="width:50%; height:50%";>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2>Collagen Socks</h2>
                        <p>Deeply Moisturizes dry, cracked feet. These Collagen Socks soften dry and rough skin, leaving feet deeply moisturized.</p>
                        <div class="button"><a href="https://voesh.com/products/collagen-socks-trio" class="btn btn-third"><strong>Find out more</strong></a></div>
                    </div>
            </div>
        </div>
         <div class='container'>
            <div class='row'>
                <div class="col-sm-12 col-md-12 col-lg-12">
                        <h3 style="text-align:center; margin-bottom:50px;">Manicure</h3>
                        </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">Classic Manicure $23</h4>
                            <p style="text-align:center;">Cuticle care, hands massage, finish with regular polish or buff shine.</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">Dazzle Manicure $43</h4>
                            <p style="text-align:center;">(Dries in 5-10mins) NO UV Light Cuticle care, hands massage, finish with <b>Dazzle polish</b>.</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">Male Manicure $23</h4>
                            <p style="text-align:center;">Cuticle care, hands massage, finish with regular polish or buff shine.</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">Collagen Manicure $33</h4>
                            <p style="text-align:center;">Cuticle care, <b>collagen gloves, warm towels</b>, hands massage, finish with regular polish or buff shine.</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">Milk & Honey Manicure $43</h4>
                            <p style="text-align:center;">Cuticle care, <b>collagen gloves, warm towels, warm neck wrap</b>, hands massage, finish with regular polish or buff shine.</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">Aroma Manicure $53</h4>
                            <p style="text-align:center;">Cuticle care, <b>collagen gloves, warm towels, warm neck wrap</b>, hands massage, finish with regular polish or buff shine.</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">CBD Mani $69</h4>
                            <p style="text-align:center;">Cuticle care, <b>collagen gloves, warm towels, warm neck wrap</b>, hands massage, finish with regular polish or buff shine.</p>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 section">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" viewBox="0 0 512 512" class="pedicure"><!--!Font Awesome Free 6.5.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V336c0 1.5 0 3.1 .1 4.6L67.6 283c-16-15.2-41.3-14.6-56.6 1.4s-14.6 41.3 1.4 56.6L124.8 448c43.1 41.1 100.4 64 160 64H304c97.2 0 176-78.8 176-176V128c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V64c0-17.7-14.3-32-32-32s-32 14.3-32 32V240c0 8.8-7.2 16-16 16s-16-7.2-16-16V32z"/></svg>
                            <h4 style="text-align:center;">Royal Mani $79</h4>
                            <p style="text-align:center;">Cuticle care, <b>collagen gloves, warm towels, warm neck wrap</b>, hands massage, finish with regular polish or buff shine.</p>
                </div>
            </div>
        </div>
        <div class='container-body2' style="margin-bottom: 50px;">
            <div class='row'>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <img src="https://cdn.shopify.com/s/files/1/2657/6552/t/21/assets/beautifulbenefitslacquers_feat-1683584241770.jpg?v=1683584242" alt="Dazzle dry" style="width:50%; height:50%";>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <h2>Dazzle Nail Polish</h2>
                        <p>Revolutionary lacquer system that dries worry-free in 5 minutes, lasts 7+ days, is environmentally sound, and promotes healthy nails. Elevate your nail game.</p>
                        <div class="button"><a href="https://dazzledry.com/collections/new" class="btn btn-third"><strong>Find out more</strong></a></div>
                    </div>
            </div>
        </div>
    </main>

	<?php echo $footer; ?>

</BODY>
</HTML>
        