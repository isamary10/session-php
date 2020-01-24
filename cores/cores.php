<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php session_start(); ?>
</head>
<body style="background-color:<?php if(isset($_SESSION['cor'])) {echo $_SESSION['cor'];} ?>">
    <form action="./cor-escolhida.php" method="post">
        <select name="cor">
            <option value="blue">Azul</option>
            <option value="pink">Rosa</option>
            <option value="purple">Roxo</option>
        </select>
        <button type="submit">Escolher</button>
        </form>
</body>
</html>