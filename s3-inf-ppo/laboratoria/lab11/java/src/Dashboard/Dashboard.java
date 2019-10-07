package Dashboard;

import java.lang.reflect.InvocationTargetException;
import java.lang.reflect.Method;
import java.util.Scanner;

final public class Dashboard {

    public void run() {
        Scanner scanner = new Scanner(System.in);

        try {
            while (true) {
                System.out.println();
                System.out.println("What would you like to do?");
                String method = scanner.nextLine();
                this.findMethod(method);
            }
        } catch (Throwable exception) {
            System.out.println(exception.getMessage());
        }
    }

    private void findMethod(String method) throws Throwable {
        try {
            Method reflectedMethod = this.getClass().getDeclaredMethod(method);
            reflectedMethod.setAccessible(true);
            reflectedMethod.invoke(this);
        } catch (NoSuchMethodException | IllegalAccessException exception) {
            System.out.println("There's no method like " + method);
        } catch (InvocationTargetException exception) {
            throw new Exception(exception.getTargetException().getMessage());
        }
    }

    private void sing() throws Exception {
        String[] lyrics = {
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

        for(String line : lyrics) {
            System.out.println(line);
            Thread.sleep(500);
        }
    }

    private void nothing() throws Exception {
        System.out.println("There's some of nothing.");
    }

    private void quote() throws Exception {
        System.out.println("> That's one small step for man, one giant leap for mankind.");
    }

    private void quit() throws Exception {
        this.stop();
    }

    private void stop() throws Exception {
        throw new Exception("Dashboard stopped.");
    }

}
