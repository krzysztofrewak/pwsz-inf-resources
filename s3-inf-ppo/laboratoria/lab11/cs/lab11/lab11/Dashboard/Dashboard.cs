using System;
using System.Collections.Generic;
using System.Reflection;
using System.Threading;

namespace lab11
{
    sealed public class Dashboard
    {
        public void Run()
        {
            try
            {
                while (true)
                {
                    Console.WriteLine();
                    Console.WriteLine("What would you like to do?");
                    string method = Console.ReadLine();
                    FindMethod(method);
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
                Console.ReadKey();
            }
        }

        private void FindMethod(string method)
        {
            try
            {
                Type type = typeof(Dashboard);

                var function = type.GetMethod(method);
                if (function == null)
                    throw new MissingMethodException();

                var instance = Activator.CreateInstance(type);

                function.Invoke(instance, null);
            }
            catch (MissingMethodException)
            {
                Console.WriteLine("There's no method like " + method);
            }
            catch (TargetInvocationException ex)
            {
                throw new Exception(ex.Message);
            }
        }

        public void Sing()
        {
            List<string> lyrics = new List<string>()
            {
                "There must be some kind of way outta here",
                "Said the joker to the thief",
                "There's too much confusion",
                "I can't get no relief",
                "",
                "Business men, they drink my wine",
                "Plowman dig my earth",
                "None were level on the mind",
                "Nobody up at his word",
                "Hey, hey",
                "",
                "No reason to get excited",
                "The thief he kindly spoke",
                "There are many here among us",
                "Who feel that life is but a joke",
                "But, uh, but you and I, we've been through that",
                "And this is not our fate",
                "So let us stop talkin' falsely now",
                "The hour's getting late, hey",
                "",
                "All along the watchtower",
                "Princes kept the view",
                "While all the women came and went",
                "Barefoot servants, too",
                "Outside in the cold distance",
                "A wildcat did growl",
                "Two riders were approaching",
                "And the wind began to howl",
            };

            foreach (string line in lyrics)
            {
                Console.WriteLine(line);
                Thread.Sleep(500);
            }
        }

        public void Nothing()
        {
            Console.WriteLine("There's some of nothing.");
        }

        public void Quote()
        {
            Console.WriteLine("> That's one small step for man, one giant leap for mankind.");
        }

        public void Quit()
        {
            Stop();
        }

        private void Stop()
        {
            throw new Exception("Dashboard stopped.");
        }
    }
}
