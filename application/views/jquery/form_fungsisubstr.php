<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
</head>

<body>
  <h3>&nbsp;</h3>
  <table>
    <tr>
      <td>Nomor Induk Mahasiswa</td>
      <td>:</td>
      <td><input type="text" id="mhsNim"></td>
    </tr>
    <tr>
      <td>Nama Mahasiswa</td>
      <td>:</td>
      <td><input type="text" id="mhsNama"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" id="btnSubmit" value="Submit"></td>
    </tr>
    <tr>
      <td>Prodi</td>
      <td>:</td>
      <td><input type="text" id="mhsProdi" disabled></td>
    </tr>
  </table>

  <script>
    $(document).ready(() => {
      $('#btnSubmit').click(() => {
        //  substr(namavar,index awal, jumah)
        const nim = $('#mhsNim').val().substr(0, 3)
        console.log(nim)
        let programStudi = null

        if (nim === "112") {
          programStudi = "Manajemen Informatika"
        } else if (nim === "212") {
          programStudi = "Komputer Akutansi"
        } else if (nim === "312") {
          programStudi = 'Administaris bisnis'
        }

        $('#mhsProdi').val(programStudi)
      })

    })
  </script>
</body>

</html>