<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
  <title>Document</title>
</head>

<body>
  <h2>Form Penjumlahan</h2>
  <div>
    <input type="number" id="nilai1" placeholder="Nilai 1">
  </div>
  <div>
    <input type="number" id="nilai2" placeholder="Nilai 2">
  </div>
  <div>
    <button id="btnresult">Result</button>
    <button id="btnreset">Reset</button>
  </div>
  <div>
    <label for="">Hasil</label>
    <input type="number" id="result" readonly>
  </div>


  <script>
    $(document).ready(() => {
      $('#btnresult').click(() => {
        let nilai1 = parseFloat($('#nilai1').val())
        let nilai2 = parseFloat($('#nilai2').val())

        let result = nilai1 + nilai2

        let inputResult = $('#result').val(result)
      })

      $('#btnreset').click(() => {
        let 
      })
    })
    
  </script>

</body>

</html>