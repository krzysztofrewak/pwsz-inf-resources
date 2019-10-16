using lab07.ParkingLotManager.Interfaces;
using System;

namespace lab07.ParkingLotManager.Entities
{
    class Pedestrian : IEntity
    {
        private string name = "";

        public Pedestrian() { }

        public Pedestrian(string name)
        {
            this.name = name;
        }

        public bool CanEnter()
        {
            return true;
        }

        public string Identify()
        {
            return !String.IsNullOrEmpty(this.name) ? this.name : "Unknown pedestrian";
        }
    }
}
