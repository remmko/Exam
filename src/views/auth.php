<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pàgina d'Identificació</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <link rel="stylesheet" href="../../style/auth.css">
</head>
<body>

<?php include "mainmenu.php"?>

<form id="loginForm" method="POST" action="index.php?r=try">
    <label for="codi">Codi d'Identificació:</label>
    <input type="password" id="codi" name="codi" required>
    <button type="submit" >Accedeix</button>
</form>



</body>
</html>
