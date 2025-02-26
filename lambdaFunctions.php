<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lambda Functions</title>
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
                'releaseYear' => 2000,
                'purchaseUrl' => 'https://tokopedia.com'
            ],
            [
                'title' => 'Algoritma Pemrograman',
                'author' => 'Rinaldi Munir',
                'price' => '55000',
                'releaseYear' => 2005,
                'purchaseUrl' => 'https://tokopedia.com'
            ],
            [
                'title' => 'An Introduction to Statistical Learning',
                'author' => 'Gareth James',
                'price' => '70000',
                'releaseYear' => 2010,
                'purchaseUrl' => 'https://tokopedia.com'
            ]
        ];


        // function filter($items, $fn) 
        // {
        //     $filteredItems = [];

        //     foreach ($items as $item) {
        //         if ($fn($item)){
        //             $filteredItems[] = $item;
        //         }
        //     }


        //     return $filteredItems;
        // }


        $filteredBooks = array_filter($books, function ($book){
            return $book['releaseYear'] === 2005;
        });
    ?>


    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['title']; ?> (<?= $book['releaseYear']; ?>) - By  <?= $book['author']; ?> 
                </a>
            </li>
        <?php endforeach; ?>
    </ul>



    <script src="js/bootstrap.js"></script>
</body>
</html>