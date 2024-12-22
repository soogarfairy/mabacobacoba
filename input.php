<?php
include "koneksi/conn.php";
if (isset($_POST['submit'])) {
	//=====================================================================
	//AUTO KEY DISINI YA   
	//=====================================================================
	$autoid = mysqli_query($connect, "SELECT max(id) as id FROM transaksi_peminjam");
	$hasilautoid = mysqli_fetch_array($autoid);
	$id = $hasilautoid['id'];
	$id++;
	$plain = base_convert(microtime(false), 10, 36);
	$kode = substr($plain, 0, -6);
	$status = "ACTIVE";

	//=====================================================================
	//Peminjam (1 TABEL) 
	//=====================================================================
	if (isset($_POST['peminjam'])) {
		$peminjam = $_POST['peminjam'];
		$divisi = $_POST['divisi'];
		$tanggal = $_POST['tanggal'];
		if (empty($_POST['note'])) {
			$note = "";
		} else {
			$note = $_POST['note'];
		}
		$input = mysqli_query($connect, "INSERT INTO transaksi_peminjam VALUES ('$id','$peminjam','$divisi','$tanggal','$status','$kode','','$note')");
	}

	//=====================================================================
	//SOIO USER (1 TABEL)
	//=====================================================================
	if (isset($_POST['soio'])) {
		for ($i = 0; $i < count($_POST['soio']); $i++) {
			${"nosoio" . $i} = $_POST['soio'][$i];
			${"namauser" . $i} = $_POST['namauser'][$i];
			if (!empty(${"nosoio" . $i}) && !empty(${"namauser" . $i})) {
				$input = mysqli_query($connect, "INSERT INTO transaksi_soiouser SET kode='$kode', soio='${'nosoio' .$i}', user='${'namauser' .$i}'");
			}
		}
	}

	//=====================================================================
	//TOOLS (1 TABEL) 
	//=====================================================================
	if (isset($_POST['opm'])) {
		for ($i = 0; $i < count($_POST['opm']); $i++) {
			${"opm" . $i} = $_POST['opm'][$i];
			if (!empty(${"opm" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"opm" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'opm' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${'opm' .$i}'");
				}
			}
		}
	}
	if (isset($_POST['console'])) {
		for ($i = 0; $i < count($_POST['console']); $i++) {
			${"console" . $i} = $_POST['console'][$i];
			if (!empty(${"console" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"console" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'console' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${'console' .$i}'");
				}
			}
		}
	}
	if (isset($_POST['crimping'])) {
		for ($i = 0; $i < count($_POST['crimping']); $i++) {
			${"crimping" . $i} = $_POST['crimping'][$i];
			if (!empty(${"crimping" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"crimping" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'crimping' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${'crimping' .$i}'");
				}
			}
		}
	}
	if (isset($_POST['printlabel'])) {
		for ($i = 0; $i < count($_POST['printlabel']); $i++) {
			${"printlabel" . $i} = $_POST['printlabel'][$i];
			if (!empty(${"printlabel" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"printlabel" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'printlabel' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${'printlabel' .$i}'");
				}
			}
		}
	}
	if (isset($_POST['laser'])) {
		for ($i = 0; $i < count($_POST['laser']); $i++) {
			${"laser" . $i} = $_POST['laser'][$i];
			if (!empty(${"laser" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"laser" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'laser' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"laser" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['bertest'])) {
		for ($i = 0; $i < count($_POST['bertest']); $i++) {
			${"bertest" . $i} = $_POST['bertest'][$i];
			if (!empty(${"bertest" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"bertest" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'bertest' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"bertest" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['walkingmeter'])) {
		for ($i = 0; $i < count($_POST['walkingmeter']); $i++) {
			${"walkingmeter" . $i} = $_POST['walkingmeter'][$i];
			if (!empty(${"walkingmeter" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"walkingmeter" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'walkingmeter' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"walkingmeter" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['teropong'])) {
		for ($i = 0; $i < count($_POST['teropong']); $i++) {
			${"teropong" . $i} = $_POST['teropong'][$i];
			if (!empty(${"teropong" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"teropong" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'teropong' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"teropong" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolkit'])) {
		for ($i = 0; $i < count($_POST['toolkit']); $i++) {
			${"toolkit" . $i} = $_POST['toolkit'][$i];
			if (!empty(${"toolkit" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolkit" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolkit' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"toolkit" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['helm'])) {
		for ($i = 0; $i < count($_POST['helm']); $i++) {
			${"helm" . $i} = $_POST['helm'][$i];
			if (!empty(${"helm" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"helm" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'helm' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"helm" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['garmin'])) {
		for ($i = 0; $i < count($_POST['garmin']); $i++) {
			${"garmin" . $i} = $_POST['garmin'][$i];
			if (!empty(${"garmin" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"garmin" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'garmin' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"garmin" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['tangga'])) {
		for ($i = 0; $i < count($_POST['tangga']); $i++) {
			${"tangga" . $i} = $_POST['tangga'][$i];
			if (!empty(${"tangga" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"tangga" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'tangga' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"tangga" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolwp'])) {
		for ($i = 0; $i < count($_POST['toolwp']); $i++) {
			${"toolwp" . $i} = $_POST['toolwp'][$i];
			if (!empty(${"toolwp" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolwp" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolwp' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"toolwp" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolfoc'])) {
		for ($i = 0; $i < count($_POST['toolfoc']); $i++) {
			${"toolfoc" . $i} = $_POST['toolfoc'][$i];
			if (!empty(${"toolfoc" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolfoc" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolfoc' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"toolfoc" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolpayung'])) {
		for ($i = 0; $i < count($_POST['toolpayung']); $i++) {
			${"toolpayung" . $i} = $_POST['toolpayung'][$i];
			if (!empty(${"toolpayung" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolpayung" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolpayung' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"toolpayung" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolaklis'])) {
		for ($i = 0; $i < count($_POST['toolaklis']); $i++) {
			${"toolaklis" . $i} = $_POST['toolaklis'][$i];
			if (!empty(${"toolaklis" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolaklis" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolaklis' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"toolaklis" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolaklik'])) {
		for ($i = 0; $i < count($_POST['toolaklik']); $i++) {
			${"toolaklik" . $i} = $_POST['toolaklik'][$i];
			if (!empty(${"toolaklik" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolaklik" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolaklik' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"toolaklik" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolswitchtest'])) {
		for ($i = 0; $i < count($_POST['toolswitchtest']); $i++) {
			${"toolswitchtest" . $i} = $_POST['toolswitchtest'][$i];
			if (!empty(${"toolswitchtest" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolswitchtest" .$i}'");
				$jumlahtool = mysqli_fetch_row($query);
				if ($jumlahtool['0'] == 1) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolswitchtest' .$i}'");
					$update = mysqli_query($connect, "UPDATE tool_validator SET jumlah='0' WHERE tool='${"toolswitchtest" .$i}'");
				}
			}
		}
	}
	if (isset($_POST['toolothermanual'])) {
		for ($i = 0; $i < count($_POST['toolothermanual']); $i++) {
			${"toolothermanual" . $i} = $_POST['toolothermanual'][$i];
			if (!empty(${"toolothermanual" . $i})) {
				$input = mysqli_query($connect, "INSERT INTO transaksi_tool SET kode='$kode', tool='${'toolothermanual' .$i}'");
			}
		}
	}

	//=====================================================================
	//MATERIAL PATCHCORE SM
	//=====================================================================
	if (isset($_POST['pcsinglemode'])) {
		for ($i = 0; $i < count($_POST['pcsinglemode']); $i++) {
			${"pcsinglemode" . $i} = $_POST['pcsinglemode'][$i];
			${"pcsinglemodejumlah" . $i} = $_POST['pcsinglemodejumlah'][$i];
			if (!empty(${"pcsinglemode" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah,tipe FROM material_validator WHERE material='${"pcsinglemode" .$i}' AND tipe='patchcore_singlemode'");
				$array = mysqli_fetch_array($query);
				if ($array['jumlah'] > 0) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_material SET kode='$kode', material='${'pcsinglemode' .$i}', jumlah='${"pcsinglemodejumlah" .$i}', tipe='$array[tipe]'");
					$update = mysqli_query($connect, "UPDATE material_validator SET jumlah=jumlah-'${"pcsinglemodejumlah" .$i}' WHERE material='${"pcsinglemode" .$i}' AND tipe='$array[tipe]'");
				}
			}
		}
	}

	//=====================================================================
	//MATERIAL PATCHCORE MM
	//=====================================================================
	if (isset($_POST['pcmultimode'])) {
		for ($i = 0; $i < count($_POST['pcmultimode']); $i++) {
			${"pcmultimode" . $i} = $_POST['pcmultimode'][$i];
			${"pcmultimodejumlah" . $i} = $_POST['pcmultimodejumlah'][$i];
			if (!empty(${"pcmultimode" . $i})) {
				$query = mysqli_query($connect, "SELECT jumlah,tipe FROM material_validator WHERE material='${"pcmultimode" .$i}' AND tipe='patchcore_multimode'");
				$array = mysqli_fetch_array($query);
				if ($array['jumlah'] > 0) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_material SET kode='$kode', material='${'pcmultimode' .$i}', jumlah='${"pcmultimodejumlah" .$i}', tipe='$array[tipe]'");
					$update = mysqli_query($connect, "UPDATE material_validator SET jumlah=jumlah-'${"pcmultimodejumlah" .$i}' WHERE material='${"pcmultimode" .$i}' AND tipe='$array[tipe]'");
				}
			}
		}
	}

	//=====================================================================
	//MATERIAL FOC
	//=====================================================================
	if (isset($_POST['foc'])) {
		for ($i = 0; $i < count($_POST['foc']); $i++) {
			${"foc" . $i} = $_POST['foc'][$i];
			${"focjumlah" . $i} = $_POST['focjumlah'][$i];
			if (!empty(${"foc" . $i})) {
				$query = mysqli_query($connect, "SELECT tipe,jumlah FROM material_validator WHERE material='${"foc" .$i}'");
				$array = mysqli_fetch_array($query);
				if ($array['jumlah'] > 0) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_material SET kode='$kode', material='${'foc' .$i}', jumlah='${"focjumlah" .$i}',tipe='$array[tipe]'");
					$update = mysqli_query($connect, "UPDATE material_validator SET jumlah=jumlah-'${"focjumlah" .$i}' WHERE material='${"foc" .$i}' AND tipe='$array[tipe]'");
				}
			}
		}
	}

	//=====================================================================
	//MATERIAL ftth
	//=====================================================================
	if (isset($_POST['ftth'])) {
		for ($i = 0; $i < count($_POST['ftth']); $i++) {
			${"ftth" . $i} = $_POST['ftth'][$i];
			${"ftthjumlah" . $i} = $_POST['ftthjumlah'][$i];
			if (!empty(${"ftth" . $i})) {
				$query = mysqli_query($connect, "SELECT tipe,jumlah FROM material_validator WHERE material='${"ftth" .$i}'");
				$array = mysqli_fetch_array($query);
				if ($array['jumlah'] > 0) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_material SET kode='$kode', material='${'ftth' .$i}', jumlah='${"ftthjumlah" .$i}', tipe='$array[tipe]'");
					$update = mysqli_query($connect, "UPDATE material_validator SET jumlah=jumlah-'${"ftthjumlah" .$i}' WHERE material='${"ftth" .$i}' AND tipe='$array[tipe]'");
				}
			}
		}
	}

	//=====================================================================
	//MATERIAL fot
	//=====================================================================
	if (isset($_POST['fot'])) {
		for ($i = 0; $i < count($_POST['fot']); $i++) {
			${"fot" . $i} = $_POST['fot'][$i];
			${"fotjumlah" . $i} = $_POST['fotjumlah'][$i];
			if (!empty(${"fot" . $i})) {
				$query = mysqli_query($connect, "SELECT tipe,jumlah FROM material_validator WHERE material='${"fot" .$i}'");
				$array = mysqli_fetch_array($query);
				if ($array['jumlah'] > 0) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_material SET kode='$kode', material='${'fot' .$i}', jumlah='${"fotjumlah" .$i}',tipe='$array[tipe]'");
					$update = mysqli_query($connect, "UPDATE material_validator SET jumlah=jumlah-'${"fotjumlah" .$i}' WHERE material='${"fot" .$i}' AND tipe='$array[tipe]'");
				}
			}
		}
	}

	//=====================================================================
	//Pengadaan Material
	//=====================================================================
	if (isset($_POST['pp'])) {
		for ($i = 0; $i < count($_POST['pp']); $i++) {
			${"pp" . $i} = $_POST['pp'][$i];
			${"ppjumlah" . $i} = $_POST['ppjumlah'][$i];
			if (!empty(${"pp" . $i})) {
				$query = mysqli_query($connect, "SELECT * FROM pengadaan_validator WHERE no_sn='${"pp" .$i}'");
				$array = mysqli_fetch_array($query);
				if ($array['jumlah'] > 0) {
					$input = mysqli_query($connect, "INSERT INTO transaksi_pengadaan VALUES ('$kode','$array[nama_perangkat]','$array[no_spr]','$array[no_sn]','${"ppjumlah" .$i}')");
					$update = mysqli_query($connect, "UPDATE pengadaan_validator SET jumlah=jumlah-'${"ppjumlah" .$i}' WHERE no_sn='${"pp" .$i}'");
				}
			}
		}
	}
	//MATERIAL OTHER
	if (isset($_POST['materialother'])) {
		$materialother = $_POST['materialother'];
		$materialotherjumlah = $_POST['materialotherjumlah'];
		if (!empty($materialother)) {
			$input = mysqli_query($connect, "INSERT INTO transaksi_material SET kode='$kode', material='$materialother', jumlah='$materialotherjumlah'");
		}
	}
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<title>Pentol Teripang</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->
		<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
	</head>

	<body>

		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">

				<div class="wrap-login100 p-l-110 p-r-110 p-t-42 p-b-33">
					<span class="login100-form p-b-20">
						<center>/.admin: Terimakasih Telah Menggunakkan Aplikasi ini
							<br>secara bijak.
							<br>Silahkan simpan kode peminjaman dibawah untuk pengembalian barang.
						</center>
					</span>
					<br>
					<span class=" p-b-20">
						<center><strong><?= $kode ?></strong></center>
					</span>
					<br>
					<span class=" p-b-20">
						<center><a href="index.html">Kembali Ke Awal</a></center>
					</span>
				</div>
			</div>
		</div>


		<div id="dropDownSelect1"></div>

		<!--===============================================================================================-->
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/animsition/js/animsition.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/daterangepicker/moment.min.js"></script>
		<script src="vendor/daterangepicker/daterangepicker.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/countdowntime/countdowntime.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>

	</html>
<?php
}
?>