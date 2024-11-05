<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Looping</title>
</head>

<body>
  <h1>Looping</h1>
  <ul>
    <?php
    foreach ($items as $item) { ?>
      <li><?php echo $item ?></li>
    <?php } ?>
  </ul>
</body>

</html>