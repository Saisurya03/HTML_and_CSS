<?php
 $books = array(
     "Harry Potter" => "JK Rowling",
     "Sherlock Holmes" => "Sir Aurther Conan Doyle",
     "Prisoner of Birth" => "Jefferey Archer",
     "DaVinci Code" => "Dan Brown",
 );

foreach($books as $bookname => $author)
    echo "<b>Book: </b>".$bookname.", <b>Author</b>: ".$author."<br>";
?>