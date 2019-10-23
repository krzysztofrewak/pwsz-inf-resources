<?php

final class Library {

	protected $books;

	public function addNovel(Novel $novel): self {
		$this->books[] = $novel;
		return $this;
	}

	public function getBooks(): array {
		return $this->books;
	}

}

abstract class Book {

	protected $title;

	public function __construct(string $title) {
		$this->title = $title;
	}

	public function getTitle(): string {
		return $this->title;
	}

	abstract public function getType(): string;

}

class Novel extends Book {

	public function getType(): string {
		return "powieść";
	}

}

$library = new Library();
$library->addNovel(new Novel("Wektor pierwszy"));
$library->addNovel(new Novel("Gwiazda po gwieździe"));
$library->addNovel(new Novel("Jednocząca Moc"));

foreach($library->getBooks() as $book) {
	echo $book->getType();
	echo " || ";
	echo $book->getTitle();
	echo PHP_EOL;
}
