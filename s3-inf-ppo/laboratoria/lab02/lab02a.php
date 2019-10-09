<?php

const STUDENTS_COUNT = 10;

function getRandomStudentNumber(): string
{
	$randomStudentNumber = rand() % 2000 + 38000;
	return (string)$randomStudentNumber;
}

$students = [];

for ($i = 0; $i < STUDENTS_COUNT; $i++) {
	$students[] = getRandomStudentNumber();
}

echo "Students group have been filled." . PHP_EOL . PHP_EOL;

for ($i = 0; $i < sizeof($students); $i++) {
	echo $students[$i] . PHP_EOL;
}
