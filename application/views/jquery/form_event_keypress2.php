<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
</head>

<body>
  <table>
    <tr>
      <td>Nama Barang</td>
      <td>:</td>
      <td><input type="text" id="namaBarang"></td>
    </tr>
    <tr>
      <td>Harga Barang</td>
      <td>:</td>
      <td><input type="text" id="hargaBarang"></td>
    </tr>
    <tr>
      <td>Jumlah Pembelian</td>
      <td>:</td>
      <td><input type="text" id="jmlBeli"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" id="btnSubmit" value="Submit"></td>
    </tr>
    <tr>
      <td>Total</td>
      <td>:</td>
      <td><input type="text" id="total" disabled></td>
    </tr>

  </table>

  <script>
    $(document).ready(() => {

      $('#hargaBarang').keypress((e) => {
        if (!(e.which >= 48 && e.which <= 57)) {
          alert("Input Kosong Harap di Isi Angka")
          return false;
        }
      })

      $('#jmlBeli').keypress((e) => {
        if (!(e.which >= 48 && e.which <= 57)) {
          alert("Input Kosong Harap di Isi Angka")
          return false;
        }
      })
    })
  </script>
</body>

</html>