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
        <li><a href="listpinjam.php">Q-Code Warning</a></li>
        <li><a class="active" href="form-feedback.php">Kotak Suara</a></li>
    </ul>
    <div class="container">
        <div class="row">
            <h2 class="text-center">FORM KOTAK SUARA</h2>
        </div>

        <div class="row panel-body">
            <form method="POST" action="form-feedback.php">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input name="nama" class="form-control" type="text" required></td>
                    </tr>
                    <tr>
                        <td>Tim</td>
                        <td>:</td>
                        <td>
                            <select name="divisi" class="form-control" required>
                                <option selected disabled>PILIH</option>
                                <?php
                                $qmenudiv = mysqli_query($connect, "SELECT * FROM menu_divisi");
                                while ($data = mysqli_fetch_array($qmenudiv)) {
                                ?>
                                    <option value="<?= $data['divisi'] ?>"><?= ucwords($data['divisi']) ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input name="email" class="form-control" type="email"></td>
                    </tr>
                    <tr>
                        <td>Pertanyaan, Kritik & Saran </td>
                        <td>:</td>
                    </tr>
                </table>
                <textarea name="pesan" rows="4" cols="38" required></textarea>
                <br> <br>
                <button name="submit" type="submit" class="btn btn-success">SUBMIT</button>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $divisi = $_POST['divisi'];
                $email = $_POST['email'];
                $feedback = $_POST['pesan'];
                $query = mysqli_query($connect, "INSERT INTO feedback VALUES ('','$nama','$divisi','$email','$feedback')");
                echo "<h4>Pesan Berhasil Dikirim, Terima Kasih</h4>";
            }
            ?>
        </div>
    </div>
</body>

</html>