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
    <?php
    $sql = "INSERT INTO tenisice  (model, broj) VALUES('" . $_POST['model'] . "', '" . $_POST['broj'] . "')";
    $result = $conn->query($sql);

    echo('Tenisice  su unesene!<br>');
    echo('<a href="index.php">Povratak na prikaz tenisica</a>');
    ?>


</p>
</body>
</html>
