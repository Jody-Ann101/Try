<?php 
//phpinfo();
	if(isset($_POST['submit']))
	{
		$msg='ID: '.$_POST['ID'] ."\n"
			.'First Name: '.$_POST['first_name'] ."\n"
			.'Last Name: '.$_POST['last_name'] ."\n"
			.'Date: '.$_POST['Date'] ."\n"
			.'Time: '.$_POST['Time'] ."\n"
			.'Reason for consultation: '.$_POST['ROC'] ."\n"
			.'Contact email: '.$_POST['Cemail'];
		$to= $_POST['Lemail']; 
		mail($to,'Consultation Booking',$msg);
		header('location: thank-you.php');
	}
	else
	{
		header('location: index.html');
		exit(0);
	}
?>

