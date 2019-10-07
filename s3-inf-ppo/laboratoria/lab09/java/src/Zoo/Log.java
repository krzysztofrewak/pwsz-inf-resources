package Zoo;

public class Log {

    static void info() {
        System.out.println();
    }

    public static void info(String message) {
        System.out.println(message);
    }

    static void warning(String message) {
        System.out.println("[!] "  + message);
    }

}
