#include <iostream>
#include <string>

#include "Library.h"
#include "Book.h"

int main() {
	setlocale (LC_ALL, "");
	
	Library library = Library("Biblioteka nr 1");
	library += Book("Wektor pierwszy", "R. A. Salvatore");
	library += Book("Mroczny przyp³yw I: Szturm", "Michael Stackpole");
	library += Book("Mroczny przyp³yw II: Inwazja", "Michael Stackpole");
	library += Book("Agenci chaosu I: Próba bohatera", "James Luceno");
	
	library.print();
	
	return 0;
}

