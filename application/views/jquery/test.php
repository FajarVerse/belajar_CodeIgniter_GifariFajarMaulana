<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contoh Pemakaian Query</title>
  <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
</head>

<body>
  <div id="test">
    <button>
      Klik Saya
    </button>
  </div>

  <script>
    $(document).ready(function() {
      $('#test').click(function() {
        alert("Hallo Selamat Datang di JQUERY")
      })
    })
  </script>
</body>

</html>