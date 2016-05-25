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
    $sql ="UPDATE tenisice SET model='".$_POST['model']."', broj='".$_POST['broj']."', boja='".$_POST['boja']."', link='".$_POST['link']."' WHERE id=" . $_POST['id'];
    $result = $conn->query($sql);

    header('Location:index.php');
    ?>


</p>
</body>
</html>
