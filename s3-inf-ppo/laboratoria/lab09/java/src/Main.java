import Zoo.Animals.Elephant;
import Zoo.Animals.Lion;
import Zoo.Zoo;

public class Main {

    public static void main(String[] args) {
        Zoo zoo = new Zoo("Zoo Legnica");

        zoo.addAnimal(new Lion("Simba"))
            .addAnimal(new Lion("Mufasa"))
            .addAnimal(new Elephant("Dumbo"));

        zoo.feedAnimals("water");
    }
}
