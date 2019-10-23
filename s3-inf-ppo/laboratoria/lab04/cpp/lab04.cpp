#include <iostream>
#include <stdlib.h>
#include <time.h>
#include <vector>
#include <math.h>
#include <string>
#include <sstream>

using namespace std;

class Log {
	public:
		static void info(string message = "") {
			cout << message << endl;
		}
};

class Dice {
	public:		
		int roll() {
			int result = (rand() % 6) + 1;
			
			ostringstream ss;
			ss << "Dice roll: " << result;
			Log::info(ss.str());
			
			return result;
		}
};

class Pawn {
	public:
		int position;
		string name;
		
		Pawn() {}
		
		Pawn(string name) {
			this->name = name;
			this->position = 0;
			
			Log::info(name + " joined the game.");
		}
};

class Board {
	public:
		static const int maxPosition = 100;
		
		vector<Pawn> pawns;
		Dice dice;
		Pawn winner;
		int turnsCounter;
		
		Board() {
			this->turnsCounter = 0;
		}
		
		void performTurn() {
			this->turnsCounter++;
			
			ostringstream ss;
			ss << "Turn " << this->turnsCounter;
			Log::info();
			Log::info(ss.str());
			
			for(int i = 0; i < this->pawns.size(); i++) {
				int rollResult = this->dice.roll();
				Pawn &pawn = this->pawns.at(i);
				pawn.position += rollResult;
				
				ostringstream ss;
				ss << pawn.name << " new position: " << pawn.position;
				Log::info(ss.str());
								
				if(pawn.position >= this->maxPosition) {
					this->winner = pawn;
					throw "Winner was called!";
				}
			}
		}
};

int main() {
	srand(time(NULL));
	
	Board board = Board();
	board.dice = Dice();
	board.pawns.push_back(Pawn("Luke Skywalker"));
	board.pawns.push_back(Pawn("Darth Vader"));
	
	try {
		while(true) {
			board.performTurn();
		}
	} catch(const char* exception) {
		Log::info();
		Log::info(board.winner.name + " won");
	}
	
	return 0;
}


