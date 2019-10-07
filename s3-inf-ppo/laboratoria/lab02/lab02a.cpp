#include <iostream>
#include <cstdlib>
#include <string>
#include <sstream>
#include <vector>

using namespace std;

#define STUDENTS_COUNT 10

string getRandomStudentNumber() {
	ostringstream ss;
	int randomNumber = rand() % 2000 + 38000;
	
	ss << randomNumber;
	
	return ss.str();
}

int main() {
	vector<string> students;
	
	for(int i = 0; i < STUDENTS_COUNT; i++) {
		students.push_back(getRandomStudentNumber());
	}
	
	cout  << "Students group have been filled." << endl << endl;
	
	for(int i = 0; i < students.size(); i++) {
		cout << students.at(i) << endl;
	}
	
	return 0;
}

