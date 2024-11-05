<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Form Penjumlahan Sederhana</h2>
  <div>
    <div>
      <input type="number" id="nilai1" placeholder="nilai 1">
      <span>+</span>
      <input type="number" id="nilai2" placeholder="nilai 2">
      <span>=</span>
      <input type="number" id="hasil" placeholder="hasil" readonly>
    </div>
    <div>
      <button id="btn-hasil">hasil</button>
    </div>
  </div>


  <script>
    const n1 = document.querySelector("#nilai1")
    const n2 = document.querySelector("#nilai2")
    const hasil = document.querySelector("#hasil")
    const btn = document.querySelector("#btn-hasil")

    btn.addEventListener("click", () => {
      const hasilPenjumlahan = parseInt(n1.value) + eval(n2.value)
      hasil.value = hasilPenjumlahan
    })
  </script>
</body>

</html>