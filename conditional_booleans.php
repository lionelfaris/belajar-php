<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional and Booleans</title>

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: monospace;
        }
        
    </style>
</head>

<body>
    <?php
        $judulBuku = "Essential Grammar in Use";
        $baca = true;
        

        if ($baca) {
            $pesan = "Kamu sudah baca buku $judulBuku";
        } else {
            $pesan = "Kamu belum baca buku $judulBuku";
        }
    ?>

    <h1>
        <?= $pesan ?>
    </h1>
</body>
</html>