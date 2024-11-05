<!DOCTYPE html>
<html lang="en">

<head>
  <title>Penjumlahan</title>
</head>

<body>
  <h1>Form Penjumlahan</h1>
  <div>
    <form action="<?= base_url("Form/FormPenjumlahan/jumlah") ?>" method="post">
      <div> <input type="text" name="nilai1" placeholder="masukan nilai 1"></div>
      <div><input type="text" name="nilai2" placeholder="masukan nilai 2"></div>
      <button type="submit">Hasil</button>
    </form>
  </div>
</body>

</html>