package Notebook.Entries;

import Notebook.Interfaces.NotebookEntry;
import Notebook.Traits.Slugger;

public class DrankBeer implements NotebookEntry, Slugger {

    private String name;
    private String brewery;

    public DrankBeer(String name, String brewery) {
        this.name = name;
        this.brewery = brewery;
    }

    @Override
    public String getSlug() {
        return getSlug(brewery + " " + name);
    }

}
