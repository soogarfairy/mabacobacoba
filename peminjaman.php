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
        <li><a class="active" href="peminjaman.php">Peminjaman Barang</a></li>
        <li><a href="return.php">Pengembalian Barang</a></li>
        <li><a href="listpinjam.php">Q-Code Warning</a></li>
        <li><a href="form-feedback.php">Kotak Suara</a></li>
    </ul>
    <div class="container">
        <div class="row">
            <h2 class="text-center">FORM PEMINJAMAN</h2>
        </div>

        <div class="row panel-body">

            <form method="POST" action="validasi.php">
                <table id="dinamis">
                    <tr>
                        <th>Nama Peminjam :</th>
                        <td>
                            <input placeholder="Nama anda" required name="peminjam" class="form-control" type="text" />
                        </td>
                    </tr>
                    <tr>
                        <th>Tim :</th>
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
                        <th>Nomor SO/IO</th>
                        <th>Nama User</th>
                        <th>
                            <button type="button" class="btn btn-blue add-row">+</button>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input required placeholder="Nomor SO/IO" name="soio[]" class="form-control" type="text">
                        </td>
                        <td>
                            <input required placeholder="Nama User" name="namauser[]" class="form-control" type="text">
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger delete-row">-</button>
                        </td>
                    </tr>
                </table>

                <br>

                <p><strong>TOOLS :</strong></p>
                <table class="table table-bordered">
                    <tr>
                        <th>OPM</th>
                        <th>CONSOLE RS232</th>
                        <th>CRIMPING</th>
                        <th>PRINT LABEL</th>
                        <th>LASER</th>
                        <th>BERTEST & LOOPBACK</th>
                        <th>WALKINGMETER</th>
                    </tr>
                    <tr>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $queryopm = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='opm' AND jumlah='1'");
                                $row1 = mysqli_num_rows($queryopm);
                                if ($row1 < 1) {
                                    echo "OPM Habis !!";
                                } else {
                                    while ($opm = mysqli_fetch_array($queryopm)) {
                                ?>
                                        <input name="opm[]" value="<?= $opm['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $opm['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $queryconsole = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='console' AND jumlah='1'");
                                $row2 = mysqli_num_rows($queryconsole);
                                if ($row2 < 1) {
                                    echo "Console Habis !!";
                                } else {
                                    while ($console = mysqli_fetch_array($queryconsole)) {
                                ?>
                                        <input name="console[]" value="<?= $console['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $console['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querycrp = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='crimping' AND jumlah='1'");
                                $row3 = mysqli_num_rows($querycrp);
                                if ($row3 < 1) {
                                    echo "Crimping Habis !!";
                                } else {
                                    while ($crimping = mysqli_fetch_array($querycrp)) {
                                ?>
                                        <input name="crimping[]" value="<?= $crimping['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $crimping['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querypl = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='printlabel' AND jumlah='1'");
                                $row4 = mysqli_num_rows($querypl);
                                if ($row4 < 1) {
                                    echo "Print Label Habis !!";
                                } else {
                                    while ($printlabel = mysqli_fetch_array($querypl)) {
                                ?>
                                        <input name="printlabel[]" value="<?= $printlabel['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $printlabel['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querylsr = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='laser' AND jumlah='1'");
                                $row5 = mysqli_num_rows($querylsr);
                                if ($row5 < 1) {
                                    echo "Laser Habis !!";
                                } else {
                                    while ($laser = mysqli_fetch_array($querylsr)) {
                                ?>
                                        <input name="laser[]" value="<?= $laser['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $laser['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querybertest = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='bertest' AND jumlah='1' OR tool LIKE '%loopback%' AND jumlah='1'");
                                $row6 = mysqli_num_rows($querybertest);
                                if ($row6 < 1) {
                                    echo "Bertest & Loopback Habis !!";
                                } else {
                                    while ($bertest = mysqli_fetch_array($querybertest)) {
                                ?>
                                        <input name="bertest[]" value="<?= $bertest['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $bertest['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querywm = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='walkingmeter' AND jumlah='1'");
                                $row7 = mysqli_num_rows($querywm);
                                if ($row7 < 1) {
                                    echo "Walking Meter Habis !!";
                                } else {
                                    while ($wm = mysqli_fetch_array($querywm)) {
                                ?>
                                        <input name="walkingmeter[]" value="<?= $wm['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $wm['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>TEROPONG</th>
                        <th>TOOLKIT</th>
                        <th>HELM</th>
                        <th>GPS</th>
                        <th>TANGGA</th>
                        <th>WEARPACK & ROMPI</th>
                        <th>FOC AKLIK</th>
                    </tr>
                    <tr>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querytrpg = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='teropong' AND jumlah='1'");
                                $row8 = mysqli_num_rows($querytrpg);
                                if ($row8 < 1) {
                                    echo "Teropong Habis !!";
                                } else {
                                    while ($teropong = mysqli_fetch_array($querytrpg)) {
                                ?>
                                        <input name="teropong[]" value="<?= $teropong['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $teropong['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querytoolkit = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='toolkit' AND jumlah='1'");
                                $row9 = mysqli_num_rows($querytoolkit);
                                if ($row9 < 1) {
                                    echo "Toolkit Habis !!";
                                } else {
                                    while ($toolkit = mysqli_fetch_array($querytoolkit)) {
                                ?>
                                        <input name="toolkit[]" value="<?= $toolkit['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $toolkit['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $queryhelm = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='helm' AND jumlah='1'");
                                $row10 = mysqli_num_rows($queryhelm);
                                if ($row10 < 1) {
                                    echo "Helm Habis !!";
                                } else {
                                    while ($helm = mysqli_fetch_array($queryhelm)) {
                                ?>
                                        <input name="helm[]" value="<?= $helm['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $helm['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querygarmin = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='gps' AND jumlah='1'");
                                $row11 = mysqli_num_rows($querygarmin);
                                if ($row11 < 1) {
                                    echo "GPS Habis !!";
                                } else {
                                    while ($garmin = mysqli_fetch_array($querygarmin)) {
                                ?>
                                        <input name="garmin[]" value="<?= $garmin['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $garmin['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querytangga = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='tangga' AND jumlah='1'");
                                $row12 = mysqli_num_rows($querytangga);
                                if ($row12 < 1) {
                                    echo "Tangga Habis !!";
                                } else {
                                    while ($tangga = mysqli_fetch_array($querytangga)) {
                                ?>
                                        <input name="tangga[]" value="<?= $tangga['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $tangga['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querywp = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='wearpack_rompi' AND jumlah='1'");
                                $row13 = mysqli_num_rows($querywp);
                                if ($row13 < 1) {
                                    echo "Tool Kosong !!";
                                } else {
                                    while ($wearpackrompi = mysqli_fetch_array($querywp)) {
                                ?>
                                        <input name="toolwp[]" value="<?= $wearpackrompi['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $wearpackrompi['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querytoolfoc = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='focaklik' AND jumlah='1'");
                                $row14 = mysqli_num_rows($querytoolfoc);
                                if ($row14 < 1) {
                                    echo "Tool Kosong !!";
                                } else {
                                    while ($toolfoc = mysqli_fetch_array($querytoolfoc)) {
                                ?>
                                        <input name="toolfoc[]" value="<?= $toolfoc['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $toolfoc['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>PAYUNG</th>
                        <th>FOC FOT AKLIS</th>
                        <th>TOOL AKLIK</th>
                        <th>SWITCHTEST</th>
                        <th>TOOL OTHER</th>
                    </tr>
                    <tr>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $querypayung = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='payung' AND jumlah='1'");
                                $row15 = mysqli_num_rows($querypayung);
                                if ($row15 < 1) {
                                    echo "Tool Kosong !!";
                                } else {
                                    while ($payung = mysqli_fetch_array($querypayung)) {
                                ?>
                                        <input name="toolpayung[]" value="<?= $payung['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $payung['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $queryaklis = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='aklis' AND jumlah='1'");
                                $row16 = mysqli_num_rows($queryaklis);
                                if ($row16 < 1) {
                                    echo "Tool Kosong !!";
                                } else {
                                    while ($aklis = mysqli_fetch_array($queryaklis)) {
                                ?>
                                        <input name="toolaklis[]" value="<?= $aklis['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $aklis['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $queryaklik = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='aklik' AND jumlah='1'");
                                $row17 = mysqli_num_rows($queryaklik);
                                if ($row17 < 1) {
                                    echo "Tool Kosong !!";
                                } else {
                                    while ($aklik = mysqli_fetch_array($queryaklik)) {
                                ?>
                                        <input name="toolaklik[]" value="<?= $aklik['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $aklik['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <?php
                                $queryswitchtest = mysqli_query($connect, "SELECT tool from tool_validator WHERE tipe='switchtest' AND jumlah='1'");
                                $row18 = mysqli_num_rows($queryswitchtest);
                                if ($row18 < 1) {
                                    echo "Tool Kosong !!";
                                } else {
                                    while ($switchtest = mysqli_fetch_array($queryswitchtest)) {
                                ?>
                                        <input name="toolswitchtest[]" value="<?= $switchtest['tool'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $switchtest['tool'] ?><br>
                                <?php
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:150px; height:180px;">
                                <table id="toolother">
                                    <tr>
                                        <td>
                                            <input name="toolothermanual[]" class="form-control" type="text" placeholder="None" />
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-blue add-row">+</button>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </td>

                    </tr>
                </table>

                <br>
                <p><strong>MATERIAL :</strong></p>
                <table class="table table-bordered">
                    <tr>
                        <th>
                            Patchcord SingleMode
                        </th>
                        <th>
                            Patchcord MultiMode
                        </th>
                        <th>
                            FOC
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <div style="overflow:scroll; width:350px; height:180px;">
                                <?php
                                $querysinglemode = mysqli_query($connect, "SELECT material,jumlah from material_validator WHERE tipe='patchcore_singlemode' AND jumlah>0");
                                $rowmaterial1 = mysqli_num_rows($querysinglemode);
                                if ($rowmaterial1 > 0) {
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($querysinglemode)) {
                                ?>
                                        <input id="pcsm<?= $no ?>" onclick="pcsmFunction<?= $no ?>()" name=" pcsinglemode[]" value="<?= $data['material'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $data['material'] ?> <b>Jumlah :</b>
                                        <input id="pcsmjml<?= $no ?>" name="pcsinglemodejumlah[]" type="number" min="0" max="<?= $data['jumlah'] ?>" placeholder="None" disabled><br>
                                        <script>
                                            function pcsmFunction<?= $no ?>() {
                                                // Get the checkbox
                                                var checkBox = document.getElementById("pcsm<?= $no ?>");
                                                // If the checkbox is checked, display the output text
                                                if (checkBox.checked == true) {
                                                    document.getElementById("pcsmjml<?= $no ?>").disabled = false;
                                                } else {
                                                    document.getElementById("pcsmjml<?= $no ?>").disabled = true;
                                                }
                                            }
                                        </script>
                                <?php
                                        $no++;
                                    }
                                } else {
                                    echo "Material Kosong !!";
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:350px; height:180px;">
                                <?php
                                $querymultimode = mysqli_query($connect, "SELECT material,jumlah from material_validator WHERE tipe='patchcore_multimode' AND jumlah>'0'");
                                $rowmaterial2 = mysqli_num_rows($querymultimode);
                                if ($rowmaterial2 < 1) {
                                    echo "Material Kosong !!";
                                } else {
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($querymultimode)) {
                                ?>
                                        <input id="pcmm<?= $no ?>" onclick="pcmmFunction<?= $no ?>()" name="pcmultimode[]" value="<?= $data['material'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $data['material'] ?> <b>Jumlah :</b>
                                        <input id="pcmmjml<?= $no ?>" name="pcmultimodejumlah[]" type="number" min="0" max="<?= $data['jumlah'] ?>" placeholder="None" disabled><br>
                                        <script>
                                            function pcmmFunction<?= $no ?>() {
                                                // Get the checkbox
                                                var checkBox = document.getElementById("pcmm<?= $no ?>");
                                                // If the checkbox is checked, display the output text
                                                if (checkBox.checked == true) {
                                                    document.getElementById("pcmmjml<?= $no ?>").disabled = false;
                                                } else {
                                                    document.getElementById("pcmmjml<?= $no ?>").disabled = true;
                                                }
                                            }
                                        </script>
                                <?php
                                        $no++;
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:350px; height:180px;">
                                <?php
                                $queryfoc = mysqli_query($connect, "SELECT material,jumlah from material_validator WHERE tipe='foc' AND jumlah>'0'");
                                $rowmaterial3 = mysqli_num_rows($queryfoc);
                                if ($rowmaterial3 < 1) {
                                    echo "Material Kosong !!";
                                } else {
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($queryfoc)) {
                                ?>
                                        <input id="foc<?= $no ?>" name="foc[]" onclick="focFunction<?= $no ?>()" value="<?= $data['material'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $data['material'] ?> <b>Jumlah :</b>
                                        <input id="focjml<?= $no ?>" name="focjumlah[]" type="number" min="0" max="<?= $data['jumlah'] ?>" placeholder="None" disabled><br>
                                        <script>
                                            function focFunction<?= $no ?>() {
                                                // Get the checkbox
                                                var checkBox = document.getElementById("foc<?= $no ?>");
                                                // If the checkbox is checked, display the output text
                                                if (checkBox.checked == true) {
                                                    document.getElementById("focjml<?= $no ?>").disabled = false;
                                                } else {
                                                    document.getElementById("focjml<?= $no ?>").disabled = true;
                                                }
                                            }
                                        </script>
                                <?php
                                        $no++;
                                    }
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>FTTH</th>
                        <th>FOT</th>
                        <th>OTHER MATERIAL</th>
                    </tr>
                    <tr>
                        <td>
                            <div style="overflow:scroll; width:350px; height:180px;">
                                <?php
                                $queryftth = mysqli_query($connect, "SELECT material,jumlah from material_validator WHERE tipe='ftth' AND jumlah>'0'");
                                $rowmaterial4 = mysqli_num_rows($queryftth);
                                if ($rowmaterial4 < 1) {
                                    echo "Material Kosong !!";
                                } else {
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($queryftth)) {
                                ?>
                                        <input id="ftth<?= $no ?>" name="ftth[]" onclick="ftthFunction<?= $no ?>()" value="<?= $data['material'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $data['material'] ?> <b>Jumlah :</b>
                                        <input id="ftthjml<?= $no ?>" name="ftthjumlah[]" type="number" min="0" max="<?= $data['jumlah'] ?>" placeholder="None" disabled><br>
                                        <script>
                                            function ftthFunction<?= $no ?>() {
                                                // Get the checkbox
                                                var checkBox = document.getElementById("ftth<?= $no ?>");
                                                // If the checkbox is checked, display the output text
                                                if (checkBox.checked == true) {
                                                    document.getElementById("ftthjml<?= $no ?>").disabled = false;
                                                } else {
                                                    document.getElementById("ftthjml<?= $no ?>").disabled = true;
                                                }
                                            }
                                        </script>
                                <?php
                                        $no++;
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <div style="overflow:scroll; width:350px; height:180px;">
                                <?php
                                $queryfot = mysqli_query($connect, "SELECT material,jumlah from material_validator WHERE tipe='fot' AND jumlah>'0'");
                                $rowmaterial5 = mysqli_num_rows($queryfot);
                                if ($rowmaterial5 < 1) {
                                    echo "Material Kosong !!";
                                } else {
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($queryfot)) {
                                ?>
                                        <input id="fot<?= $no ?>" name="fot[]" onclick="fotFunction<?= $no ?>()" value="<?= $data['material'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $data['material'] ?> <b>Jumlah :</b>
                                        <input id="fotjml<?= $no ?>" name="fotjumlah[]" type="number" min="0" max="<?= $data['jumlah'] ?>" placeholder="None" disabled><br>
                                        <script>
                                            function fotFunction<?= $no ?>() {
                                                // Get the checkbox
                                                var checkBox = document.getElementById("fot<?= $no ?>");
                                                // If the checkbox is checked, display the output text
                                                if (checkBox.checked == true) {
                                                    document.getElementById("fotjml<?= $no ?>").disabled = false;
                                                } else {
                                                    document.getElementById("fotjml<?= $no ?>").disabled = true;
                                                }
                                            }
                                        </script>
                                <?php
                                        $no++;
                                    }
                                }
                                ?>
                            </div>
                        </td>
                        <td>
                            <table id="materialother">
                                <tr>
                                    <td>
                                        <input name="materialother" class="form-control" type="text" placeholder="None" />
                                    </td>
                                    <td>
                                        <input name="materialotherjumlah" class="form-control" type="number" min="0" placeholder="Jumlah" />
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="3">Pengadaan Perangkat</th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <div style="overflow:scroll; width:100%; height:180px;">
                                <?php
                                $querypp = mysqli_query($connect, "SELECT * from pengadaan_validator WHERE jumlah>'0'");
                                $rowmaterialpp = mysqli_num_rows($querypp);
                                if ($rowmaterialpp < 1) {
                                    echo "Perangkat Kosong !!";
                                } else {
                                    $no = 0;
                                    while ($data = mysqli_fetch_array($querypp)) {
                                ?>
                                        <input id="pp<?= $no ?>" name="pp[]" onclick="ppFunction<?= $no ?>()" value="<?= $data['no_sn'] ?>" class="checkbox checkbox-inline" type="checkbox"> <?= $data['nama_perangkat'] . '_' . $data['no_spr'] . '_' . $data['no_sn'] ?> <b>Jumlah :</b>
                                        <input id="ppjml<?= $no ?>" name="ppjumlah[]" type="number" min="0" max="<?= $data['jumlah'] ?>" placeholder="None" disabled><br>
                                        <script>
                                            function ppFunction<?= $no ?>() {
                                                // Get the checkbox
                                                var checkBox = document.getElementById("pp<?= $no ?>");
                                                // If the checkbox is checked, display the output text
                                                if (checkBox.checked == true) {
                                                    document.getElementById("ppjml<?= $no ?>").disabled = false;
                                                } else {
                                                    document.getElementById("ppjml<?= $no ?>").disabled = true;
                                                }
                                            }
                                        </script>
                                <?php
                                        $no++;
                                    }
                                }
                                ?>
                            </div>
                        </td>
                    </tr>
                    </tr>
                </table>

                <table>
                    <tr>
                        <th>Note:</th>
                    </tr>
                    <tr>
                        <td><textarea style="width: 200%;" class="form-control" name="note"></textarea></td>
                    </tr>
                </table>

                <br>
                <button name="validate" type="submit" class="btn btn-warning">VALIDASI</button>
            </form>
        </div>

        <div class="panel-footer">
            <p class="text-center">Copyright 2021 Lord Syahrur</p>
        </div>
    </div>
</body>

</html>