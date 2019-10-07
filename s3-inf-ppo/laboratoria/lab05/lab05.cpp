#include <iostream>
#include <stdlib.h>
#include <time.h>
#include <vector>
#include <string>

using namespace std;

class Book {
	protected:
		string title;
	
	public:			
		Book(string title) {
			this->title = title;
		}
		
		string getTitle() {
			return title;
		}
		
		virtual string getType() const = 0;
};

class Novel : public Book {

	public:	
		Novel(string title) : Book(title) {}
		
		string getType() const {
			return "powieœæ";
		}
	
};

class Library {
	public:
		vector<Novel> novels;
		
		Library* addNovel(Novel novel) {
			this->novels.push_back(novel);
			return this;
		}
		
		vector<Novel> getNovels() {
			return novels;
		}
};

int main() {
	setlocale(LC_ALL, "");
	
	Library library = Library();
	library.addNovel(Novel("Wektor pierwszy"));
	library.addNovel(Novel("Gwiazda po gwieŸdzie"));
	library.addNovel(Novel("Jednocz¹ca Moc"));
	
	for(int i = 0; i < library.novels.size(); i++) {
		Novel novel = library.getNovels().at(i);
		cout << novel.getType() << " || " << novel.getTitle() << endl;
	}
	
	return 0;
}

