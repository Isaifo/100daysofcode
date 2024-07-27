

   
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">

    <title>VEM ISA BACKEND</title>
</head>
<body>
   
   <?php
        $books = [
            [
                'name' => 'Do Androids Dream of Electric Sheep?', 
                'author' => 'Philip K. Dick',
                'releaseYear' => 1968, 
                'purchaseUrl' => 'www.bookurl.com',
               
            ],


            [
                'name' => 'Project Hail Mary', 
                'author' => 'Andy Weir',
                'releaseYear' => 2021, 
                'purchaseUrl' => 'www.bookurl.com',
               
            ],
            [
                'name' => 'The martian', 
                'author' => 'Andy Weir',
                'releaseYear' => 2011, 
                'purchaseUrl' => 'www.bookurl.com',
               
            ],
        ];



        $filteredBooks = array_filter($books, function($book)
        
        {   
            return $book['author'] === 'Andy Weir';

        }
        
        )
     
  ?>
  <ul>


      <?php foreach($filteredBooks as $book) : ?>
  
        <li>
        
            <a href="<?= $book['purchaseUrl'] ?>">
            
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            

            
            </a>
        
        </li>

        <?php endforeach; ?>
        
       </ul>

  </body>
</html>

