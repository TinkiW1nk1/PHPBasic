<?php
    $arr = ['Viktor', 'Oleg', 'Nikita', 'Mykola', 'Roma', 'Olga', 'Oles', 'Emma', 'Erika', 'Viktor'];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h4><p>1. Написать HTML форму. Поля должны быть различных типов которые мы разбирали на уроке, но тематика должна быть иная. вывести введенные поля в файле server.php.</p></h4>

    <form action="server.php" method="post" enctype="multipart/form-data">
        <label>First Name</label>
        <input type="text" name="firstName" placeholder="Your Name">
        <br>
        <label>Last Name</label>
        <input type="text" name="lastName" placeholder="Last Name">
        <br>
        <label>Password</label>
        <input type="password" name="password">
        <br>
        <label>Your birthdaytime</label>
        <input type="date" name="birthdaytime">
        <br>
        <label>Your file</label>
        <input type="file" name="file">
        <br>
        <label>Your auto</label><br>
        <label>BMW</label>
        <input type="radio" name="gender" value="BMW">
        <label>Normal auto</label>
        <input type="radio" name="gender" value="Normal auto">
        <br>
        <label>liked</label> <br>
        <label>Mercedec</label>
        <input type="checkbox" name="hobby[]" value="Mercedes">
        <label>BMW</label>
        <input type="checkbox" name="hobby[]" value="BMW">
        <label>Volvo</label>
        <input type="checkbox" name="hobby[]" value="Volvo">
        <br>
        <input type="submit" value="Send">
    </form>
<h4><p>2. Написать простой массив список (на 5-10 элементов), сформировать с него ненумерованный список.</p></h4>
<ul>
    <?php
        foreach ($arr as $name){
         echo "<li>$name</li>";
        }
    ?>
</ul>
</body>
</html>
