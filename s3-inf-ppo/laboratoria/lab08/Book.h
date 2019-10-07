#ifndef BOOK_H
#define BOOK_H

#include <iostream>
#include <string>

using namespace std;

class Book {
	
	public:
		Book(string title, string author);
		void print();
		
	protected:
		string title;
		string author;
};

#endif
