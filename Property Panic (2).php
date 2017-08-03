/*muon truy xuat cac thuoc tinh trong class can có $this*/
<?php
     class Person{
         public $isAlive = true;
         public $firstname;
         public $lastname;
         public $age;
         public function __construct($firstname,$lastname,$age){
                  $this->firstname = $firstname;
                  $this->lastname = $lastname;
                  $this->age = $age;
                 }
            }
           
           $teacher = new Person("boring","12345",12345);
           $student = new Person( "Le Hong","thanh",19);
                
           echo $teacher -> isAlive;
           echo"<br>";
           echo $student -> age;
?>