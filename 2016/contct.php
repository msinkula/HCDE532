<?php include('includes/header.php') ; ?>

	<!-- Begin Text -->
	<article id="text">
    	<h2>Contact Me!</h2>
        
        <?php
		if ( isset ($_POST['submit']) ) { // if the submit button is clicked...
		
			$mailMesage = ("{$_POST['name']} {$_POST['email']} wrote: \n\n{$_POST['message']}"); // message of the email
			
			$mailSubject = "{$_POST['subject']}"; // subject of the email
			
			$mailRecipient = "sinkum@uw.edu"; // destination email address
			
			$mailSender = "From: {$_POST['email']}"; // the mail sender
			
			mail ($mailRecipient, $mailSubject , $mailMesage, $mailSender); // function to send the email
			
			print ("<p>Thank you for contacting me, <strong>{$_POST['name']}</strong>!</p>\n"); // notice that thanks the user
		
		}
			
		?>
        
        
        <!-- Begin Contact Form -->
        <form action="contact.php" method="post" name="contact" >
        <label for="name">Name:</label>
        <input name="name" type="text" placeholder="Put your name here." required="required" >
        <label for="email">Email:</label>
        <input name="email" type="email" placeholder="name@domain.com" required="required">
        <label for="subject">Subject:</label>
        <select name="subject">
            <option value="Subject One">Subject 1</option>
            <option value="Subject Two">Subject 2</option>
            <option value="Subject Three" selected="selected">Subject 3</option>
        </select>
        <label for="message">Message:</label>
        <textarea name="message" cols="40" rows="5" required="required"></textarea>
        <input name="submit" type="submit" value="Submit Message" >
        </form>
        <!-- End Contact Form -->
        
    </article>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <aside id="sidebar">
    <h2>Contact</h2>
    <ul>
    <li>Donec sed est metus</li>
    <li>Ut accumsan varius</li>
    <li>Quisque euismod sapien</li>
    </ul>
    </aside>
    <!-- End Sidebar -->
    
<?php include('includes/footer.php'); ?>
