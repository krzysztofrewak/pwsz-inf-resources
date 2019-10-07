import Notebook.Menu;
import Notebook.Notebook;

public class Main {

    public static void main(String[] args) {
        Notebook notebook = new Notebook();

        Menu menu = new Menu(notebook);
        menu.run();
    }
}
