<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hasil Perhitungan Harga Barang</h2>
    <P>Nama Pembeli: <?php echo $namapembeli?></P>
    <P>Kode Barang: <?php echo $kodebarang?></P>
    <P>Nama Barang: <?php echo $namabarang?></P>
    <P>Harga Barang: <?php echo number_format($hargabarang, 0,",",".")?></P>
    <P>Banyak Barang: <?php echo $banyakbarang ?></P>
    <P>Jumlah Barang: <?php echo number_format($jumlahbayar, 0,",",".")?></P>
</body>
</html>