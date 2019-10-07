import java.util.ArrayList;
import java.util.Random;

class Student {

	public String studentNo;

	public void setStudentNo(String studentNo) {
		this.studentNo = studentNo;
	}
		
	public String getStudentNo() {
		return this.studentNo;
	}

}

public class lab02b {

	static int students_count = 10;

	public static void main(String[] args) {
		ArrayList<Student> students = new ArrayList<Student>();
		
		for(int i = 0; i < students_count; i++) {
			Student student = new Student();
			student.setStudentNo(getRandomStudentNumber());
			students.add(student);
		}
		
		System.out.println("Students group have been filled.");
		
		for(int i = 0; i < students.size(); i++) {
			Student student = students.get(i);
			System.out.println(student.getStudentNo());
		}
	}

	protected static String getRandomStudentNumber() {
		Random rand = new Random();
		return String.valueOf(rand.nextInt(2000) + 38000);
	}

}
