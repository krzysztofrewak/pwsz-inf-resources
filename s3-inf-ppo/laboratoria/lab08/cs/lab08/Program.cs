using System;

namespace lab08
{
    class Program
    {
        static void Main(string[] args)
        {
            Library library = new Library("Biblioteka nr 1");

            library += new Book("Wektor pierwszy", "R. A. Salvatore");
            library += new Book("Mroczny przypływ I: Szturm", "Michael Stackpole");
            library += new Book("Mroczny przypływ II: Inwazja", "Michael Stackpole");
            library += new Book("Agenci chaosu I: Próba bohatera", "James Luceno");

            library.Print();
            Console.ReadKey();
        }
    }
}
