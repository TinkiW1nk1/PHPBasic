
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gallery</title>
</head>
<body>
<p>i a`m Gallary</p>
<?php foreach ($data as $key => $value) : ?>
    <?= $key?>
    <br>
    <?= $value ?>
    <br>
<?php endforeach; ?>
</body>
</html>
