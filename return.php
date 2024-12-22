<?php
include "koneksi/conn.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Return</title>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <link href="gayain.css" rel="stylesheet" type="text/css">
    <script src="https:/netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="https:/code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="dinamisasi.js"></script>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #f1f1f1;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: #000;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a.active {
            background-color: #4CAF50;
            color: white;
        }

        li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }

        #head {
            border: 1px solid black;
        }

        th,
        td {
            padding: 5px;
        }
    </style>
</head>

<body>
    <ul>
        <li><a href="peminjaman.php">Peminjaman Barang</a></li>
        <li><a class="active" href="return.php">Pengembalian Barang</a></li>
        <li><a href="listpinjam.php">Q-Code Warning</a></li>
        <li><a href="form-feedback.php">Kotak Suara</a></li>
    </ul>
    <div class="container">
        <h2 class="text-center">PENGEMBALIAN BARANG</h2>
        <form action="return.php" method="POST">
            <h4>Silahkan Masukkan Kode Pengembalian Anda</h4>
            <input type="text" name="kode" placeholder="Kode Peminjaman" required>
            <br>
            <button type="submit" name="cekdata">CEK DATA</button>
        </form>
        <?php
        if (isset($_POST['cekdata'])) {
            $returnkode = $_POST['kode'];
            $querypeminjam = mysqli_query($connect, "SELECT * FROM transaksi_peminjam WHERE kode='$returnkode' AND status='ACTIVE'");
            $cekpeminjam = mysqli_num_rows($querypeminjam);
            if ($cekpeminjam > 0) {
        ?>
                <br>
                <table id="head">
                    <tr>
                        <td>Nama</td>
                        <td>Divisi</td>
                        <td>Tanggal</td>
                        <td>Status</td>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_array($querypeminjam)) {
                    ?>
                        <tr>
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['divisi'] ?></td>
                            <td><?= $data['tanggal'] ?></td>
                            <td><?= $data['status'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                $querysoio = mysqli_query($connect, "SELECT soio,user FROM transaksi_soiouser WHERE kode='$returnkode'");
                ?>
                <br>
                <table id="head">
                    <tr>
                        <td>SO/IO</td>
                        <td>USER</td>
                    </tr>
                    <?php
                    while ($data = mysqli_fetch_array($querysoio)) {
                    ?>
                        <tr>
                            <td><?= $data['soio'] ?></td>
                            <td><?= $data['user'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                $querytool = mysqli_query($connect, "SELECT tool FROM transaksi_tool WHERE kode='$returnkode'");
                ?>
                <form method="POST" action="return.php">
                    <br>
                    <table id="head">
                        <tr>
                            <td>Tools</td>
                        </tr>
                        <?php
                        while ($data = mysqli_fetch_array($querytool)) {
                        ?>
                            <tr>
                                <td><input name="tool[]" type="text" value="<?= $data['tool'] ?>" hidden><?= $data['tool'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    $querymaterial = mysqli_query($connect, "SELECT * FROM transaksi_material WHERE kode='$returnkode'");                ?>
                    <br>
                    <table id="head">
                        <tr>
                            <td>Material</td>
                            <td>Tipe</td>
                            <td>Jumlah Yang Dikembalikan</td>
                        </tr>
                        <?php
                        while ($data = mysqli_fetch_array($querymaterial)) {
                        ?>
                            <input name="material[]" type="text" value="<?= $data['material'] ?>" hidden>
                            <input name="tipe[]" type="text" value="<?= $data['tipe'] ?>" hidden>
                            <tr>
                                <td><?= $data['material'] ?></td>
                                <td><?= $data['tipe'] ?></td>
                                <td><input name="jumlah[]" type="number" value="<?= $data['jumlah'] ?>" max="<?= $data['jumlah'] ?>"></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    $querypengadaan = mysqli_query($connect, "SELECT * FROM transaksi_pengadaan WHERE kode='$returnkode'");                ?>
                    <br>
                    <table id="head">
                        <tr>
                            <th>Perangkat</th>
                            <th>No SPR</th>
                            <th>No SN</th>
                            <th>Jumlah Yang Dikembalikan</th>
                        </tr>
                        <?php
                        while ($data = mysqli_fetch_array($querypengadaan)) {
                        ?>
                            <input name="pengadaan[]" type="text" value="<?= $data['nosn'] ?>" hidden>
                            <tr>
                                <td><?= $data['perangkat'] ?></td>
                                <td><?= $data['nospr'] ?></td>
                                <td><?= $data['nosn'] ?></td>
                                <td><input name="jumlah[]" type="number" value="<?= $data['jumlah'] ?>" max="<?= $data['jumlah'] ?>"></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <?php
                    $ceknote = mysqli_query($connect, "SELECT note FROM transaksi_peminjam WHERE kode='$returnkode' AND status='ACTIVE'");
                    $note = mysqli_fetch_array($ceknote);
                    ?>
                    <br>
                    <table id="head">
                        <tr>
                            <td>Note Material</td>
                        </tr>
                        <tr>
                            <td><textarea name="note"><?= $note['note'] ?></textarea></td>
                        </tr>
                    </table>
                    <br>
                    <select name="penerima" required>
                        <option value="">--Please choose an option--</option>
                        <?php
                        $qmenupenerima = mysqli_query($connect, "SELECT * FROM menu_penerima");
                        while ($data = mysqli_fetch_array($qmenupenerima)) {
                        ?>
                            <option value="<?= $data['penerima'] ?>"><?= ucwords($data['penerima']) ?></option>
                        <?php
                        }
                        ?>
                    </select>
                    <input type="text" name="kode" value="<?= $returnkode ?>" hidden>
                    <button name="submitreturn" type="submit">SUBMIT</button>
                </form>
        <?php
            } else {
                echo "DATA TIDAK DITEMUKAN";
            }
        }
        if (isset($_POST['submitreturn'])) {
            if (isset($_POST['kode'])) {
                $kodeupdate = $_POST['kode'];
                $penerima = $_POST['penerima'];
                $note = $_POST['note'];
                $updatestatus = mysqli_query($connect, "UPDATE transaksi_peminjam SET status='COMPLETED', penerima='$penerima', note='$note' WHERE kode='$kodeupdate'");

                if (isset($_POST['tool'])) {
                    for ($i = 0; $i < count($_POST['tool']); $i++) {
                        ${"tool" . $i} = $_POST['tool'][$i];
                        if (!empty(${"tool" . $i})) {
                            $query = mysqli_query($connect, "UPDATE tool_validator SET jumlah=1 WHERE tool='${"tool" .$i}'");
                        }
                    }
                }
                if (isset($_POST['material'])) {
                    for ($i = 0; $i < count($_POST['material']); $i++) {
                        ${"material" . $i} = $_POST['material'][$i];
                        ${"tipe" . $i} = $_POST['tipe'][$i];
                        ${"jumlah" . $i} = $_POST['jumlah'][$i];
                        if (!empty(${"material" . $i})) {
                            $query = mysqli_query($connect, "UPDATE material_validator SET jumlah=jumlah+'${"jumlah" .$i}' WHERE material='${"material" .$i}' AND tipe='${"tipe" .$i}'");
                            $query1 = mysqli_query($connect, "UPDATE transaksi_material SET jumlah=jumlah-'${"jumlah" .$i}' WHERE kode='$kodeupdate' AND material='${"material" .$i}' AND tipe='${"tipe" .$i}'");
                        }
                    }
                }
                if (isset($_POST['pengadaan'])) {
                    for ($i = 0; $i < count($_POST['pengadaan']); $i++) {
                        ${"nosn" . $i} = $_POST['pengadaan'][$i];
                        ${"jumlah" . $i} = $_POST['jumlah'][$i];
                        if (!empty(${"nosn" . $i})) {
                            $query = mysqli_query($connect, "UPDATE pengadaan_validator SET jumlah=jumlah+'${"jumlah" .$i}' WHERE no_sn='${"nosn" .$i}'");
                            $query1 = mysqli_query($connect, "UPDATE transaksi_pengadaan SET jumlah=jumlah-'${"jumlah" .$i}' WHERE kode='$kodeupdate'");
                        }
                    }
                }
            }
            echo "<h2 align='center'>Terimakasih Telah Mengembalikan Data</h2>";
        }
        ?>
    </div>
</body>

</html>