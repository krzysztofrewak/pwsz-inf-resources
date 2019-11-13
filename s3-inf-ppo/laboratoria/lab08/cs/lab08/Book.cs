using System;

namespace lab08
{
    class Book
    {
        public string Title { get; set; }
        public string Author { get; set; }

        public Book(string title, string author)
        {
            Title = title;
            Author = author;
        }
        public void Print()
        {
            Console.WriteLine(Author + ", \"" + Title + "\"");
        }
    }
}
