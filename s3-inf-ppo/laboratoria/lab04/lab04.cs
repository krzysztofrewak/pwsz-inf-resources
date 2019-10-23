using System;
using System.Collections.Generic;

public class WinnerWasCalled : Exception { }

public class Log
{
    public static void Info(string message = "")
    {
        Console.WriteLine(message);
    }
}

public class Dice
{
    public Random rand = new Random();

    public int Roll()
    {
        int result = (rand.Next(6) + 1);
        Log.Info("Dice roll: " + result);

        return result;
    }
}

public class Pawn
{
    public int position;
    public string name;

    public Pawn(string name)
    {
        this.name = name;
        this.position = 0;

        Log.Info(name + " joined the game.");
    }
}

public class Board
{
    const int maxPosition = 100;

    public List<Pawn> pawns;
    public Dice dice;
    public Pawn winner;
    public int turnsCounter;

    public Board()
    {
        this.turnsCounter = 0;
        this.pawns = new List<Pawn>();
    }

    public void PerformTurn()
    {
        this.turnsCounter++;
        Log.Info();
        Log.Info("Turn " + this.turnsCounter);

        for (int i = 0; i < this.pawns.Count; i++)
        {
            int rollResult = this.dice.Roll();
            Pawn pawn = this.pawns[i];
            pawn.position += rollResult;

            Log.Info(pawn.name + " new position: " + pawn.position);

            if (pawn.position >= maxPosition)
            {
                this.winner = pawn;
                throw new WinnerWasCalled();
            }
        }
    }
}

public class Lab04
{
    public static void Main(string[] args)
    {
        Board board = new Board();
        board.dice = new Dice();
        board.pawns.Add(new Pawn("Luke Skywalker"));
        board.pawns.Add(new Pawn("Darth Vader"));

        try
        {
            while (true)
            {
                board.PerformTurn();
            }
        }
        catch (WinnerWasCalled ex)
        {
            Log.Info();
            Log.Info(board.winner.name + " won");
            Console.ReadKey();
        }
    }
}


