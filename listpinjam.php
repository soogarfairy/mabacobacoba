<?php
include "koneksi/conn.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Form</title>
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
    </style>
</head>

<body>
    <ul>
        <li><a href="peminjaman.php">Peminjaman Barang</a></li>
        <li><a href="return.php">Pengembalian Barang</a></li>
        <li><a class="active" href="listpinjam.php">Q-Code Warning</a></li>
        <li><a href="form-feedback.php">Kotak Suara</a></li>
    </ul>
    <div class="container">
        <h2 align="center">LIST Q-Code Warning</h2>
        <h4 align="center">List dibawah ini merupakan list yang sudah mencapai 2 hari/lebih waktu pinjam</h4>
        <br><br>
        <?php
        $query = mysqli_query($connect, "SELECT *, abs(DATEDIFF(tanggal, CURDATE())) AS selisih FROM transaksi_peminjam WHERE status='ACTIVE' ORDER BY selisih DESC");
        $cek = mysqli_num_rows($query);
        if ($cek > 0) {
            while ($data = mysqli_fetch_array($query)) {
                if ($data['selisih'] >= 2) {
                    $soio = mysqli_query($connect, "SELECT * FROM transaksi_soiouser WHERE kode='$data[kode]'");
                    $tool = mysqli_query($connect, "SELECT * FROM transaksi_tool WHERE kode='$data[kode]'");
                    $material = mysqli_query($connect, "SELECT * FROM transaksi_material WHERE kode='$data[kode]'");
                    $pengadaan = mysqli_query($connect, "SELECT * FROM transaksi_pengadaan WHERE kode='$data[kode]'");
        ?>
                    <div style="overflow:scroll; width:850px; height:250px;">
                        <p style="color: red;"><strong>Lama Waktu Pinjam <?= $data['selisih'] ?> Hari</strong></p>
                        <table border="1">
                            <tr>
                                <th>Nama</th>
                                <th>Tim</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['divisi'] ?></td>
                                <td><?= $data['tanggal'] ?></td>
                                <td><?= $data['status'] ?></td>
                            </tr>

                            <tr>
                                <th>SO/IO</th>
                                <th>User</th>
                            </tr>
                            <?php
                            while ($data1 = mysqli_fetch_array($soio)) {
                            ?>
                                <tr>
                                    <td><?= $data1['soio'] ?></td>
                                    <td><?= $data1['user'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>

                            <tr>
                                <th>Tool</th>
                            </tr>
                            <tr>
                                <?php
                                while ($data2 = mysqli_fetch_array($tool)) {
                                ?>
                                    <td><?= $data2['tool'] ?></td>
                                <?php
                                }
                                ?>
                            </tr>

                            <tr>
                                <th>Tipe</th>
                                <th>Material</th>
                                <th>Jumlah</th>
                            </tr>
                            <?php
                            while ($data4 = mysqli_fetch_array($material)) {
                            ?>
                                <tr>
                                    <td><?= $data4['tipe'] ?></td>
                                    <td><?= $data4['material'] ?></td>
                                    <td><?= $data4['jumlah'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>

                            <tr>
                                <th>Perangkat</th>
                                <th>No SPR</th>
                                <th>No SN</th>
                                <th>Jumlah</th>
                            </tr>
                            <?php
                            while ($data5 = mysqli_fetch_array($pengadaan)) {
                            ?>
                                <tr>
                                    <td><?= $data5['perangkat'] ?></td>
                                    <td><?= $data5['nospr'] ?></td>
                                    <td><?= $data5['nosn'] ?></td>
                                    <td><?= $data5['jumlah'] ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <th>Note</th>
                            </tr>
                            <tr>
                                <td><?= $data['note'] ?></td>
                            </tr>
                        </table>
                    </div>
        <?php
                }
            }
        }
        ?>
    </div>
</body>

</html>