<?php
require "Student.php";

class StudentManagement
{
    private $students = [];

    public function addStudent(int $Id, string $name, int $garde){
        if(isset($this->students[$Id])){
            echo "Student With This " . $Id . "Is Exist" . "\n" ;
        }else{
            $this->students[$Id] = new Student($Id, $name, $garde);
        }
    }

    public function displayStudents(){
        if(empty($this->students)){
            echo "************* No Student Exist ************* \n";
        }else{
            echo "************* Students ************* \n";
            foreach($this->students as $student){
                echo "Student:\n";
                echo "\tId: {$student->getId()}\n";
                echo "\tName: {$student->getName()}";
                echo "\tGrade: {$student->getGrade()}\n";
            }
            echo "************* Students ************* \n";
        }
    }

    public function removeStudent (int $Id): void {
        if(isset($this->students[$Id])){
            unset($this->students[$Id]);
        }else{
            echo "****** Can not remove the , Student Not Found ******";
        }
    }

    public function updateGrade(int $Id , int $grade){
        if(isset($this->students[$Id])){
            $this->students[$Id]->setGrade($grade);
        }
        else{
            echo "****** Can not update grade the , Student Not Found ******";
        }
    }

}
