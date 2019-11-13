using System;
using System.Collections.Generic;

namespace lab09.Animals
{
    abstract class Animal
    {
        public string Name { get; set; }
        public bool Hungry { get; set; } = true;

        public Animal(string name)
        {
            Name = name;
        }

        public abstract List<string> GetDiet();

        public void Feed(string food)
        {
            if (!GetDiet().Contains(food))
            {
                throw new Exception(GetName() + " doesn't eat " + food + ".");
            }

            Hungry = true;
            Log.Info(GetName() + " fed.");
        }

        public string GetName()
        {
            return GetSpecies() + " " + Name;
        }

        private string GetSpecies()
        {
            return GetType().Name;
        }
    }
}
