<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];
	$emailBody = "";
	$emailBody = $emailBody . "Name: " . $name . "\n";
	$emailBody = $emailBody . "Email: " . $email . "\n";;
	$emailBody = $emailBody . "Message: " . $message;

	// TODO: Send Email

	header("Location: contact.php?status=thanks");
	exit; 
} ?>

<?php 
	$pageTitle = "Contact Jaison";
	$section = "contact";
	include("include/header.php"); 
?>

<div class="section page">
	<div class="wrapper">
		<h1>Contact</hr>

			<?php if (isset ($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
				<p> Thanks for the email! I&rsquo;ll be in touch at my earliest convience.</p>
			<?php } else { ?>

				<p>I&rsquo;d Love to hear from you! Complete the form below to contact me. </p>
				<form method="post" action="contact.php">
					<table>
						<tr>
						  <th><label for="name">Name</label></th>
						  <td><input id="name" type="text" name="name"></td>
						</tr>
						<tr>
						  <th><label for="email">Email</label></th>
						  <td><input id="email" type="text" name="email"></td>
						</tr>
						<tr>
						  <th><label for="message">Message</label></th>
						  <td><textarea id="message" type="text" name="message"></textarea></td>
						</tr>
					</table>
					<input type="submit" value="Send">
				</form>
			<?php } ?>
	</div>
</div>



<?php include("include/footer.php"); ?>