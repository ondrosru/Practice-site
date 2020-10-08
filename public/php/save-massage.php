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

	$sql_server = 'avgpiter.beget.tech';
	$sql_user = 'avgpiter_iji';
	$sql_pwd = 'AaBb_2';
	$sql_db = 'avgpiter_iji';

	$link = mysqli_connect($sql_server, $sql_user, $sql_pwd, $sql_db) or die("Ошибка: " . mysqli_error($link));
	$query ="INSERT INTO `user-massage`(`name`, `email`, `phone`, `company`, `massage`) VALUES ('$name', '$email', '$phone', $company, '$massage')";
	$insert = mysqli_query($link, $query) or die("Ошибка: " . mysqli_error($link));

	mysqli_close($link);
	header( 'location: ../../contacts.html' );
?>