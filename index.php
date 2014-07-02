<?php require_once('class/jne_weight_calculate.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Fungsi pembulatan berat JNE by Dhanang Pratama</title>
</head>
<body>

<div id="container" class="container">
	
	<h1>Fungsi untuk penghitungan pembulatan berat JNE</h1>

	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name="weightForm">

		<p>
		<label for="weight">Masukkan berat:</label>
		<input type="text" id="weight" name="weight" value="<?php echo (isset($_POST['weight'])) ? htmlentities($_POST['weight']) : ''; ?>" placeholder="Dalam Kg. Misal: 1, 0.3, 1.6, dst" />

		<input type="hidden" name="process" value="calculate" />
		<button type="submit">Hitung!</button>
		</p>

	</form>

	<?php 

		if (isset($_POST['process']) && $_POST['process'] == 'calculate') {

			if ( !empty($_POST['weight']) ) {

				$weight = htmlentities($_POST['weight']);

				$weightCalculate = $jneWeight->weightCount($weight);

				echo '<p>Berat barang anda masuk ongkir <strong>' . $weightCalculate . '</strong> Kg</p>';

			} else {

				echo '<p>Field input belum diisi.</p>';

			}
		}
	?>

</div> <!-- #container -->

</body>
</html>