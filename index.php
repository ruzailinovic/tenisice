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
    $sql = "SELECT id, model, broj FROM tenisice";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        echo('<table>');
        while($row = $result->fetch_assoc()) {
            echo('<tr>');
            echo('<td>' . $row['id'] . '</td>');
            echo('<td>' . $row['model'] . '</td>');
            echo('<td>' . $row['broj'] . '</td>');
            echo('<td><a href ="delete.php?id='. $row['id'] . '"><img src="delete.png"></a></td>');
            echo('<td><a href ="edit.php?id='. $row['id'] . '"><img src="edit_16x16.gif"></a></td>');
            echo('</tr>');
        }

        echo('</table>');
    } else {
        echo "Nema tenisica";
    }
    $conn->close();

    ?>

</p>
<p>
    <a href="unos.php">Unos novih tenisica</a>
</p>
</body>
</html>