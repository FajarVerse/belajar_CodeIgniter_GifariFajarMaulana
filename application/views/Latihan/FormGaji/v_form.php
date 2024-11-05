<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Gaji</title>
</head>

<body>
  <form action="<?= base_url("Latihan/FormGaji/CalculationGaji") ?>" method="post">
    <div>
      <input type="text" name="nama_pegawai" placeholder="Nama Pegawai">
    </div>
    <div>
      <input type="number" name="gaji_pokok" placeholder="Gaji Pokok">
    </div>
    <div>
      <input type="number" name="jml_anak" placeholder="Jumlah Anak">
    </div>
    <button type="submit">Proses</button>
  </form>
</body>

</html>