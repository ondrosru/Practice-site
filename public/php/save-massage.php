<?php
function send_message( $post ) {
	if ((isset( $post['name'] ) && !empty( $post['name']))
			|| (isset( $post['email'] ) && !empty( $post['email']))
			|| (isset( $post['phone'] ) && !empty( $post['phone']))
			|| (isset( $post['massage'] ) && !empty( $post['massage'])))
	{
		$message .= '<html><body>';
		$massage .= '<b> ФИО: </b>' . $post['name'] . '<p>';
		$massage .= '<b>Email: </b>' . $post['email'] . '<p>';
		$massage .= '<b>Номер телефона: </b>' . $post['phone'] . '<p>';

		if (isset( $post['name-company'] ) && !empty( $post['name-company'])) {
			$massage .= '<b>Название компании: </b>' . $post['name-company'] . '<p>';
		}

		$massage .= '<b>Сообщение: </b><p>' . $post['massage'];
		$message .= "</body></html>";

		$email = 'izickovexample@gmail.com';
		$headers = "From: " . strip_tags($email) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

		
		if (mail($email, 'Сообщение от ООО «АВИДЖИ»', $massage, $headers) ) {
			echo '<script>';
			echo 'alert("Сообщение отправлено.")';
			echo '</script>';
		}
	}
}
?>