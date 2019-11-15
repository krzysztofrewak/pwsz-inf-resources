using lab09.Animals;
using System;
using System.Collections.Generic;

namespace lab09
{
    sealed class Zoo
    {
        public List<Animal> Animals { get; set; } = new List<Animal>();
        public string Name { get; set; }

        public Zoo(string name)
        {
            Name = name;
            Log.Info(Name + " created.");
        }

        public Zoo AddAnimal(Animal animal)
        {
            Animals.Add(animal);
            Log.Info(animal.Name + " added to zoo.");

            return this;
        }

        public void FeedAnimals(string food)
        {
            Log.Info();
            Log.Info("Feeding started.");

            foreach (Animal animal in Animals)
            {
                try
                {
                    animal.Feed(food);
                }
                catch (Exception ex)
                {
                    Log.Warning(ex.Message);
                }
            }
        }
    }
}
