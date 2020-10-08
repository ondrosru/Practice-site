<?php
	if ((isset( $_POST['name'] ) && !empty( $_POST['name']))
			|| (isset( $_POST['email'] ) && !empty( $_POST['email']))
			|| (isset( $_POST['phone'] ) && !empty( $_POST['phone']))
			|| (isset( $_POST['massage'] ) && !empty( $_POST['massage'])))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$massage = $_POST['massage'];
	} else {
		header( 'location: ../../contacts.html' );
		exit();
	}

	if (isset( $_POST['name-company'] ) && !empty( $_POST['name-company']))
	{
		$company = "'" . $_POST['name-company'] . "'";
	} else {
		$company = "NULL";
	}
    $message = "ФИО: " . $name . "\n" . "email: " . $email . "\n" . "Телефон: " . $phone .  "\n";
    if($company != "NULL")
    {
        $message = $message . "Наименование организации: " . $company . "\n";
    }
    $message = $message . "Сообщение: " . $massage;
	$subject = "";

    mail($email, $subject, $message);

    header( 'location: ../../contacts.html' );
?>