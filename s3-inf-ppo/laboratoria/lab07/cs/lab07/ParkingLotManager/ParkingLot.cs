using lab07.ParkingLotManager.Entities;
using lab07.ParkingLotManager.Interfaces;
using System.Collections.Generic;

namespace lab07.ParkingLotManager
{
    class ParkingLot
    {
        private List<IEntity> entitiesOnProperty = new List<IEntity>();
        private int carsOnProperty = 0;

        public bool CheckIfCanEnter(IEntity entity)
        {
            return entity.CanEnter();
        }

        public void LetIn(IEntity entity)
        {
            entitiesOnProperty.Add(entity);
            Log.Info(entity.Identify() + " let in.");

            if (entity is Car)
            {
                this.carsOnProperty++;
            }
        }

        public int CountCars()
        {
            return this.carsOnProperty;
        }
    }
}
