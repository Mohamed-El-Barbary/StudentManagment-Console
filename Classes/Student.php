<?php

class Student 
{
    private int $id;
    private string $name;
    private int $grade;

    public function __construct(int $id, string $name, int $grade)
    {
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
    }

    public function getName(): string {
        return $this->name;
    }           

    public function getGrade(): int{
        return $this->grade;
    }

    public function getId(): int {
        return $this->id;
    }

    public function setGrade(int $grade): void{
        $this->grade = $grade;
    }
}
