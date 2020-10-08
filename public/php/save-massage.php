<?php
function send_message( $post ) {
	if ((isset( $post['name'] ) && !empty( $post['name']))
			|| (isset( $post['email'] ) && !empty( $post['email']))
			|| (isset( $post['phone'] ) && !empty( $post['phone']))
			|| (isset( $post['massage'] ) && !empty( $post['massage'])))
	{
		$massage = '<b> ФИО: <\\b>' . $post['name'] . '<p>'
		. '<b>Email: <\b>' . $post['email'] . '<p>'
		. '<b>Номер телефона: <\\b>' . $post['phone'] . '<p>';

		if (isset( $post['name-company'] ) && !empty( $post['name-company'])) {
			$massage = $massage . '<b>Название компании: <\\b>' . $post['name-company'] . '<p>';
		}

		$massage = $massage . '<b>Сообщение: <\\b>' . $post['massage'];

		$email = 'izickovondros@gmail.com';
		echo '<script>';
		echo 'alert("Сообщение отправлено.")';
		echo '</script>';
		if (mail($email, 'Сообщение от ООО «АВИДЖИ»', "test") ) {
			echo 'message send';
		} else {
			echo 'message not send';
		}
	}
}
?>