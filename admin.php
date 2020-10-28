<!DOCTYPE html>
<html>
<head>
	<title>Админ-панель</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
</head>
<body style="height:1900px; width:1920px; background: linear-gradient(180deg, rgba(20,23,25,1) 0%, rgba(25,41,39,1) 35%, rgba(33,46,24,1) 100%)">
	<h1 class="text-light">Добавить новый товар</h1>
	<div class="container h-25">
		<div class="col-6 h-100">
			<form action="insert.php" method="GET">
				<input type="" class="form-control" name="title" placeholder="Название товара">
				<input type="" class="form-control" name="img" placeholder="Изображение товара">
				<textarea class="form-control" name="description" placeholder="Описание товара"></textarea>
				<input type="" class="form-control" name="price" placeholder="Цена товара">
				<button class="btn btn-success">Добавить</button>
			</form>
		</div>
	</div>
	<div class="container h-25">
		<div class="col-6 h-100">
			<form action="delete.php" method="GET">
				<input type="" class="form-control" name="id" placeholder="Номер товара">
				<button class="btn btn-danger">Удалить</button>
			</form>
		</div>
	</div>
</form>
</body>
</html>
