package Zoo.Animals;

public class Elephant extends Animal {

    public Elephant(String name) {
        super(name);
    }

    @Override
    String[] getDiet() {
        return new String[]{"water", "fruits", "vegetables"};
    }

}
