using System;

namespace lab09
{
    class Log
    {
        public static void Info()
        {
            Console.WriteLine();
        }

        public static void Info(string message)
        {
            Console.WriteLine(message);
        }

        public static void Warning(string message)
        {
            Console.WriteLine("[!] " + message);
        }
    }
}
