<?php
class Person{
	public $isAlive = true;
	public $firstname;
	public $lastname;
	public $age;
}

$teacher = new Person();
$student = new Person();

echo $teacher->isAlive;
?>