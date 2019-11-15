#include "Library.h"

Library::Library(string name) {
	this->name = name;
}

Library& Library::operator +=(const Book &book) {
	this->books.push_back(book);
	return *this;
}

void Library::print() {
	cout << this->name << endl;
	for(int i = 0; i < this->books.size(); i++) {
		this->books.at(i).print();
	}
}
