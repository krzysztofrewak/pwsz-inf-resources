using System;

public class Point
{
    public float x;
    public float y;

    public Point(float x, float y)
    {
        this.x = x;
        this.y = y;
        Console.WriteLine("Point [" + x + ", " + y + "] has been created.");
    }

    public void MovePoint(float xAxisShift, float yAxisShift)
    {
        this.x += xAxisShift;
        this.y += yAxisShift;
    }
}

public class Circle
{
    public Point center;
    public float radius;

    public Circle(Point center, float radius)
    {
        this.center = center;
        this.radius = radius;
    }

    public void PrintCoordinates()
    {
        Console.WriteLine("x: " + this.center.x);
        Console.WriteLine("y: " + this.center.y);
    }
}

public class Program
{
    public static Random rand = new Random();

    public static void Main(string[] args)
    {
        float inputX = 0;
        float inputY = 0;
        float inputRadius = 5;

        Point point = new Point(inputX, inputY);
        Circle circle = new Circle(point, inputRadius);

        circle.center.MovePoint(Program.GetRandomNumber(), Program.GetRandomNumber());
        circle.PrintCoordinates();
        Console.ReadKey();
    }

    public static float GetRandomNumber()
    {
        return rand.Next(10);
    }
}