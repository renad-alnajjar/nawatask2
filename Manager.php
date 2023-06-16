<?php

use StudentManagement\Student;

// Loggable trait
trait Loggable
{
    private function log($message)
    {
        // Log the message to a log file
        $logFile = 'log.txt';
        file_put_contents($logFile, $message . PHP_EOL, FILE_APPEND);
    }
}
class Manager
{
    use Loggable;

    private $students = [];

    public function addStudent(Student $student)
    {
        $this->students[$student->getId()] = $student;
        $this->log('Added student: ' . $student->getName());
    }

    public function getStudentById($id)
    {
        if (isset($this->students[$id])) {
            return $this->students[$id];
        }

        return null;
    }

    public function updateStudent(Student $student)
    {
        $this->students[$student->getId()] = $student;
        $this->log('Updated student: ' . $student->getName());
    }

    public function deleteStudent(Student $student)
    {
        unset($this->students[$student->getId()]);
        $this->log('Deleted student: ' . $student->getName());
    }
}
