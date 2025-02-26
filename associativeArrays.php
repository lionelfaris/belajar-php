<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <h1><mark>Buku Rekomendasi</mark></h1>

    <?php
        $books = [
            [
                'title' => 'Essential Grammar in Use',
                'author' => 'Raymond Murphy',
                'price' => '75000',
                'purchaseUrl' => 'https://tokopedia.com'
            ],
            [
                'title' => 'Algoritma Pemrograman',
                'author' => 'Rinaldi Munir',
                'price' => '55000',
                'purchaseUrl' => 'https://tokopedia.com'
            ],
            [
                'title' => 'An Introduction to Statistical Learning',
                'author' => 'Gareth James',
                'price' => '70000',
                'purchaseUrl' => 'https://tokopedia.com'
            ]
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['title']; ?> 
                </a>
            </li>
        <?php endforeach; ?>
    </ul>




    <script src="js/bootstrap.js"></script>
</body>
</html>