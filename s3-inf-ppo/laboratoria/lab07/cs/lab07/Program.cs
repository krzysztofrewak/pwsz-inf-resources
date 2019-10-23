using lab07.ParkingLotManager;
using lab07.ParkingLotManager.Interfaces;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace lab07
{
    class Program
    {
        static void Main(string[] args)
        {
            List<IEntity> queue = QueueGenerator.Generate();
            ParkingLot parking = new ParkingLot();

            Log.Info("There's " + parking.CountCars() + " cars in the parking lot");
            Log.Info();

            foreach(IEntity entity in queue)
            {
                if (parking.CheckIfCanEnter(entity))
                {
                    parking.LetIn(entity);
                }
            }

            Log.Info();
            Log.Info("There's " + parking.CountCars() + " cars in the parking lot");
            Console.ReadKey();
        }
    }
}
