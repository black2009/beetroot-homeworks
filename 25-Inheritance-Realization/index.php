<?php

class User
{
    protected string $name;
    protected int $age;

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

class Worker extends User
{
    private int $salary;

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

}

class Student extends User
{
    private int $studentship;
    private int $course;

    public function setStudentship($amount): void
    {
        $this->studentship = $amount;
    }

    public function getStudenrship(): int
    {
        return $this->studentship;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function getCourse(): int
    {
        return $this->course;
    }
}

class Driver extends Worker
{
    private float $expirience;
    private string $categories;

    public function getCategories(): string
    {
        return $this->categories;
    }

    public function setCategories($categories): void
    {
        $this->categories = $categories;
    }

    public function getExpirience(): float
    {
        return $this->expirience;
    }

    public function setExpirience($expirience): void
    {
        $this->expirience = $expirience;
    }
}

$Ivan = new Worker();
$Ivan->setAge(25);
$Ivan->setSalary(1000);
$Vasya = new Worker();
$Vasya->setAge(26);
$Vasya->setSalary(2000);

echo ($salarySumm = $Ivan->getSalary() + $Vasya->getSalary()) . PHP_EOL;


