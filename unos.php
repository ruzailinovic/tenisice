<?php require('db.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tenisice</title>
</head>

<body>
<h1>
    Tenisice
</h1>

<p>
<form action="insert.php" method="post">
    Model:<br>
    <input type="text" name="model"><br>
    Broj:<br>
    <input type="text" name="broj"><br>
    Boja:<br>
    <input type="text" name="boja"><br>
    Link:<br>
    <input type="text" name="link"><br>
    <input type="submit" value="Unesi tenisice">
</form>

</p>
</body>
</html>