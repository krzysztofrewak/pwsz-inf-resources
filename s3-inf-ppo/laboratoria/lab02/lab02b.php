<?php

const STUDENTS_COUNT = 10;

class Student {

	public $studentNo;

	public function setStudentNo(string $studentNo): void {
		$this->studentNo = $studentNo;
	}
		
	public function getStudentNo(): string {
		return $this->studentNo;
	}

}

function getRandomStudentNumber(): string {
	$randomStudentNumber = rand() % 2000 + 38000;
	return (string) $randomStudentNumber;
}

$students = [];

for($i = 0; $i < STUDENTS_COUNT; $i++) {
	$student = new Student();
	$student->setStudentNo(getRandomStudentNumber());
	$students[] = $student;
}

echo "Students group have been filled." . PHP_EOL . PHP_EOL;

for($i = 0; $i < sizeof($students); $i++) {
	$student = $students[$i];
	echo $student->getStudentNo() . PHP_EOL;
}
