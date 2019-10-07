#ifndef LIBRARY_H
#define LIBRARY_H

#include <iostream>
#include <string>
#include <vector>

#include "book.h"

using namespace std;

class Library {
	
	public:
		Library(string name);
		Library& operator +=(const Book &book);
		
		void print();
		
	protected:
		string name;
		vector<Book> books;
		
};

#endif
