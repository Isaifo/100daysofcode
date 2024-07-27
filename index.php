
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

        });
     require "index.view.php";
  
   

