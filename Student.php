<?php

namespace StudentManagement;

use Course;

class Student
{
    private $id;
    private $name;
    private $email;
    private $courses = [];

    public function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function addCourse(Course $course)
    {
        $this->courses[] = $course;
    }

    public function getCourses()
    {
        return $this->courses;
    }
}