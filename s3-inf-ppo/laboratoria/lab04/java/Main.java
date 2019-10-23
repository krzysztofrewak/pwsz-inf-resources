import java.util.ArrayList;
import java.util.Random;

class WinnerWasCalled extends Exception {
}

class Log {

	public static void info() {
		System.out.println("");
	}

	public static void info(String message) {
		System.out.println(message);
	}

}

class Dice {

	public int roll() {
		Random rand = new Random();
		int result = rand.nextInt(6) + 1;

		Log.info("Dice roll: " + result);
		return result;
	}

}

class Pawn {

	public int position;
	public String name;

	public Pawn(String name) {
		this.position = 0;
		this.name = name;
		
		Log.info(this.name + " joined the game.");
	}

}

class Board {

	public static int max_position = 100;

	public ArrayList<Pawn> pawns;
	public Dice dice;
	public Pawn winner;
	public int turnsCounter;

	public Board() {
		this.pawns = new ArrayList<Pawn>();
		this.dice = null;
		this.winner = null;
		this.turnsCounter = 0;
	}

	public void performTurn() throws WinnerWasCalled {
		this.turnsCounter++;
		Log.info();
		Log.info("Turn " + this.turnsCounter);

		for(Pawn pawn : this.pawns) {
			int rollResult = this.dice.roll();
			pawn.position += rollResult;
			Log.info(pawn.name + " new position: " + pawn.position);

			if(pawn.position >= Board.max_position) {
				this.winner = pawn;
				throw new WinnerWasCalled();
			}
		}
	}

}

public class Main {

	public static void main(String[] args) {
		Board board = new Board();
		board.dice = new Dice();
		board.pawns.add(new Pawn("Luke Skywalker"));
		board.pawns.add(new Pawn("Darth Vader"));

		try {
			while(true) {
				board.performTurn();
			}
		} catch(WinnerWasCalled exception) {
			Log.info();
			Log.info(board.winner.name + " won.");
		}
	}

}
