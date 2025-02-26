<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            echo "Hello World";
        ?>
    </h1>
    <h2>
        <?php
            echo "Hello World"
        ?>
    </h2>
    <h3>
        <?php
            echo "Hello World"
        ?>
    </h3>
    <h4>
        <?php 
            echo "Hello World"
        ?>
    </h4>

    <?php 
        $greeting = "Halo";
        $subjek = "Ncuk";

        echo "$greeting $subjek";

        echo $greeting . " " . $subjek;
    ?>

    <?php
        $greeting = "tes";
        $subjek = "orang";
        echo $greeting . " " . $subjek;
    ?>
</body>
</html>