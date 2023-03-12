<!DOCTYPE html>
<html>
<head>
	<title>Perhitungan Iuran BPJS Ketenagakerjaan Program JHT</title>
    <H1>Perhitungan BPJS Ketenagakerjaan</H1>
</head>
<body>
<?php
	date_default_timezone_set("Asia/Jakarta");
    echo date("l d-M-Y");
    echo "<br>";
    echo date("H:i:s");
?>
	

</html>


<style>
	body {
	font-family: Arial, sans-serif;
    background-image: url("assest/711945.webp");
}

.container {
	max-width: 800px;
	margin: 0 auto;
	padding: 20px;
}


h1 {
	text-align: center;
	margin-bottom: 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

h2 {
	margin-top: 40px;
	margin-bottom: 10px;
}

form {
	border: 1px solid #ccc;
	padding: 20px;
	margin-bottom: 40px;
}

label {
	display: block;
	margin-bottom: 10px;
}

input[type="number"] {
	padding: 5px
}

footer {
    background-color: bisque;
    padding: 0.5px;
    text-align: center;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
</style>
	<form method="post">
	<h3> Menghitung JHT (Jaminan Hari Tua)</h3>
		<label>Upah Pekerja</label>
		<input type="number" name="gaji" required>
		<button type="submit">Hitung</button>
	</form>

	<?php
	if (isset($_POST['gaji'])) {
		$gaji = $_POST['gaji'];
		$iuran_jht = $gaji * 0.057;
		$iuran_jht_karyawan = $gaji * 0.02;
		$iuran_jht_perusahaan = $gaji * 0.037;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JHT: Rp" . number_format($iuran_jht, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JHT yang dibayar oleh karyawan: Rp" . number_format($iuran_jht_karyawan, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JHT yang dibayar oleh perusahaan: Rp" . number_format($iuran_jht_perusahaan, 0, ',', '.') . " per bulan<br>";
	}
    ?>

    <form method="post">
    <h3>Menghitung JKK (Jaminan Kecelakaan Kerja)</h3>
		<label>Upah Pekerja:</label>
		<input type="number" name="upah" required>
		<br>
		<label>Tingkat Risiko:</label><br>
		<select name="risiko" required>
			<option value="">Pilih Tingkat Risiko</option>
			<option value="0.0024">Sangat Rendah (0,24%)</option>
			<option value="0.0054">Rendah (0,54%)</option>
			<option value="0.0089">Sedang (0,89%)</option>
			<option value="0.0127">Tinggi (1,27%)</op.tion>
			<option value="0.0174">Sangat Tinggi (1,74%)</option>
		</select>
		<br>
		<button type="submit">Hitung</button>
	</form>

    <?php
	if (isset($_POST['upah']) && isset($_POST['risiko'])) {
		$upah = $_POST['upah'];
		$persen = $_POST['risiko'];
		$iuran_jkk = $upah * $persen;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JKK: Rp" . number_format($iuran_jkk, 0, ',', '.') . " per bulan<br>";
	}
	?>

<form method="post">
<h3>Menghitung JKM (Jaminan Kematian)</h3>
		<label>Upah Pekerja:</label>
		<input type="number" name="upa" required>
		<br>
		<button type="submit">Hitung</button>
	</form>

	<?php
	if (isset($_POST['upa'])) {
		$upa = $_POST['upa'];
		$iuran_jk = $upa * 0.003;

        echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JK yang dibayar oleh perusahaan: Rp" . number_format($iuran_jk, 0, ',', '.') . " per bulan<br>";
	}
	?>

<form method="post">
<h3>Menghitung JP (Jaminan Pensiun)</h3>
		<label>Upah Pekerja :</label>
		<input type="number" name="up" required>
		<br>
		<button type="submit">Hitung</button>
	</form>

	<?php
	if (isset($_POST['up'])) {
		$up = $_POST['up'];
		$upah_max = 8754600; // maksimum upah yang diperhitungkan
		if ($up > $upah_max) {
			$up = $upah_max;
		}
        $iuran_jp = $up * 0.03;
		$iuran_jp_perusahaan = $up * 0.02;
		$iuran_jp_pekerja = $up * 0.01;

		echo "<br><strong>Hasil perhitungan:</strong><br>";
		echo "Iuran JP yang dibayar oleh perusahaan: Rp" . number_format($iuran_jp_perusahaan, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JP yang dibayar oleh pegawai: Rp" . number_format($iuran_jp_pekerja, 0, ',', '.') . " per bulan<br>";
		echo "Iuran JP yang harus dibayar: Rp" . number_format($iuran_jp, 0, ',', '.') . " per bulan<br>";
	}
	?>
    <footer>
        <p> Design by Wahyu Bagas Dwi Prasetyo </p>
    </footer>
</body>
</html>