<?php
$connect=mysqli_connect("localhost","root","","MyDB1");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shooping cart</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.boostrapcdn.com/boostrap/4.5.2/css/boostrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">
					<h2 class="text-center">Shopping cart date</h2>
					<?php
					 $query="select * from Product";
					 $result=mysqli_query($connect,$query);
					 while($row=mysqli_fetch_array($result)){?>
					 	<div class="mid-md-4">
					 		<form method="get" action="index.php?id=<?=$row['product_id'] ?>">
					 			<h5 class='text-center'><?=$row['product_name'];?></h5>
					 			<h5 class="text-center"><?=number_format($row['cost_of_product'],2);?></h5>
					 		</form>
					 	</div>

					 <?php}



					 ?>
					</div>
					<div class='col-md-6'>
						<h2 class='text-center'>Item Selected</h2>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
?>