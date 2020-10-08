<?php
	include_once './public/php/save-massage.php';
?>

<!doctype html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>ООО «АВИДЖИ»</title>
		<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
		<link rel="shortcut icon" href="public/images/logo.png" type="image/png">
		<link rel="stylesheet" type="text/css" href="public/css/styles.css">
		<link rel="stylesheet" type="text/css" href="public/css/contacts.css">
		<script src="public/js/menu.js"></script>
	</head>
	<body>
		<header class="site-header">
			<div class="navigation-top">
				<div class="wrap">
					<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle">
							<img class="icon icon-bars" src="public/images/menu.svg"/>
							<img class="icon icon-close" src="public/images/cancel.svg"/>Меню</button>
						<div class="menu-container">
							<ul class="menu">
								<li class="menu-item"><a href="index.html">Главная</a></li>
								<li class="menu-item"><a href="about.html">О нас</a></li>
								<li class="menu-item"><a href="products.html">Продукция</a></li>
								<li class="menu-item active"><a href="#">Контакты</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
			<div class="custom-header">
				<div class="custom-header-media">
					<div class="blackout">
					</div>
					<img src="public/images/header-image.jpg" alt="ООО «АВИДЖИ»">
				</div>
				<div class="site-branding">
					<div class="wrap">
						<div class="site-branding-text">
							<h1 class="site-title">
								<a href="index.html" rel="home">ООО «АВИДЖИ»</a>
							</h1>
							<p class="site-description">Комплектующие и запасные части для промышленного оборудования</p>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="site-content-contain">
			<div class="site-content">
				<div class="wrap">
					<div class="content-area">
						<main class="site-main">
							<header class="entry-header">
								<h1 class="entry-title">Контакты</h1>
							</header>
							<div class="entry-content">
								<p class="has-text-align-left">Давайте общаться. Свяжитесь с нами, используя контактные данные ниже, или отправьте сообщение через специальную форму.</p>
								<div class="row">
									<div class="col-md">
										<h2 class="has-text-align-left">Связаться с нами</h2>
										<div class="contact-info">
											<div class="address">Химический пер., д.1, корп.2 Санкт-Петербург, 198095</div>
											<div class="email"><a href="#">avg.piter@ya.ru</a></div>
											<div class="phone">Тел: <a href="#">+7 (921) 300 66 83</a></div>
											<div class="phone"><a href="#">+7 (931) 348 15 95</a></div>
										</div>
									</div>
									<div class="col-md">
										<h2 class="has-text-align-left">Отправить сообщение</h2>
										<?php 
											if(isset($_POST['sendMassage']))
											{
												send_message($_POST);
											}
										?>
										<form class="contact-form" action="" method="POST">
											<div class="form-group">
												<label for="name"><span class="font-weight-bold">ФИО</span> (обязятельно)</label>
												<input id="name" name="name" type="text" required>
											</div>
											<div class="form-group">
												<label for="email"><span class="font-weight-bold">Email</span> (обязятельно)</label>
												<input id="email" name="email" type="text" required>
											</div>
											<div class="form-group">
												<label for="phone"><span class="font-weight-bold">Телефон</span> (обязятельно)</label>
												<input id="phone" name="phone" type="text" required>
											</div>
											<div class="form-group">
												<label for="name-company"><span class="font-weight-bold">Наименование организации</span></label>
												<input id="name-company" name="name-company" type="text">
											</div>
											<div class="form-group">
												<label for="massage"><span class="font-weight-bold">Сообщение</span> (обязятельно)</label>
												<textarea id="massage" name="massage" rows="20" required></textarea>
											</div>
											<div class="form-group">
												<button name="sendMassage" type="submit">Отправить</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</main>
					</div>
				</div>
			</div>
			<footer class="footer"></footer>
		</div>
	</body>
</html>