$(function () {
  $("#dinamis .add-row").click(function () {
    var template =
      '<tr><td><input required name="soio[]" class="form-control" type="text"></td><td><input required name="namauser[]" class="form-control" type="text"></td><td><button type="button" class="btn btn-danger delete-row">-</button></td></tr>';
    $("#dinamis tbody").append(template);
  });

  $("#dinamis").on("click", ".delete-row", function () {
    $(this)
      .parent()
      .parent()
      .remove();
  });
});

$(function () {
  $("#dinamis2 .add-row").click(function () {
    var template =
      '<tr><td><select name="material[]" class="form-control"><option selected disabled>PILIH</option><optgroup label="PATCH CORD SingleMode"><option value="sm.p.sc-sc">P.SC-SC</option><option value="sm.p.sc-lc">P.SC-LC</option><option value="sm.p.sc-fc">P.SC-FC</option><option value="sm.p.lc-lc">P.LC-LC</option><option value="sm.p.fc-fc">P.FC-FC</option><option value="sm.p.fc-lc">P.FC-LC</option><optgroup label="PATCH CORD MultiMode"><option value="mm.p.sc-sc">P.SC-SC</option><option value="mm.p.sc-lc">P.SC-LC</option><option value="mm.p.sc-fc">P.SC-FC</option><option value="mm.p.lc-lc">P.LC-LC</option><option value="mm.p.fc-fc">P.FC-FC</option><option value="mm.p.fc-lc">P.FC-LC</option><optgroup label="PIGTAIL"><option value="sc">SC</option><option value="lc">LC</option><option value="fc">FC</option><optgroup label="UTP"><option value="cat6">CAT6</option><option value="cat5e">CAT5E</option><optgroup label="Other"><option value="rj45">RJ45</option><option value="roset">ROSET</option><option value="attenuator">ATTENUATOR</option><option value="cwdm.o">CWDM Outdoor</option><option value="cwdm.i">CWDM Indoor</option><option value="jb">JB</option><option value="fat">FAT</option><option value="fdt">FDT</option><option value="fps">Fiber Protective Sleeves</option><option value="dw-dropcore">DW/Dropcore</option><option value="konektor">KONEKTOR</option><option value="tis-besar">TIS Besar</option><option value="tis-kecil">TIS Kecil</option><option value="deadend">DEADEND</option><option value="suspension">SUSPENSION</option><option value="k-jb">Kondom JB</option><option value="fastconn-soc">Fast connector/SOC</option><option value="hotgun">Hot Gun</option><option value="sfp">SFP</option><option value="glct">GLCT</option><option value="other">OTHER</option></select></td><td><input name="ukuran[]" type="number" min="0" max="200" value="" placeholder="None" class="form-control"></td><td><input name="jumlah[]" type="number" min="0" max="100" class="form-control"></td><td><input name="note[]" type="text" class="form-control"></td><td><button type="button" class="btn btn-danger delete-row">-</button></td></tr>';
    $("#dinamis2 tbody").append(template);
  });

  $("#dinamis2").on("click", ".delete-row", function () {
    $(this)
      .parent()
      .parent()
      .remove();
  });
});

$(function () {
  $("#toolother .add-row").click(function () {
    var template =
      '<tr><td><input name="toolother[]" class="form-control" type="text" /></td><td><button type="button" class="btn btn-danger delete-row">-</button></td></tr>';
    $("#toolother tbody").append(template);
  });

  $("#toolother").on("click", ".delete-row", function () {
    $(this)
      .parent()
      .parent()
      .remove();
  });
});

$(function () {
  $("#dinamisx .add-row").click(function () {
    var template =
      '<tr><td><select name="material[]"><option selected disabled>PILIH MATERIAL</option><option value="akvpublik">Aktivasi Publik</option><option value="akvpln">Aktivasi PLN</option><option value="harlik">HAR Publik</option><option value="harlis">HAR Listrik</option><option value="infraset">INFRA & ASET</option></select></td><td><input type="number" name="jumlah[]"></td><td><button type="button" class="btn btn-danger delete-row">-</button></td></tr>';
    $("#dinamisx tbody").append(template);
  });

  $("#dinamisx").on("click", ".delete-row", function () {
    $(this)
      .parent()
      .parent()
      .remove();
  });
});
