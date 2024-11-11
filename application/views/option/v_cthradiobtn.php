<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
  <title>Document</title>
  <style>
    .form-group {
      margin-bottom: 15px;
    }

    .radio-group {
      margin: 10px 0;
    }

    label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
    }

    input[type="text"] {
      padding: 5px;
      width: 200px;
      margin-bottom: 10px;
    }

    button {
      padding: 8px 15px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 4px;
    }

    button:hover {
      background-color: green;
    }
  </style>
</head>

<body>
  <!-- <h2><?php echo $title ?></h2> -->

  <div class="form-group">
    <label for="">Nama Mahasiswa</label>
    <input type="text" name="namamhs" id="namamhs">
  </div>

  <div class="form-group">
    <label for="">Jenis Kelamain:</label>
    <div class="radio-group">
      <input type="radio" name="jeniskelamin" value="1" id="pria">
      <label for="pria" style="display: inline;">Pria</label>


      <input type="radio" name="jeniskelamin" value="2" id="wanita">
      <label for="wanita" style="display: inline;">Wanita</label>
    </div>
  </div>

  <div class="form-group">
    <label for="">Keterangan</label>
    <input type="text" name="keterangan" id="keterangan" readonly>
  </div>

  <div class="form-group">
    <button class="button">Check</button>
  </div>

  <script>
    const viewKeterangan = () => {
      // Mengambil nilai radio button yang dipilih
      let radioButtons = document.getElementsByName('jeniskelamin');
      let pilihan = '';

      for (let i = 0; i < radioButtons.length; i++) {
        if (radioButtons[i].checked) {
          pilihan = radioButtons[i].value;
          break;
        }
      }

      let keterangan = ''
      if (pilihan === '1') {
        keterangan = "Pria"
      } else if (pilihan === '2') {
        keterangan = "Wanita"
      } else {
        keterangan = "Apakah anda tidak mempunyai kelamin"
      }

      document.querySelector("#keterangan").value = keterangan
    }

    const btn = document.querySelector('.button')
    btn.addEventListener("click", () => {
      viewKeterangan()
    })
  </script>
</body>

</html>