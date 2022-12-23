
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
</head>
<body>
<p>i a`m About</p>
<?php foreach ($data as $avtor => $value) :?>
    <p><b><?= $avtor ?> - <?= $value ?></b></p>
<?php endforeach; ?>
</body>
</html>
