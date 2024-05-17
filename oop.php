<?php
class Book
{
	// : Add properties as Private
	private $title;
	private $availableCopies;

	public function __construct($title, $availableCopies)
	{
		// : Initialize properties
		$this->title = $title;
		$this->availableCopies = $availableCopies;
	}


	// : Add getTitle method
	public function getTitle()
	{
		return $this->title;
	}


	// : Add getAvailableCopies method
	public function getAvailableCopies()
	{
		return $this->availableCopies;
	}


	// : Add borrowBook method
	public function borrowBook()
	{
		if ($this->availableCopies > 0) {
			$this->availableCopies--;
		} else {
			echo "No available copies of '{$this->title}'\n";
		}
	}


	// : Add returnBook method
	public function returnBook()
	{
		$this->availableCopies++;
	}
}


class Member
{
	// : Add properties as Private
	private $name;


	public function __construct($name)
	{
		// : Initialize properties
		$this->name = $name;
	}


	// : Add getName method
	public function getName()
	{
		return $this->name;
	}


	// : Add borrowBook method
	public function borrowBook($book)
	{
		$book->borrowBook();
	}


	// : Add returnBook method
	public function returnBook($book)
	{
		$book->returnBook();
	}
}



// Usage
// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.

// : Create 2 books with the following properties
//Book 1 - Name: The Great Gatsby, Available Copies: 5.
//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


// : Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");



// : Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);


// : Print Available Copies with their names:
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
