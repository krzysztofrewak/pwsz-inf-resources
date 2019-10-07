package Zoo.Animals;

public class Lion extends Animal {

    public Lion(String name) {
        super(name);
    }

    @Override
    String[] getDiet() {
        return new String[]{"water", "meat", "milk"};
    }

}
