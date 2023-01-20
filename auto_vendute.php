<?php
    require_once 'connection.php';
    $sql = "SELECT * from auto INNER JOIN vendite on idAuto = idAutoVenduta";
    $all_car = $pdo->query($sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    while($row = $all_car->fetch()){

    ?>
    <div class="card">
        <div class="left">
        <img src="<?php echo $row["img"]; ?>"/>
        </div>
        <div class="right">
            <h1><?php echo $row["marca"]; ?></h1>
            <H1><?php echo $row["modello"]; ?></h1>
        </div>
    </div>
    <br>

    <?php
    }

    ?>

    
</body>
</html>