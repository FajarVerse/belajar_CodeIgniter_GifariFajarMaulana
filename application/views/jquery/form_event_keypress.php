<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
  <title>Document</title>
</head>

<body>
  <table>
    <tr>
      <td>
        <h1>Form Key Press Event </h1>
      </td>
    </tr>
    <tr>
      <td>NIM Mahasiswa</td>
      <td>:</td>
      <td><input type="text" name="" id="nim" readonly></td>
    </tr>
    <tr>
      <td>Nama Mahasiswa</td>
      <td>:</td>
      <td><input type="text" name="" id="nama" readonly></td>
    </tr>
    <tr>
      <td>Kode Prodi</td>
      <td>:</td>
      <td><input type="text" name="" id="kodeprodi" readonly></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="" id="btnsubmit" value="Proses"></td>
    </tr>
    <tr>
      <td>Program Studi</td>
      <td>:</td>
      <td><input type="text" name="" id="prodi" disabled></td>
    </tr>
  </table>

  <script>
    $(document).ready(() => {
      $('#nim').attr('readonly', false)
      $('#nim').focus()

      $('#nim').keypress((event) => {
        if (event.keyCode === 13 && $('#nim').val() == 0) {
          alert('Nim Harus Diisi')
        } else if (event.which === 13 && $('nim').val != 0) {
          $('#nama').attr('readonly', false)
          $('#nama').focus()
          return false
        }
      })

      $('#nama').keypress((event) => {
        if (event.keyCode === 13 && $('#nama').val() == 0) {
          alert('Nama Harus Diisi')
        } else if (event.which === 13 && $('nama').val != 0) {
          $('#kodeprodi').attr('readonly', false)
          $('#kodeprodi').focus()
          return false
        }
      })

      $('#kodeprodi').keypress((event) => {
        $('#kodeprodi').attr('readonly', false)
        $('#kodeprodi').focus()

        if (event.keyCode === 13 && $('#kodeprodi').val() == 0) {
          alert("Kode Prodi Harus Diisi")
        } else if (event.keyCode === 13 && $('#kodeprodi').val() !== 0) {
          $('#btnsubmit').focus()
          return false
        }
      })

      $('#btnsubmit').click(() => {
        if (($('#kodeprodi').val()).toUpperCase() === 'MI') {
          $('#prodi').val("Manajemen Informatika")
        } else if (($('#kodeprodi').val()).toUpperCase() === 'KA') {
          $('#prodi').val("Komputerisasi Akutansi")
        } else if (($('#kodeprodi').val()).toUpperCase() === 'AB') {
          $('#prodi').val("Administrasi Bisnis")
        } else {
          $('#prodi').val("Kode Yang Anda Masukan Salah")
        }
      })
    })
  </script>
</body>

</html>