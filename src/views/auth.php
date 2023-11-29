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
    <label for="code">Codi d'Identificació:</label>
    <input type="password" id="codi" name="code" required>
    <button type="submit" onclick="auth()" >Accedeix</button>
</form>

<div id="result">

</div>

<script>
        function auth() {
            var code = $("#code").val();
            $.ajax({
                type: "POST",
                url: "index.php?r=try",
                data: { code: code},
                success: function(response) {
                    $("#result").html(response);
                }
            });
        }
    </script>



</body>
</html>
