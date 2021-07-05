<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <!-- SweatAlert -->
  <script type="text/javascript" src="../js/sweetalert2.all.js"></script>
  <script type="text/javascript" src="../js/sweetalert2.all.min.js"></script>
</head>
<body>


<?php

	if (!empty($_POST['name']) && !empty($_POST['firstname']) && !empty($_POST['society'])&& !empty($_POST['activity'])&& !empty($_POST['contact']) && !empty($_POST['email']) && !empty($_POST['budget']) && !empty($_POST['budget']) && !empty($_POST["message"])) {

	$name = $_POST['name'];
	$firstname = $_POST['firstname'];
  $society = $_POST['society'];
  $activity = $_POST['activity'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
  $subject = $_POST['subject'];
  $budget = $_POST['budget'];
	$message = $_POST['message'];
	$objet = "Landing-page";

	include("setting_mail.php");

try {

    //Server settings
	$mail->isSMTP();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "fenitrar07@gmail.com";
	$mail->Password = 'fenitraAppleID1321@@@';
	$mail->Port = 465;
	$mail->SMTPSecure = "ssl";

	//email setting
	$mail->isHTML(true);
	$mail->setFrom($email, $name);
	$mail->AddAddress("devinbox.contact@gmail.com");
	$mail->Subject = ("$objet ($subject)");
	$mail->Body = "<b>Name : </b>".$name."<br>"."<b>Firstname : </b>".$firstname."<br>". "<b>Society : </b>".$society."<br>". "<b>Activity : </b>".$activity."<br>". "<b>Contact : </b>".$contact."<br>". "<b>Email :</b> ".$email."<br>"."<b>Subject :</b> ".$subject. "<br>"."<b>Budget :</b> ".$budget." €". "<br>"."<br><b>Message :</b> ".$message;


	} catch (Exception $e) {
	    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

	if ($mail->send()) {
		echo "<script type='text/javascript'>
               Swal.fire(
              'Message sent!',
              'Please click on the button below!',
              'success'
            );
            var btnSwalls = document.getElementsByClassName('swal2-confirm');
                    for(var i = 0; i<btnSwalls.length; i++)
                    {
                      btnSwalls[i].addEventListener('click', function(e){
                        e.preventDefault();
                        window.location = '../index.php';
                        })
                    }
            </script>";
	}else{
		echo "<script type='text/javascript'>
				Swal.fire({
				  icon: 'error',
				  title: 'Oops...An error occurred',
				  text: 'Please refresh the page and re-enter the information!'
				});
				var btnSwalls = document.getElementsByClassName('swal2-confirm');
				for(var i = 0; i<btnSwalls.length; i++)
				{
					btnSwalls[i].addEventListener('click', function(e){
						e.preventDefault();
						window.location = '../index.php';
						})
				}
			</script>";
	}

	}
 ?>
 </body>
</html>
