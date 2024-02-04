<?php
include ('shared.php');



$output = ""; // set the initial value of $output as an empty string.
$missing = array();

// check to see if there's form submission
if (array_key_exists('register',$_POST)){

	$expected = array("fullName", "email", "phone", "phoneService", "date","time","service","staff", "instruction");
	$required = array("fullName", "email", "phone", "phoneService", "date","time","service","staff");
	//$missing = array(); // this line is moved to outside of the if statement so that $missing is set no matter a form is submitted.  This will allow the input preservation code (which checks if $missing is empty) embedded in the HTML form input fields work without warning messages

	foreach($expected as $thisField) {
		// use $thisField to get the user input and strip any leadning and trailing whitespace from the user input
		$thisUserInput = $_POST[$thisField];

		// check if this field is a required field and whether the user input for this field is empty
		if (in_array($thisField, $required) && empty($thisUserInput)) {
			// if yes, add this field to the missing array
			array_push($missing, $thisField);
        } else {
            // Set up a variable to store it for this field
				/*
					Say $thisField contains "email", then this line
						${$thisField} = $thisUserInput;
					will effectively turn to
						$email = $thisUserInput;
                    (${$thisField} is called a variable variable -- the name of the variable is a variable.)
					In this example, after the foreach loop, we will then have the following variables, $firstName, $lastName, $email, $topic, and $frequency, all set up.  We can then use them later in the code to compose the $output.
					
					Also note that the names of these new variables match the form field names recorded in the $expected array.
				*/
            ${$thisField} = $thisUserInput;
            
            
        }
	}


	// after running through all expected fields, check the $missing array. if there is no required field missing, the $missing array will be empty.
	if (empty($missing)){
		// empty($missing) is true --> no missing field, proceed with business processes (in this example, display all user input.)

        
        // deal with multi-line text input
        $instructionStr = nl2br(htmlentities($instruction));
        
        // note the use of htmlentities() function below in processing the text user input before adding it to the output.  This function is used to handle html syntax and other special characters
        
		$inputList = "<ul>\n";
        $inputList .="  <li>Name: ".htmlentities($fullName)."</li>\n"; 
        $inputList .="  <li>Email: ".htmlentities($email)."</li>\n";
        $inputList .="  <li>Phone: $phone</li>\n";
        $inputList .="  <li>Phone Service: $phoneService</li>\n";
        $inputList .="  <li>Date: $date</li>\n";
        $inputList .="  <li>Time: $time</li>\n";
        $inputList .="  <li>Service: $service</li>\n";
        $inputList .="  <li>Staff: $staff</li>\n";
        $inputList .="  <li>Special Request: <p>$instructionStr</p></li>\n";
        $inputList .="</ul>\n";

        // $output: store the response message to the user
        $output = "<h2>Thank You for Your Submission!</h2>\n";
        $output .= "<p>You have submitted the following information: </p><br>\n";
        $output .= $inputList;
        $output .= "<div class='finalMessage success'>Your appoinment request has been successfully submitted. Thank you! We will get back to you in 1 business day.</div>\n";
        
        // Email Confirmation
        
        // Variables to store all User input
        $fullName = $_POST['fullName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $phoneService = $_POST['phoneService'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $service = $_POST['service'];
        $staff = $_POST['staff'];
        $instructionStr = $_POST['instruction'];
        
        // Variable For Output
        $emailOutput = "Name: $fullName 
                        Email: $email
                        Phone: $phone
                        Phone Service: $phoneService
                        Date: $date
                        Time: $time
                        Service: $service
                        Staff: $staff
                        Special Request: $instructionStr";
       
        // additional business process: send a notification email to the admin
         $to="lvn0213@mavs.uta.edu";
         $subject="Appoinment Request Confirmation";
         $header="From: admin@candlenailfw.com"; 
         $message="
         Thank you for requesting an appointment with Candle Nail Spa! Please allow 24 hours for us to get back to you.
            
            Name: $fullName 
            Email: $email
            Phone: $phone
            Phone Service: $phoneService
            Date: $date
            Time: $time
            Service: $service
            Staff: $staff
            Special Request: $instructionStr
            "; 
       
         $mailSent = mail($to,$subject,$message,$header);
        
        if ($mailSent) {
            
            $emailResultMessage =  "<p>A confirmation has been sent to your email. Thank you.";
                
        } else {
            $emailResultMessage = "<p>Something went wrong with our email system.  We are not able to send the email notification at this time.  Please reach out in 24 hours if you have not gotten an email confirmation.";
        }

	
	} else {
		// empty($missing) is false --> $missing array is not empty -- prepare a message for the user
        
        // convert the $missing array to a text string
		$missingFieldList = implode(", ",$missing);
        
		$output = "
            <h2>Oops!</h2>\n
            <div class='finalMessage error'>The following fields are missing from your post, please go back and fill them in.  Thank you.\n
            <p><b>Missing fields: $missingFieldList </b></p>\n</div>\n";
	}
}

?>

<!DOCTYPE html>
<html>
<body>
     <?php echo $HTMLHeader; ?>
     <?php echo $nav; ?>
     
    <header class="gd">
            <div class="container">
                <h1 style='font-size:2.5rem;'>Candle Nail Spa</h1>
                <h1>Appointments</h1>
                <p style="text-align:center;">Thank you for choosing Candle Nail Spa FW!</p>
            </div>
    </header>

    <div class="container">
        <div class="row">
            
            <div class="col-sm-12"> 
                <?php echo $output ?>
            </div>
            <!-- End of message -->
            
             <div class="col-md-6 col-lg-4">
                        <h2 id="policy">Appointment Policy</h2>
                        <p><b>**WE DO NOT OFFER ACRYLIC SERVICE**</b></p>
                        <p><b>**ONLINE REQUEST APPOINTMENTS MUST BE BOOKED AT LEAST 24 HOURS IN ADVANCE**</b></p>
                        <p><b>**After you request appointments, we will CONFIRM your appointments by EMAIL or  PHONE CALL (817-366-7172)**</b></p>
                        <p><b>**If you are running 10 minutes late on your appointments without calling the salon, we will automatically cancel your appointments.**</b></p>

                        <div>
                            <h2>Nail Spa Hours</h2>
                            <p>Mon-Fri: 9:30 AM - 7:30 PM</p>
                            <p>Sat: 9:00 AM - 7:00 PM</p>
                            <p>Sun: 11:00 AM - 5:30 PM</p>
                        </div>
                    </div>
        
            <div class="col-md-6 col-lg-8 contact-form">
              <h3>Enter Information Below</h3>
              <p>All fields are required, excepting special instruction.</p>
              
              <form action="" method="post" class="row" name="registration">
               <div class="col-lg-6">
                                <div class="form-group row ">
                                    <label 
                                        for="fullName" 
                                        class="col-sm-12
                                        col-form-label">
                                        Full Name:
                                    </label>
                                    <div class="col-sm-12">
                                        <input 
                                            type="text" 
                                            name="fullName" 
                                            id="fullname" 
                                            class="form-control" 
                                            maxlength="30"
                                            placeholder="John Doe"
                                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['fullName']);} ?>"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label 
                                        for="email" 
                                        class="col-sm-12
                                        col-form-label">
                                        Email:
                                    </label>
                                    <div class="col-sm-12">
                                        <input 
                                            type="email" 
                                            name="email" 
                                            id="email" 
                                            class="form-control" 
                                            placeholder="user@email.com"
                                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['email']);} ?>"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label 
                                        for="phone" 
                                        class="col-sm-12
                                        col-form-label">
                                        Phone:
                                    </label>
                                    <div class="col-sm-12">
                                        <input
                                            name="phone"
                                            id="reason"
                                            class="form-control"
                                            placeholder="123 456 7890"
                                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['phone']);} ?>"
                                            >
                                    </input>
                                    </div>
                                </div>

                                <?php  
                                function dropListChecked($fieldName,$v){
                                        global $missing;
                                        if (isset($_POST[$fieldName])&&(!empty($missing))&& $_POST[$fieldName] == $v){
                                            $checked = "selected";
                                        } else {
                                            $checked = "";
                                        }
                                        echo $checked;
                                    }
                                ?>

                                <div class="form-group row">
                                    <label 
                                        for="phoneService" 
                                        class="col-sm-12
                                        col-form-label">
                                        Mobile Phone Service:
                                    </label>
                                    <div class="col-sm-12">
                                        <select name="phoneService">
                                            <option value="AT&T" <?php dropListChecked('phoneService','AT&T') ?>>AT&T</option>
                                            <option value="Verizon" <?php dropListChecked('phoneService','Verizon') ?>>Verizon</option>
                                            <option value="T-Mobile" <?php dropListChecked('phoneService','T-Mobile') ?>>T-Mobile</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    
                <div class="col-lg-6">
                                <div class="form-group row">
                                    <label 
                                        for="date" 
                                        class="col-sm-12
                                        col-form-label">
                                        Date:
                                    </label>
                                    <div class="col-sm-12">
                                        <input
                                            name="date"
                                            id="reason"
                                            class="form-control"
                                            placeholder="mm/dd/yyyy"
                                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['date']);} ?>">
                                    </input>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label 
                                        for="time" 
                                        class="col-sm-12
                                        col-form-label">
                                        Time:
                                    </label>
                                    <div class="col-sm-12">
                                        <input
                                            name="time"
                                            id="reason"
                                            class="form-control"
                                            placeholder="00:00 PM"
                                            value="<?php if (!empty($missing)) {echo htmlentities($_POST['time']);} ?>">
                                    </input>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label 
                                        for="service" 
                                        class="col-sm-12
                                        col-form-label">
                                        Service:
                                    </label>
                                    <div class="col-sm-12">
                                        <select name="service">
                                            <option value="Dipping" <?php dropListChecked('service','Dipping') ?>>Dipping</option>
                                            <option value="Manicure" <?php dropListChecked('service','Manicure') ?>>Manicure</option>
                                            <option value="Pedicure" <?php dropListChecked('service','Pedicure') ?>>Pedicure</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label 
                                        for="staff" 
                                        class="col-sm-12
                                        col-form-label">
                                        Staff:
                                    </label>
                                    <div class="col-sm-12">
                                        <select name="staff">
                                            <option value="First Available" <?php dropListChecked('staff','First Available') ?>>First Available</option>
                                            <option value="Ben" <?php dropListChecked('staff','Ben') ?>>Ben</option>
                                            <option value="Candy" <?php dropListChecked('staff','Candy') ?>>Candy</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                     
                <div class="col-lg-12">
                                <div class="form-group row">
                                    <label 
                                        for="instruction" 
                                        class="col-sm-12 
                                        col-form-label">
                                        Special Request:
                                    </label>
                                    <div class="col-sm-12">
                                        <textarea
                                            name="instruction"
                                            id="message"
                                            maxlength="200"
                                            placeholder="Message"
                                           ><?php if (!empty($missing)) {echo $instruction;} ?>  
                                        </textarea>
                                    </div>
                                </div>
                                <input 
                                    type="submit" 
                                    name="register" 
                                    id="submit" 
                                    value="Request Appointment" 
                                    class="btn btn-secondary"
                                    title="Send Message"
                                />
                            </div>
                  
              </form>
    </div>
        </div>        
    </div>
    <footer>
        <?php echo $footer; ?>
    </footer>
</body>
</html>
