<?php
	include 'Books.php';
	$book = new Book('My PHP Project', 99.9);
	//$book->setTitle("PHP With MYSQL SERVER");
	//echo $book->getTitle();
	//echo $book->getPrice();
	//echo $book->getAllInformation();
	//echo $book->getTitle() . ' ' . $book->getPrice();
	//echo Book::getStore();
	
	$mag1 = new Magazine('PC World', 4.99, 'Octuber', '2016');
	echo $mag1->getYear();
?>

