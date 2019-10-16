using System;
using System.Collections.Generic;

public class Student
{
    public string studentNo;

    public void SetStudentNo(string studentNo)
    {
        this.studentNo = studentNo;
    }

    public string GetStudentNo()
    {
        return this.studentNo;
    }
}

public class Lab02b
{
    const int students_count = 10;
    static Random rand = new Random();

    public static void Main(string[] args)
    {
        List<Student> students = new List<Student>();

        for (int i = 0; i < students_count; i++)
        {
            Student student = new Student();
            student.SetStudentNo(GetRandomStudentNumber());
            students.Add(student);
        }

        Console.WriteLine("Students group have been filled.");

        for (int i = 0; i < students.Count; i++)
        {
            Student student = students[i];
            Console.WriteLine(student.GetStudentNo());
        }
        Console.ReadKey();
    }

    protected static string GetRandomStudentNumber()
    {
        return (rand.Next(2000) + 38000).ToString();
    }
}