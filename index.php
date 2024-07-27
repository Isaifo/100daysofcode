

   
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


        $filterByAuthor = function ($books, $author)      
        { 
          $filteredBooks = [];


          foreach ($books as $book)
          {   
              if ($book['author'] === $author )
              {
                  $filteredBooks[] = $book;
              }
              
          }

          return $filteredBooks;
        };


        $filteredBooks = $filterByAuthor($books, 'Philip K. Dick');
     
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

