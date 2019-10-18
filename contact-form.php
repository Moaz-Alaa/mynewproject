<?php

$name =""; // Sender Name
$email =""; // Sender's email ID
$message =""; // Sender's Message

if (!isset($technologies)){
    $technologies="PHP"; 
}

$nameError ="";
$emailError ="";
$technologiesError ="";
$messageError ="";
$fileError ="";
$errors = -1;
$successMessage ="";

if(isset($_POST['submit'])) { // Checking null values in message.

    $errors = 0;
	$name = $_POST["name"]; // Sender Name
	$email = $_POST["email"]; // Sender's email ID
	$message = $_POST["message"]; // Sender's Message
	$technologies = $_POST["technologies"];
	
	if (empty($_POST["name"])){
		$nameError = "Name is required";
		$errors = 1;
	}
	if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
	{
		$emailError = "Email is not valid";
		$errors = 1;
	}
	if (!isset($_POST["technologies"])){
		$technologiesError = "Select one technology";
		$errors = 1;
	}
	if (empty($_POST["message"])){
		$messageError = "Message is required";
		$errors = 1;
	}
}	


?>

<?php



if($errors == 0){
	$successMessage ="<div style=\"background-color:gray; margin-top: 20px; padding:15px\">Form Submitted successfully...</div>"; // IF no errors
} 
elseif ($errors == -1){
    //do nothing
}
else{
    $successMessage ="<div style=\"color:red; margin-top: 20px; padding:15px\">Error number $errors occured</div>";
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>PHP Contact Form with Validation</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <div class="container">
        <div class="main">
            <h2>PHP Contact Form with Validation</h2>
            <form method="post" action="contact-form.php" enctype="multipart/form-data">
                <label>Name :</label>
                <input class="input" type="text" name="name" value="<?php echo $name; ?>">
                <div class="error">
                    <?php echo $nameError;?>
                </div>
                <label>Email :</label>
                <input class="input" type="text" name="email" value="<?php echo $email; ?>">
                <div class="error">
                    <?php echo $emailError;?>
                </div>
                <label>Technologies :</label>
                <div>
                    <input type="radio" name="technologies" value="PHP" <?php if (isset($technologies) && $technologies=="PHP" ) echo "checked" ; ?> > PHP
                    <input type="radio" name="technologies" value="HTML" <?php if (isset($technologies) && $technologies=="HTML" ) echo "checked" ; ?> > HTML
                    <input type="radio" name="technologies" value="PYTHON" <?php if (isset($technologies) && $technologies=="PYTHON" ) echo "checked" ; ?> > Python
                </div>
                <div class="error">
                    <?php echo $technologiesError;?>
                </div>
                <label>Message :</label>
                <textarea name="message" val="">
                        <?php echo $message; ?>
                    </textarea>
                <div class="error">
                    <?php echo $messageError;?>
                </div>

                <input class="submit" type="submit" name="submit" value="Submit">
                <br>

                <?php echo $successMessage;?>
                <?php echo $name; ?>

            </form>
        </div>
    </div>
</body>

</html>
