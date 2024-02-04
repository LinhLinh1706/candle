<?php
//--------------------------
// Form Processing Script
//		- This script is written to work with the form in post_form.php.
//		- Challenge: can you make the information labels (Author, Title, Comment) appear in green?
//		- Challenge: can you print all user input in a table format?
//--------------------------

// set up variables to store all user input
$email = $_POST['email'];

// use a variable to store the output.  The output ($output) will be printed below (line 34). 

$output = "<b>Email</b>: $email <br/>";
            
$to="$email"; // change this to your own email address
$subject="Newsletter Subscription Notification";
$header="From: Candle Nail Spa"; 
 // try setting $message = $output; and see what you receive in the email

 $mailSent = mail($to,$subject,$header);

if ($mailSent) {
    
    $emailResultMessage =  "<p>Thank you for subscribing to our newsletter. We appreciate your interest in our sevices at Candle Nail Spa.";
        
} else {
    $emailResultMessage = "<p>Something went wrong with our email system.  We are not able to send the email notification to our Web admin team regarding your subscription.";
}

// add $emailResultMessage to the comment preview table as the final output
$output = $output."<br/>".$emailResultMessage;

?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<TITLE> Candle Nail Spa Newsletter</TITLE>
<style>

</style>
</HEAD>

<BODY>
Newsletter Subscription Notification
<hr>

<h2>Preview Your Subscription</h2>

<hr size="1">
<p>
	<?php echo $output ?>
</p>


</BODY>
</HTML>