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
    echo ($_GET['id']);
    $sql = "SELECT id, model, broj FROM tenisice WHERE id=" . $_GET['id'];
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
    } else {
        echo "Nema tenisica";
        die();
    }
    $conn->close();

    ?>
<form action="update.php" method="post">
    Registracija:<br>
    <input type="text" name="model" value="<?php echo ($row['model']); ?> "><br>
    Ime:<br>
    <input type="text" name="broj" value="<?php echo ($row['broj']); ?> "><br>
    <input type="hidden" name="id" value="<?php echo ($row['id']); ?> "><br>
    <input type="submit" value="Unesi tenisice">
</form>

</p>
</body>
</html>