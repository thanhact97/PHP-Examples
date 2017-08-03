/*s? d?ng menthod*/

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

/*tr? v? gia tr?*/
       public function greet(){
              return "Hello, my name is " . $this->firstname . " " . $this->lastname . ". Nice to meet you! :-)";
             }
          }
           
            $teacher = new Person("boring","12345",12345);
            $student = new Person( "Le Hong","thanh",19);
                
            echo $teacher -> isAlive;
            echo"<br>";
            echo $student -> age;
            echo"<br>";
            echo $student ->greet(); /*g?i ra hàm luôn*/
            echo"<br>";
            echo $teacher ->greet(); /*g?i ra hàm luôn*/
?>