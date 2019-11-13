#include "Book.h"

Book::Book(string title, string author) {
	this->title = title;
	this->author = author;
}

void Book::print() {
	cout << this->author << ", \"" << this->title << "\"" << endl;
}
