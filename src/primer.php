<?php
namespace MyApp;
$student1 = new Student("Иван", "Иванов");
$student1->addGrade(5);
$student1->addGrade(3);

$student2 = new Student("Петр", "Первый");
$student2->addGrade(4);
$student2->addGrade(4);

$student3 = new Student("Узбек", "Узбеков");
$student3->addGrade(5);
$student3->addGrade(5);


$group = new Group("Группа П-33");
$group->addStudent($student1);
$group->addStudent($student2);
$group->addStudent($student3);


function printStudentInfo($student) {
    echo "Студент: " . $student->getFirstName() . " " . $student->getLastName() . "\n";
    echo "Средний балл: " . round($student->getAverage(), 2) . "\n\n";
}


function printGroupInfo($group) {
    echo "Группа: " . $group->getGroupName() . "\n";
    echo "Количество студентов: " . count($group->getStudents()) . "\n";
    echo "Общий средний балл по группе: " . round($group->getGroupAverage(), 2) . "\n\n";

    $bestStudent = $group->getBestStudent();
    if ($bestStudent !== null) {
        echo "Лучший студент: " . $bestStudent->getFirstName() . " " . $bestStudent->getLastName() . "\n";
        echo "Средний балл лучшего студента: " . round($bestStudent->getAverage(), 2) . "\n";
    }
}


printStudentInfo($student1);
printStudentInfo($student2);
printStudentInfo($student3);

printGroupInfo($group);
