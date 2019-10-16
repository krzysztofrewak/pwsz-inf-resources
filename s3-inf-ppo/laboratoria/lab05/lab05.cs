using System;
using System.Collections.Generic;

public class Book
{
    protected string title;

    public Book(string title)
    {
        this.title = title;
    }

    public string GetTitle()
    {
        return this.title;
    }

    public virtual string GetType()
    {
        return "ksi¹¿ka";
    }
}

public class Novel : Book
{
    public Novel(string title) : base(title) { }

    public override string GetType()
    {
        return "powieœæ";
    }
}


public class Library
{
    public List<Novel> novels = new List<Novel>();

    public Library AddNovel(Novel novel)
    {
        novels.Add(novel);
        return this;
    }

    public List<Novel> GetNovels()
    {
        return novels;
    }
}

public class Lab05
{
    public static void Main(string[] args)
    {
        Library library = new Library();
        library.AddNovel(new Novel("Wektor pierwszy"));
        library.AddNovel(new Novel("Gwiazda po gwieŸdzie"));
        library.AddNovel(new Novel("Jednocz¹ca Moc"));

        for (int i = 0; i < library.novels.Count; i++)
        {
            Novel novel = library.GetNovels()[i];
            Console.WriteLine(novel.GetType() + " || " + novel.GetTitle());
        }

        Console.ReadKey();
    }
}
