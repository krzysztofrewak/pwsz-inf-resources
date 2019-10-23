using lab07.ParkingLotManager.Entities;
using lab07.ParkingLotManager.Interfaces;
using System;
using System.Collections.Generic;
using System.Linq;

namespace lab07.ParkingLotManager
{
    class QueueGenerator
    {
        private static Random generator = new Random();
        private static readonly int ANONYMOUS_PEDESTRIANS_COUNT = 50;
        private static readonly int PEDESTRIANS_COUNT = 5;
        private static readonly int CARS_COUNT = 30;
        private static readonly int TEACHER_CARS_COUNT = 7;
        private static readonly int BICYCLES_COUNT = 3;

        public static List<IEntity> Generate()
        {
            List<IEntity> queue = new List<IEntity>();

            for (int i = 0; i <= ANONYMOUS_PEDESTRIANS_COUNT; i++)
            {
                queue.Add(new Pedestrian());
            }

            for (int i = 0; i <= PEDESTRIANS_COUNT; i++)
            {
                queue.Add(new Pedestrian(GetRandomName()));
            }

            for (int i = 0; i <= CARS_COUNT; i++)
            {
                queue.Add(new Car(GetRandomPlateNumber()));
            }

            for (int i = 0; i <= TEACHER_CARS_COUNT; i++)
            {
                queue.Add(new TeacherCar(GetRandomPlateNumber()));
            }

            for (int i = 0; i <= BICYCLES_COUNT; i++)
            {
                queue.Add(new Bicycle());
            }

            return queue.OrderBy(a => Guid.NewGuid()).ToList(); ;
        }

        private static string GetRandomPlateNumber()
        {
            return "DLX " + (generator.Next(89999) + 10000);
        }

        private static string GetRandomName()
        {
            List<string> names = new List<string>() { "John", "Jack", "James", "George", "Joe", "Jim" };
            return names[generator.Next(names.Count)];
        }
    }
}
