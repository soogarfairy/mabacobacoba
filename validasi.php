<?php
include "koneksi/conn.php";
if (isset($_POST['validate'])) {
?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Validasi</title>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
        <link href="gayain.css" rel="stylesheet" type="text/css">
        <script src="https:/netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="https:/code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript">
        </script>
    </head>

    <body>
        <form method="POST" action="input.php">
            <div class="panel-body">
                <div class="container">
                    <div class="row">
                        <h2 class="text-center">VALIDASI</h2>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <table class="table table-condensed table-hover table-striped">
                                <?php
                                //=====================================================================
                                //VALIDASI PEMINJAM
                                //=====================================================================
                                if (isset($_POST['peminjam'])) {
                                    $peminjam = $_POST['peminjam'];
                                    $divisi = $_POST['divisi'];
                                    $tanggal = date('Y-m-d');
                                ?>
                                    <tr>
                                        <td>Nama : </td>
                                        <td><input name="peminjam" value="<?= $peminjam ?>" class="form-control" type="text" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Tim : </td>
                                        <td><input name="divisi" value="<?= $divisi ?>" class="form-control" type="text" readonly></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal : </td>
                                        <td><input name="tanggal" value="<?= $tanggal ?>" class="form-control" type="date" readonly></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                        </div>
                    </div>

                    <?php
                    if (!empty($_POST['soio'])) {
                    ?>
                        <div class="row">
                            <div class="col-sm-8">
                                <table class="table table-condensed table-hover table-striped">
                                    <tr>
                                        <td>No</td>
                                        <td>SO/IO</td>
                                        <td>User</td>
                                    </tr>
                                    <?php
                                    $no = 1;
                                    for ($i = 0; $i < count($_POST['soio']); $i++) {
                                        ${"nosoio" . $i} = $_POST['soio'][$i];
                                        ${"namauser" . $i} = $_POST['namauser'][$i];
                                    ?>
                                        <tr>
                                            <td><?php echo "$no"; ?></td>
                                            <td><input name="soio[]" value="<?= ${"nosoio" . $i} ?>" class="form-control" type="text" readonly></td>
                                            <td><input name="namauser[]" value="<?= ${"namauser" . $i} ?>" class="form-control" type="text" readonly></td>
                                        </tr>
                                    <?php
                                        $no++;
                                    }
                                    ?>
                                </table>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="row">
                        <div class="col-sm-6">
                            <table class="table table-condensed table-hover table-striped">
                                <?php
                                //=====================================================================
                                //                              OPM
                                //=====================================================================
                                if (isset($_POST['opm'])) {
                                    for ($i = 0; $i < count($_POST['opm']); $i++) {
                                        ${"opm" . $i} = $_POST['opm'][$i];
                                        if (!empty(${"opm" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"opm" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                ?>
                                                <tr>
                                                    <td>OPM : </td>
                                                    <td><input name="opm[]" value="<?= ${"opm" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>OPM : </td>
                                                    <td><input value="<?= ${"opm" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              CONSOLE
                                //=====================================================================
                                if (isset($_POST['console'])) {
                                    for ($i = 0; $i < count($_POST['console']); $i++) {
                                        ${"console" . $i} = $_POST['console'][$i];
                                        if (!empty(${"console" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"console" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>CONSOLE : </td>
                                                    <td><input name="console[]" value="<?= ${"console" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>CONSOLE : </td>
                                                    <td><input value="<?= ${"console" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              CRIMPING
                                //=====================================================================
                                if (isset($_POST['crimping'])) {
                                    for ($i = 0; $i < count($_POST['crimping']); $i++) {
                                        ${"crimping" . $i} = $_POST['crimping'][$i];
                                        if (!empty(${"crimping" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"crimping" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>CRIMPING : </td>
                                                    <td><input name="crimping[]" value="<?= ${"crimping" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>CRIMPING : </td>
                                                    <td><input value="<?= ${"crimping" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              PRINTLABEL
                                //=====================================================================
                                if (isset($_POST['printlabel'])) {
                                    for ($i = 0; $i < count($_POST['printlabel']); $i++) {
                                        ${"printlabel" . $i} = $_POST['printlabel'][$i];
                                        if (!empty(${"printlabel" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"printlabel" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>PRINTLABEL : </td>
                                                    <td><input name="printlabel[]" value="<?= ${"printlabel" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>PRINTLABEL : </td>
                                                    <td><input value="<?= ${"printlabel" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              LASER
                                //=====================================================================
                                if (isset($_POST['laser'])) {
                                    for ($i = 0; $i < count($_POST['laser']); $i++) {
                                        ${"laser" . $i} = $_POST['laser'][$i];
                                        if (!empty(${"laser" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"laser" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>LASER : </td>
                                                    <td><input name="laser[]" value="<?= ${"laser" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>LASER : </td>
                                                    <td><input value="<?= ${"laser" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              BERTEST
                                //=====================================================================
                                if (isset($_POST['bertest'])) {
                                    for ($i = 0; $i < count($_POST['bertest']); $i++) {
                                        ${"bertest" . $i} = $_POST['bertest'][$i];
                                        if (!empty(${"bertest" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"bertest" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>BERTEST : </td>
                                                    <td><input name="bertest[]" value="<?= ${"bertest" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>BERTEST : </td>
                                                    <td><input value="<?= ${"bertest" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              WALKINGMETER
                                //=====================================================================
                                if (isset($_POST['walkingmeter'])) {
                                    for ($i = 0; $i < count($_POST['walkingmeter']); $i++) {
                                        ${"walkingmeter" . $i} = $_POST['walkingmeter'][$i];
                                        if (!empty(${"walkingmeter" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"walkingmeter" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>WALKINGMETER : </td>
                                                    <td><input name="walkingmeter[]" value="<?= ${"walkingmeter" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>WALKINGMETER : </td>
                                                    <td><input value="<?= ${"walkingmeter" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TEROPONG
                                //=====================================================================
                                if (isset($_POST['teropong'])) {
                                    for ($i = 0; $i < count($_POST['teropong']); $i++) {
                                        ${"teropong" . $i} = $_POST['teropong'][$i];
                                        if (!empty(${"teropong" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"teropong" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>TEROPONG : </td>
                                                    <td><input name="teropong[]" value="<?= ${"teropong" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>TEROPONG : </td>
                                                    <td><input value="<?= ${"teropong" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TOOLKIT
                                //=====================================================================
                                if (isset($_POST['toolkit'])) {
                                    for ($i = 0; $i < count($_POST['toolkit']); $i++) {
                                        ${"toolkit" . $i} = $_POST['toolkit'][$i];
                                        if (!empty(${"toolkit" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolkit" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>TOOLKIT : </td>
                                                    <td><input name="toolkit[]" value="<?= ${"toolkit" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>TOOLKIT : </td>
                                                    <td><input value="<?= ${"toolkit" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              HELM
                                //=====================================================================
                                if (isset($_POST['helm'])) {
                                    for ($i = 0; $i < count($_POST['helm']); $i++) {
                                        ${"helm" . $i} = $_POST['helm'][$i];
                                        if (!empty(${"helm" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"helm" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>HELM : </td>
                                                    <td><input name="helm[]" value="<?= ${"helm" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>HELM : </td>
                                                    <td><input value="<?= ${"helm" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              GARMIN
                                //=====================================================================
                                if (isset($_POST['garmin'])) {
                                    for ($i = 0; $i < count($_POST['garmin']); $i++) {
                                        ${"garmin" . $i} = $_POST['garmin'][$i];
                                        if (!empty(${"garmin" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"garmin" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>GARMIN : </td>
                                                    <td><input name="garmin[]" value="<?= ${"garmin" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>GARMIN : </td>
                                                    <td><input value="<?= ${"garmin" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TANGGA
                                //=====================================================================
                                if (isset($_POST['tangga'])) {
                                    for ($i = 0; $i < count($_POST['tangga']); $i++) {
                                        ${"tangga" . $i} = $_POST['tangga'][$i];
                                        if (!empty(${"tangga" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"tangga" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>TANGGA : </td>
                                                    <td><input name="tangga[]" value="<?= ${"tangga" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>TANGGA : </td>
                                                    <td><input value="<?= ${"tangga" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              WEARPACK ROMPI
                                //=====================================================================
                                if (isset($_POST['toolwp'])) {
                                    for ($i = 0; $i < count($_POST['toolwp']); $i++) {
                                        ${"toolwp" . $i} = $_POST['toolwp'][$i];
                                        if (!empty(${"toolwp" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolwp" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>WEARPACK / ROMPI : </td>
                                                    <td><input name="toolwp[]" value="<?= ${"toolwp" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>WEARPACK / ROMPI : </td>
                                                    <td><input value="<?= ${"toolwp" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TOOL FOC
                                //=====================================================================
                                if (isset($_POST['toolfoc'])) {
                                    for ($i = 0; $i < count($_POST['toolfoc']); $i++) {
                                        ${"toolfoc" . $i} = $_POST['toolfoc'][$i];
                                        if (!empty(${"toolfoc" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolfoc" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>FOC : </td>
                                                    <td><input name="toolfoc[]" value="<?= ${"toolfoc" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>FOC : </td>
                                                    <td><input value="<?= ${"toolfoc" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TOOL PAYUNG
                                //=====================================================================
                                if (isset($_POST['toolpayung'])) {
                                    for ($i = 0; $i < count($_POST['toolpayung']); $i++) {
                                        ${"toolpayung" . $i} = $_POST['toolpayung'][$i];
                                        if (!empty(${"toolpayung" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolpayung" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>PAYUNG : </td>
                                                    <td><input name="toolpayung[]" value="<?= ${"toolpayung" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>PAYUNG : </td>
                                                    <td><input value="<?= ${"toolpayung" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TOOL AKLIS
                                //=====================================================================
                                if (isset($_POST['toolaklis'])) {
                                    for ($i = 0; $i < count($_POST['toolaklis']); $i++) {
                                        ${"toolaklis" . $i} = $_POST['toolaklis'][$i];
                                        if (!empty(${"toolaklis" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolaklis" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>AKLIS : </td>
                                                    <td><input name="toolaklis[]" value="<?= ${"toolaklis" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>AKLIS : </td>
                                                    <td><input value="<?= ${"toolaklis" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TOOL AKLIK
                                //=====================================================================
                                if (isset($_POST['toolaklik'])) {
                                    for ($i = 0; $i < count($_POST['toolaklik']); $i++) {
                                        ${"toolaklik" . $i} = $_POST['toolaklik'][$i];
                                        if (!empty(${"toolaklik" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolaklik" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>TOOL AKLIK : </td>
                                                    <td><input name="toolaklik[]" value="<?= ${"toolaklik" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>TOOL AKLIK : </td>
                                                    <td><input value="<?= ${"toolaklik" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                            <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TOOL switchtest
                                //=====================================================================
                                if (isset($_POST['toolswitchtest'])) {
                                    for ($i = 0; $i < count($_POST['toolswitchtest']); $i++) {
                                        ${"toolswitchtest" . $i} = $_POST['toolswitchtest'][$i];
                                        if (!empty(${"toolswitchtest" . $i})) {
                                            $query = mysqli_query($connect, "SELECT jumlah FROM tool_validator WHERE tool='${"toolswitchtest" .$i}'");
                                            $jumlahtool = mysqli_fetch_row($query);
                                            if ($jumlahtool['0'] == 1) {
                                            ?>
                                                <tr>
                                                    <td>TOOL SWITCHTEST : </td>
                                                    <td><input name="toolswitchtest[]" value="<?= ${"toolswitchtest" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tersedia</td>
                                                </tr>
                                            <?php
                                            } else {
                                            ?>
                                                <tr>
                                                    <td>TOOL SWITCHTEST : </td>
                                                    <td><input value="<?= ${"toolswitchtest" . $i} ?>" class="form-control" type="text" readonly></td>
                                                    <td>Tidak Tersedia !!!</td>
                                                </tr>
                                        <?php
                                            }
                                        }
                                    }
                                }

                                //=====================================================================
                                //                              TOOL OTHER manual
                                //=====================================================================
                                if (!empty($_POST['toolothermanual'])) {
                                    for ($i = 0; $i < count($_POST['toolothermanual']); $i++) {
                                        ${"toolothermanual" . $i} = $_POST['toolothermanual'][$i];
                                        ?>
                                        <tr>
                                            <td>Tool Other : </td>
                                            <td><input name="toolothermanual[]" value="<?= ${"toolothermanual" . $i} ?>" class="form-control" type="text" readonly></td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </table>
                        </div>
                    </div>

                    <?php
                    //=====================================================================
                    //                              MATERIAL PATCHCORE SM
                    //=====================================================================
                    if (isset($_POST['pcsinglemode']) && isset($_POST['pcsinglemodejumlah'])) {
                    ?>
                        <table>
                            <tr>
                                <th colspan="4">PATCHCORE SINGLEMODE :</th>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($_POST['pcsinglemode']); $i++) {
                                ${"pcsinglemode" . $i} = $_POST['pcsinglemode'][$i];
                                ${"pcsinglemodejumlah" . $i} = $_POST['pcsinglemodejumlah'][$i];
                                $query = mysqli_query($connect, "SELECT jumlah FROM material_validator WHERE material='${"pcsinglemode" .$i}' AND tipe='patchcore_singlemode'");
                                $jumlahtool = mysqli_fetch_array($query);
                                if ($jumlahtool['jumlah'] > 0) {
                            ?>
                                    <tr>
                                        <td><input name="pcsinglemode[]" value="<?= ${"pcsinglemode" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Jumlah :</td>
                                        <td><input name="pcsinglemodejumlah[]" value="<?= ${"pcsinglemodejumlah" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Tersedia</td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><input name="pcsinglemode[]" value="<?= ${"pcsinglemode" . $i} ?>" class="form-control" type="text" disabled></td>
                                        <td>Jumlah :</td>
                                        <td><input name="pcsinglemodejumlah[]" value="<?= ${"pcsinglemodejumlah" . $i} ?>" type="number" disabled></td>
                                        <td>Tidak Tersedia</td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    <?php
                    }

                    //=====================================================================
                    //                              MATERIAL PATCHCORE MM
                    //=====================================================================
                    if (isset($_POST['pcmultimode']) && isset($_POST['pcmultimodejumlah'])) {
                    ?>
                        <table>
                            <tr>
                                <th colspan="4">PATCHCORE MULTIMODE :</th>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($_POST['pcmultimode']); $i++) {
                                ${"pcmultimode" . $i} = $_POST['pcmultimode'][$i];
                                ${"pcmultimodejumlah" . $i} = $_POST['pcmultimodejumlah'][$i];
                                $query = mysqli_query($connect, "SELECT jumlah FROM material_validator WHERE material='${"pcmultimode" .$i}' AND tipe='patchcore_multimode'");
                                $jumlahtool = mysqli_fetch_array($query);
                                if ($jumlahtool['jumlah'] > 0) {
                            ?>
                                    <tr>
                                        <td><input name="pcmultimode[]" value="<?= ${"pcmultimode" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Jumlah :</td>
                                        <td><input name="pcmultimodejumlah[]" value="<?= ${"pcmultimodejumlah" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Tersedia</td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><input name="pcmultimode[]" value="<?= ${"pcmultimode" . $i} ?>" class="form-control" type="text" disabled></td>
                                        <td>Jumlah :</td>
                                        <td><input name="pcmultimodejumlah[]" value="<?= ${"pcmultimodejumlah" . $i} ?>" type="number" disabled></td>
                                        <td>Tidak Tersedia</td>
                                    </tr>
                            <?php

                                }
                            }
                            ?>
                        </table>
                    <?php
                    }
                    //=====================================================================
                    //                              MATERIAL foc
                    //=====================================================================
                    if (isset($_POST['foc']) && isset($_POST['focjumlah'])) {
                    ?>
                        <table>
                            <tr>
                                <th colspan="4">FOC :</th>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($_POST['foc']); $i++) {
                                ${"foc" . $i} = $_POST['foc'][$i];
                                ${"focjumlah" . $i} = $_POST['focjumlah'][$i];
                                $query = mysqli_query($connect, "SELECT jumlah FROM material_validator WHERE material='${"foc" .$i}' AND tipe='foc'");
                                $jumlahtool = mysqli_fetch_array($query);
                                if ($jumlahtool['jumlah'] > 0) {
                            ?>
                                    <tr>
                                        <td><input name="foc[]" value="<?= ${"foc" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Jumlah :</td>
                                        <td><input name="focjumlah[]" value="<?= ${"focjumlah" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Tersedia</td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><input name="foc[]" value="<?= ${"foc" . $i} ?>" class="form-control" type="text" disabled></td>
                                        <td>Jumlah :</td>
                                        <td><input name="focjumlah[]" value="<?= ${"focjumlah" . $i} ?>" type="number" disabled></td>
                                        <td>Tidak Tersedia</td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    <?php
                    }

                    //=====================================================================
                    //                              MATERIAL ftth
                    //=====================================================================
                    if (isset($_POST['ftth']) && isset($_POST['ftthjumlah'])) {
                    ?>
                        <table>
                            <tr>
                                <th colspan="4">FTTH :</th>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($_POST['ftth']); $i++) {
                                ${"ftth" . $i} = $_POST['ftth'][$i];
                                ${"ftthjumlah" . $i} = $_POST['ftthjumlah'][$i];
                                $query = mysqli_query($connect, "SELECT jumlah FROM material_validator WHERE material='${"ftth" .$i}' AND tipe='ftth'");
                                $jumlahtool = mysqli_fetch_array($query);
                                if ($jumlahtool['jumlah'] > 0) {
                            ?>
                                    <tr>
                                        <td><input name="ftth[]" value="<?= ${"ftth" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Jumlah :</td>
                                        <td><input name="ftthjumlah[]" value="<?= ${"ftthjumlah" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Tersedia</td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><input name="ftth[]" value="<?= ${"ftth" . $i} ?>" class="form-control" type="text" disabled></td>
                                        <td>Jumlah :</td>
                                        <td><input name="ftthjumlah[]" value="<?= ${"ftthjumlah" . $i} ?>" type="number" disabled></td>
                                        <td>Tidak Tersedia</td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    <?php
                    }

                    //=====================================================================
                    //                              MATERIAL fot
                    //=====================================================================
                    if (isset($_POST['fot']) && isset($_POST['fotjumlah'])) {
                    ?>
                        <table>
                            <tr>
                                <th colspan="4">FOT :</th>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($_POST['fot']); $i++) {
                                ${"fot" . $i} = $_POST['fot'][$i];
                                ${"fotjumlah" . $i} = $_POST['fotjumlah'][$i];
                                $query = mysqli_query($connect, "SELECT jumlah FROM material_validator WHERE material='${"fot" .$i}' AND tipe='fot'");
                                $jumlahtool = mysqli_fetch_array($query);
                                if ($jumlahtool['jumlah'] > 0) {
                            ?>
                                    <tr>
                                        <td><input name="fot[]" value="<?= ${"fot" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Jumlah :</td>
                                        <td><input name="fotjumlah[]" value="<?= ${"fotjumlah" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Tersedia</td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><input name="fot[]" value="<?= ${"fot" . $i} ?>" class="form-control" type="text" disabled></td>
                                        <td>Jumlah :</td>
                                        <td><input name="fotjumlah[]" value="<?= ${"fotjumlah" . $i} ?>" type="number" disabled></td>
                                        <td>Tidak Tersedia</td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    <?php
                    }
                    //=====================================================================
                    //                             OTHER MATERIAL 
                    //=====================================================================
                    if (isset($_POST['materialother'])) {
                        $materialother = $_POST['materialother'];
                        $materialotherjumlah = $_POST['materialotherjumlah'];
                    ?>
                        <table>
                            <tr>
                                <th>Material Other : </th>
                            </tr>
                            <tr>
                                <td><input name="materialother" value="<?= $materialother ?>" class="form-control" type="text" readonly></td>
                                <td><input name="materialotherjumlah" value="<?= $materialotherjumlah ?>" class="form-control" type="text" readonly></td>
                            </tr>
                        </table>
                    <?php
                    }
                    //=====================================================================
                    //                             PENGADAAN PERANGKAT
                    //=====================================================================
                    if (isset($_POST['pp']) && isset($_POST['ppjumlah'])) {
                    ?>
                        <table>
                            <tr>
                                <th colspan="4">Pengadaan Perangkat :</th>
                            </tr>
                            <?php
                            for ($i = 0; $i < count($_POST['pp']); $i++) {
                                ${"pp" . $i} = $_POST['pp'][$i];
                                ${"ppjumlah" . $i} = $_POST['ppjumlah'][$i];
                                $query = mysqli_query($connect, "SELECT jumlah FROM pengadaan_validator WHERE no_sn='${"pp" .$i}'");
                                $jumlahtool = mysqli_fetch_array($query);
                                if ($jumlahtool['jumlah'] > 0) {
                            ?>
                                    <tr>
                                        <td><input name="pp[]" value="<?= ${"pp" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Jumlah :</td>
                                        <td><input name="ppjumlah[]" value="<?= ${"ppjumlah" . $i} ?>" class="form-control" type="text" readonly></td>
                                        <td>Tersedia</td>
                                    </tr>
                                <?php
                                } else {
                                ?>
                                    <tr>
                                        <td><input name="pp[]" value="<?= ${"pp" . $i} ?>" class="form-control" type="text" disabled></td>
                                        <td>Jumlah :</td>
                                        <td><input name="ppjumlah[]" value="<?= ${"ppjumlah" . $i} ?>" type="number" disabled></td>
                                        <td>Tidak Tersedia</td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </table>
                    <?php
                    }
                    //=====================================================================
                    //                             NOTE
                    //=====================================================================
                    if (!empty($_POST['note'])) {
                        $note = $_POST['note'];
                    ?>
                        <table>
                            <tr>
                                <th>Note : </th>
                            </tr>
                            <tr>
                                <td><textarea style="width: 200%;" class="form-control" name="note" readonly><?= $note ?></textarea></td>
                            </tr>
                        </table>
                    <?php
                    }
                    ?>
                    <button name="submit" type="submit" class="btn btn-success">LANJUTKAN INPUT</button>
                </div>
            </div>
        </form>
    </body>

    </html>
<?php
}
?>