import java.util.ArrayList;

final class Library {

	protected ArrayList<Novel> books = new ArrayList<Novel>();

	public Library addNovel(Novel novel) {
		this.books.add(novel);
		return this;
	}

	public ArrayList<Novel> getBooks() {
		return this.books;
	}

}

abstract class Book {

	protected String title;

	public Book(String title) {
		this.title = title;
	}

	public String getTitle() {
		return this.title;
	}

	abstract public String getType();

}

class Novel extends Book {

	public Novel(String title) {
		super(title);
	}

	public String getType() {
		return "novel";
	}

}


public class Main {

	public static void main(String[] args) {
		Library library = new Library();
		library.addNovel(new Novel("The Vector Prime"));
		library.addNovel(new Novel("Star by Star"));
		library.addNovel(new Novel("The Unifying Force"));

		for(Novel book : library.getBooks()) {
			System.out.println(book.getType() + " || " + book.getTitle());
		}
	}

}
