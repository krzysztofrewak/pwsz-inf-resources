using System.Collections.Generic;

namespace lab09.Animals
{
    class Lion : Animal
    {
        public Lion(string name) : base(name)
        {
        }

        public override List<string> GetDiet()
        {
            return new List<string>()
            {
                "water",
                "meat",
                "milk"
            };
        }
    }
}
