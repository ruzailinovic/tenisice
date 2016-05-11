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
    $sql = "DELETE FROM tenisice WHERE  id=" . $_GET['id'];
    $result = $conn->query($sql);

    header('Location: index.php');
    ?>


</p>
</body>
</html>
