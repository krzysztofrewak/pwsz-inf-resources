package Notebook;

import Notebook.Entries.DrankBeer;
import Notebook.Entries.WatchedMovie;
import Notebook.Interfaces.NotebookEntry;

import java.util.Scanner;

final public class Menu {

    private Notebook notebook;

    public Menu(Notebook notebook) {

        this.notebook = notebook;
    }

    public void run() {
        boolean running = true;
        Scanner scanner = new Scanner(System.in);

        while(running) {
            displayMenu();

            write("Wybierz opcję: ");
            switch(scanner.nextLine()) {
                case "1": {
                    write();
                    comment("zanotowano:");
                    for(NotebookEntry item : notebook.getAll()) {
                        write(item.getSlug());
                    }
                    break;
                }
                case "2": {
                    write("Podaj tytuł filmu: ");
                    String title = scanner.nextLine();
                    WatchedMovie movie = new WatchedMovie(title);
                    notebook.save(movie);
                    break;
                }
                case "3": {
                    write("Podaj nazwę piwa: ");
                    String name = scanner.nextLine();
                    write("Podaj nazwę browaru: ");
                    String brewery = scanner.nextLine();
                    DrankBeer beer = new DrankBeer(name, brewery);
                    notebook.save(beer);
                    break;
                }
                case "x": {
                    running = false;
                    break;
                }
                default: {
                    break;
                }
            }
        }
    }

    private void displayMenu() {
        write();
        comment("notatek: ");
        write("[1] wypisz notatki");
        write("[2] zanotuj obejrzany film");
        write("[3] zanotuj wypite piwo");
        write("[x] wyjdź");
    }

    private void write() {
        System.out.println();
    }

    private void write(String $line) {
        System.out.println($line);
    }

    private void comment(String line) {
        write(line);
    }

}
