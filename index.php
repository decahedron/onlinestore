<!DOCTYPE html>
<html>
<head>
	<title>Онлайн-магазин</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="height:1900px; width:1920px; background: linear-gradient(180deg, rgba(20,23,25,1) 0%, rgba(25,41,39,1) 35%, rgba(33,46,24,1) 100%)">
	<?php  
		$connect = mysqli_connect('127.0.0.1','root','','store');

		$query_text = 'SELECT * FROM items';

		$query = mysqli_query($connect, $query_text);

		$result = $query->fetch_assoc();

		$result1 = $query->fetch_assoc();

		$result2 = $query->fetch_assoc();

		$result3 = $query->fetch_assoc();

		$result4 = $query->fetch_assoc();

		$result5 = $query->fetch_assoc();

		$result6 = $query->fetch_assoc();
	?>
	<div class="header border-bottom border-success pb-2">
		<div class="container">
			<div class="row">
				<div class="col-2"><h2 class="text-light">Online Store</h2></div>
				<div class="col-2">
					<a href="" class="text-light">Бесплатная доставка</a>
				</div>
				<div class="col-2">
					<a href="" class="text-light">Самое лучшее качество</a>
				</div>
				<div class="col-2">
					<a href="" class="text-light">Только любимые товары</a>
				</div>
				<div class="col-2">
					<a href="admin.php" class="text-success">Админ-панель</a>
				</div>
			</div>
		</div>
	</div>
	<div class="main h-100">
		<div class="container-xl h-25">
			<div class="col-12 h-75 pt-5 pb-5" style="background: linear-gradient(90deg, rgba(0,15,36,1) 0%, rgba(9,121,110,1) 35%, rgba(99,255,0,1) 100%)">
				<div class="mx-auto col-6 h-100">
					<h1 class="text-light">bababooey</h1>
				</div>
			</div>
		</div>
		<div class="container" style="height:50%">
			<div class="col-12 h-50 mb-5 pb-5">
				<div class="row h-100">
					<div class="col-4 h-100">
						<div class="col-12 h-50">
							<?php  
								echo "<img src='" . $result['img'] . "' class='w-100'>" 
							?>
						</div>
						<div class="col-12 h-50">
							<h1 class="text-light">
								<?php  
									echo $result['title'];
								?>
							</h1><!--name -->
							<p class="text-light">
								<?php  
									echo $result['description'];
								?>
							</p><!--desc -->
							<p class="text-light">
								<?php  
									echo $result['price'];
								?>
							</p>
						</div>
					</div>
					<div class="col-4 h-100">
						<div class="col-12 h-50">
							<?php  
								echo "<img src='" . $result1['img'] . "' class='h-100'>" 
							?>
						</div>
						<div class="col-12 h-50">
							<h1 class="text-light">
								<?php  
									echo $result1['title'];
								?>
							</h1><!--name -->
							<p class="text-light">
								<?php  
									echo $result1['description'];
								?>
							</p><!--desc -->
							<p class="text-light">
								<?php  
									echo $result1['price'];
								?>
							</p>
						</div>
					</div>
					<div class="col-4 h-100">
						<div class="col-12 h-50">
							<?php  
								echo "<img src='" . $result2['img'] . "' class='h-100'>" 
							?>
						</div>
						<div class="col-12 h-50">
							<h1 class="text-light">
								<?php  
									echo $result2['title'];
								?>

							</h1><!--name -->
							<p class="text-light">
								<?php  
									echo $result2['description'];
								?>
							</p><!--desc -->
							<p class="text-light">
								<?php  
									echo $result2['price'];
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 h-50 mb-5 pb-5">
				<div class="row h-100">
					<div class="col-4 h-100">
						<div class="col-12 h-50">
							<?php  
								echo "<img src='" . $result3['img'] . "' class='w-100'>" 
							?>
						</div>
						<div class="col-12 h-50">
							<h1 class="text-light">
								<?php  
									echo $result3['title'];
								?>
							</h1><!--name -->
							<p class="text-light">
								<?php  
									echo $result3['description'];
								?>
							</p><!--desc -->
							<p class="text-light">
								<?php  
									echo $result3['price'];
								?>
							</p>
						</div>
					</div>
					<div class="col-4 h-100">
						<div class="col-12 h-50">
							<?php  
								echo "<img src='" . $result4['img'] . "' class='h-100'>" 
							?>
						</div>
						<div class="col-12 h-50">
							<h1 class="text-light">
								<?php  
									echo $result4['title'];
								?>
							</h1><!--name -->
							<p class="text-light">
								<?php  
									echo $result4['description'];
								?>
							</p><!--desc -->
							<p>
								<?php  
									echo $result4['price'];
								?>
							</p>
						</div>
					</div>
					<div class="col-4 h-100">
						<div class="col-12 h-50">
							<?php  
								echo "<img src='" . $result5['img'] . "' class='h-100'>" 
							?>
						</div>
						<div class="col-12 h-50">
							<h1 class="text-light">
								<?php  
									echo $result5['title'];
								?>

							</h1><!--name -->
							<p class="text-light">
								<?php  
									echo $result5['description'];
								?>
							</p><!--desc -->
							<p class="text-light">
								<?php  
									echo $result5['price'];
								?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

</body>
</html>