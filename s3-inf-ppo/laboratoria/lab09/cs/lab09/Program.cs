using lab09.Animals;
using System;

namespace lab09
{
    class Program
    {
        static void Main(string[] args)
        {
            Zoo zoo = new Zoo("Zoo Legnica");

            zoo.AddAnimal(new Lion("Simba"))
                .AddAnimal(new Lion("Mufasa"))
                .AddAnimal(new Elephant("Dumbo"));

            zoo.FeedAnimals("water");
            Console.ReadKey();
        }
    }
}
