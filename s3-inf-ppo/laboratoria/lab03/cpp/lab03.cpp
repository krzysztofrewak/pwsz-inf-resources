#include <iostream>
#include <stdlib.h>
#include <time.h>

using namespace std;

class Point {
	public:
		float x;
		float y;
		
		Point(float x, float y) {
			this->x = x;
			this->y = y;
			cout << "Point [" << this->x << ", " << this->y << "] has been created." << endl;
		}
		
		void movePoint(float xAxisShift, float yAxisShift) {
			this->x += xAxisShift;
			this->y += yAxisShift;
		}
};

class Circle {
	public:
		Point center;
		float radius;
		
		Circle(Point center, float radius): center(center) {
			this->center = center;
			this->radius = radius;
		}
		
		void printCoordinates() {
			cout << "x: " << this->center.x << endl << "y: " << this->center.y << endl;
		}
};

int main() {
	srand(time(NULL));
	
	float inputX = 0, inputY = 0;
	float inputRadius = 5;
	
	Point centerPoint = Point(inputX, inputY);
	Circle circle = Circle(centerPoint, inputRadius);
	
	circle.center.movePoint(rand() % 10, rand() % 10);
	circle.printCoordinates();
	
	return 0;
}
