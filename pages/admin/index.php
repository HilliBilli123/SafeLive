<?
include("../inc/connect.php");
$live = mysqli_query($connect, "SELECT * FROM `live`")
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Админ панель</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<header class="header">
		<div class="header__content _contein">
			<div class="header__logo header__menu"><a href="index.php">SafeLive</a></div>
			<div class="header__text header__menu"><a>Админ панель</a></div>
			<div class="header__logout header__menu"><a href="../inc/logout.php">Выход</a></div>
		</div>
	</header>
	<section class="page__body pading">
		<div class="button__pading__block flex">
			<div class="button__pading button__active" id="1">Страхование жизьни</div>
			<div class="button__pading" id="2">Страхование</div>
		</div>
		<div class="table__content active" id="1">
			<div class="table__contein flex">
				<div class="table__contein__block">Аты-жони</div>
				<div class="table__contein__block">ЖСН</div>
				<div class="table__contein__block">Жумыс орны</div>
				<div class="table__contein__block">Срок</div>
				<div class="table__contein__block">Риски</div>
				<div class="table__contein__block">Сумма</div>
			</div>
			<?
			foreach ($live as $lives) {
			?>
				<div class="table__contein flex">
					<div class="table__contein__block"><? echo $lives["fio"] ?></div>
					<div class="table__contein__block"><? echo $lives["drink"] ?></div>
					<div class="table__contein__block"><? echo $lives["staff"] ?></div>
					<div class="table__contein__block"><? echo $lives["date-start"] ?></div>
					<div class="table__contein__block"><? echo $lives["danger"] ?></div>
					<div class="table__contein__block"><? echo $lives["price"] ?></div>
				</div>
			<?
			}
			?>
		</div>
		<div class="table__content " id="2">
			<div class="table__contein flex">
				<div class="table__contein__block">Аты-жони</div>
				<div class="table__contein__block">ЖСН</div>
				<div class="table__contein__block">Жумыс орны</div>
			</div>

		</div>
	</section>
	<script src="../js/script.js"></script>
</body>

</html>