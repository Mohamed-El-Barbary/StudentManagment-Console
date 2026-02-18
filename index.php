<?php

require "./Classes/StudentManagement.php";

$studentManager = new StudentManagement();

echo "Welcome To Student Manager" . "\n";
while (true){
    echo "1. Add Student" . "\n";
    echo "2. Remove Student" . "\n";
    echo "3. Uptade Student Grade " . "\n";
    echo "4. Display Students" . "\n";
    echo "5. Exit" . "\n";
    echo "Choose an option" . "\n";

    $choice = fgets(STDIN);
    switch($choice){
        case 1:
            echo "Enter Student Id" . "\n";
            $id = fgets(STDIN);
            echo "Enter Student Name" . "\n";
            $name = fgets(STDIN);
            echo "Enter Student Grade" . "\n";
            $grade = fgets(STDIN);

            $studentManager->addStudent($id, $name, $grade);
            break;

        case 2:
            echo "Enter Student Id To delete Student" . "\n";
            $id = fgets(STDIN);

            $studentManager-> removeStudent($id);
            break;

        case 3:
            echo "Enter Student Id" . "\n";
            $id = fgets(STDIN);
            echo "Enter Student Grade" . "\n";
            $grade = fgets(STDIN);

            $studentManager->updateGrade($id, $grade);
            break;

        case 4:
            $studentManager->displayStudents();
            break;
        case 5:
            exit;

    }

}