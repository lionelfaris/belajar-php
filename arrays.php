<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays </title>
    <link href="css/bootstrap.css" rel="stylesheet">


    <style></style>
</head>

<body>
    <h1>Buku Rekomendasi</h1>

    <?php
        $books = [
            "Essential Grammar in Use",
            "Algoritma Pemrograman",
            "An Introduction to Statistical Learning",
            "Majalah Bobo"
        ];
    ?>


    <ul>
        <?php foreach ($books as $book){
            echo "<li>{$book}™</li>";
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li><?php echo $book?></li> 
            <!-- bisa juga pake ini lebih singkat sintaksnya <li><?= $book ?></li> -->
        <?php endforeach; ?>
    </ul>


    <div class="container mt-4">
        <h1 class="text-primary">Buku Rekomendasi</h1>
        <ul class="list-group">
            <?php foreach ($books as $book) : ?>
                <li class="list-group-item"><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    


    
    <script src="js/bootstrap.js"></script>
</body>
</html>