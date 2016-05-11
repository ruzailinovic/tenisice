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
    $sql ="UPDATE tenisice SET model='".$_POST['model']."', ime='".$_POST['broj']."' WHERE id=" . $_POST['id'];
    $result = $conn->query($sql);

    header('Location:index.php');
    ?>


</p>
</body>
</html>