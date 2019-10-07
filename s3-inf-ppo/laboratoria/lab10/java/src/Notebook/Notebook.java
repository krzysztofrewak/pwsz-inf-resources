package Notebook;

import Notebook.Interfaces.NotebookEntry;

import java.util.ArrayList;

final public class Notebook {

    private ArrayList<NotebookEntry> entries = new ArrayList<>();

    Notebook save(NotebookEntry entry) {
        entries.add(entry);
        return this;
    }

    int countEntries() {
        return entries.size();
    }

    Iterable<NotebookEntry> getAll() {
        return entries;
    }

}
