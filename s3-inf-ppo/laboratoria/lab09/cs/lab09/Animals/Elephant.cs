using System.Collections.Generic;

namespace lab09.Animals
{
    class Elephant : Animal
    {
        public Elephant(string name) : base(name)
        {
        }

        public override List<string> GetDiet()
        {
            return new List<string>()
            {
                "water",
                "fruits",
                "vegetables"
            };
        }
    }
}
