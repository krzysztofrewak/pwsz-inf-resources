import java.util.ArrayList;
import java.util.Random;

public class lab02a {

	static int students_count = 10;

	public static void main(String[] args) {
		ArrayList<String> students = new ArrayList<String>();
		
		for(int i = 0; i < students_count; i++) {
			students.add(getRandomStudentNumber());
		}
		
		System.out.println("Students group have been filled.");
		
		for(int i = 0; i < students.size(); i++) {
			System.out.println(students.get(i));
		}
	}

	protected static String getRandomStudentNumber() {
		Random rand = new Random();
		return String.valueOf(rand.nextInt(2000) + 38000);
	}

}