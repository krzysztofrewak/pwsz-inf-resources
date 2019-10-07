package Zoo.Animals;

import Zoo.Log;

import java.util.Arrays;

abstract public class Animal {

    private String name;
    private boolean hungry = true;

    Animal(String name) {
        this.name = name;
    }

    abstract String[] getDiet();

    public void feed(String food) throws Exception {
        if(!Arrays.asList(getDiet()).contains(food)) {
            throw new Exception(getName() + " doesn't eat " + food + ".");
        }

        hungry = true;
        Log.info(getName() + " fed.");
    }

    public String getName() {
        return getSpecies() + " " + name;
    }

    private String getSpecies() {
        return getClass().getSimpleName();
    }

}
