package Notebook.Entries;

import Notebook.Interfaces.NotebookEntry;
import Notebook.Traits.Slugger;

public class WatchedMovie implements NotebookEntry, Slugger {

    private String title;

    public WatchedMovie(String title) {
        this.title = title;
    }

    @Override
    public String getSlug() {
        return getSlug(title);
    }

}
