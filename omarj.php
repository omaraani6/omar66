
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col">
				<form method="POST">
					<h1>registration industry</h1>

					<label class="form-label">diiwangelinta shirkada biyaha</label><br>
					<input class="form-control" type="text" name="iname"><br>
					<label class="form-label">enter your distrect name</label><br>
					<input class="form-control" type="text" name="dname"><br>
					<label class="form-label">enter your commition</label><br>
					<input class="form-control" type="text" name="Cproduct"><br>
					<label class="form-label">enter your Cmobile</label><br>
					<input class="form-control" type="number" name="Cmobile"><br>
					<label class="form-label">enter your fee</label><br>
					<input class="form-control" type="number" name="Cprice"><br>
                    <label class="form-label">enter your Cdiscount</label><br>
					<input class="form-control" type="number" name="Cdiscount"><br>

					<button class="submit">register</button>
				</form>

				<?php

				$iname=$_POST['iname'];
				$dname=$_POST['dname'];
				$Cproduct=$_POST['Cproduct'];
				$Cmobile=$_POST['Cmobile'];
				$Cprice=$_POST['Cprice'];
				$Cdiscount=$_POST['Cdiscount'];

				echo "your iname is :" .$iname. "<br>";
				echo "your dname is :" .$dname. "<br>";
				echo "your Cproduct is :" .$Cproduct. "<br>";
				echo "your Cmobile is :" .$Cmobile. "<br>";
				echo "your Cprice is :" .$Cprice. "<br>";
				echo "your Cdiscount is :" .$Cdiscount. "<br>";


				?>



			</div>
		</div>
	</div>

</body>
</html>