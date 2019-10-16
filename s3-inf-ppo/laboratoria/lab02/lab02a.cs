using System;
using System.Collections.Generic;

public class Lab02a
{
    static Random rand = new Random();
    const int students_count = 10;

    public static void Main(string[] args)
    {
        List<string> students = new List<string>();

        for (int i = 0; i < students_count; i++)
        {
            students.Add(GetRandomStudentNumber());
        }

        Console.WriteLine("Students group have been filled.");

        for (int i = 0; i < students.Count; i++)
        {
            Console.WriteLine(students[i]);
        }
        Console.ReadKey();
    }

    protected static string GetRandomStudentNumber()
    {
        return (rand.Next(2000) + 38000).ToString();
    }
}