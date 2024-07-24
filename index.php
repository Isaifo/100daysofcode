<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">

    <title>Demo</title>
</head>
<body>
    <h1>Livros recomendados</h1>

    <?php
        $books = [
            [
                'name' => 'The Dark Forest', // key points to value
                'purchaseUrl' => 'www.bookurl.com',
                'year' =>   '2003'
            ],



            [
                'name' => 'The Three-Body Problem',
                'purchaseUrl' => 'www.bookurl.com',
                'year' =>'2006'
            ],
            ];
?>
            <ul>
                <?php foreach ($books as $book) : ?>
                    <li>
                        <a href="<?= $book['purchaseUrl'] ?>">
                            <?= $book['name'] ?>
                        </a>
                        (<?= $book['year'] ?>)
                    </li>
                <?php endforeach; ?>
            </ul>
    
    
   
</body>
</html>