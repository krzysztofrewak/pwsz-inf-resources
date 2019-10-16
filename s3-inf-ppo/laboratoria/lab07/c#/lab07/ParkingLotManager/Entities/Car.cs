using lab07.ParkingLotManager.Interfaces;

namespace lab07.ParkingLotManager.Entities
{
    class Car : IEntity
    {
        private string plate;

        public Car(string plate)
        {
            this.plate = plate;
        }

        public bool CanEnter()
        {
            return true;
        }

        public string Identify()
        {
            return "Car with plate number " + this.plate;
        }
    }
}
