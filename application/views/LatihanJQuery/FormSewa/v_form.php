<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
  <title>Form Sewa Buku</title>
</head>

<body>
  <div>
    <Legend>Form Sewa Buku</Legend>

    <div>
      <label for="nama-penyewa">
        <span>Nama Penyewa</span>
        <input type="text" name="nama-penyewa" id="nama-penyewa">
      </label>
    </div>

    <div>
      <label for="kode-jenis">
        <span>Kode Jenis (A/B/C)</span>
        <select name="kode-jenis" id="kode-jenis">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
        </select>
      </label>
    </div>

    <div>
      <label for="waktu">
        <span>Lama Meminjam</span>
        <input type="number" name="waktu-pinjam" id="waktu">
      </label>
    </div>

    <div>
      <button id="btnSubmit">Proses</button>
    </div>

    <div>
      <label for="j-buku">
        <span>Jenis Bacaan</span>
        <input type="text" name="jenis-buku" id="j-buku" readonly>
      </label>
    </div>

    <div>
      <label for="harga">
        <span>Harga Sewa</span>
        <input type="number" name="harga-sewa" id="harga" readonly>
      </label>
    </div>

    <div>
      <label for="total-sewa">
        <span>Total Harga Sewa</span>
        <input type="number" name="total-sewa" id="total-sewa" readonly>
      </label>
    </div>

    <div>
      <label for="potongan">
        <span>Potongan Harga</span>
        <input type="number" name="potongan" id="potongan" readonly>
      </label>
    </div>

    <div>
      <label for="total-bayar">
        <span>Total Bayar</span>
        <input type="number" name="total-bayar" id="total-bayar" readonly>
      </label>
    </div>

  </div>


  <script>
    $(document).ready(() => {


      $('#btnSubmit').click(() => {
        const nama = $('#nama-penyewa').val()
        const kodeJenis = $('#kode-jenis').val()
        const waktuPinjam = $('#waktu').val()
        const jenisB = $('#j-buku')
        const hargasewa = $('#harga')
        const total = $('#total-sewa')
        const potongan = $('#potongan')
        const bayar = $('#total-bayar')

        switch (kodeJenis) {
          case 'A':
            jenisB.val('Majalah')
            hargasewa.val(3000)
            break;
          case 'B':
            jenisB.val('Komik')
            hargasewa.val(4000)
            break;
          case 'C':
            jenisB.val('Novel')
            hargasewa.val(5000)
            break
          default:
            alert("Jenis Buku Tidak ditemukan")
            break;
          }      
        total.val(waktuPinjam * hargasewa.val())
        if (waktuPinjam > 5) {
          potongan.val((waktuPinjam - 5) * total.val() * 0.05)
        }

        bayar.val(total.val() - potongan.val())

      })
    })
  </script>
</body>

</html>