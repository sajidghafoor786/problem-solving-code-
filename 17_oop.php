<?php
// ---------------Object oriented programmimg ---------------

/* 
 1) From php5 onwards you  an write PHP in either a procedural or object oriented way. OOP consist of classes that can hold "properties" and " Methods". Objects can be created from classes.
 */

 class User {
    // 2) properties are attributes that belong to the class

    // 5)  Access modifiers: public, private, protected
    // public - can be accessed from anywhwere
    // private - can only be accessed from inside the class
    // protected - only accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;
    public $title;

    //6) ----- Methods is a function that belongs to a class--
    
//     function set_name($name) {
//         $this->name=$name;
//     }

//     function get_name() {
//        return $this->name;
//     }

    // 7) --------Constructors---------------
    // A constructor is a method that runs when an object is created
    public function __construct($name, $email, $password, $title) {
       $this->name=$name;
       $this->email=$email;
       $this->password=$password;
       $this->title=$title;
    }
    
        
    
  }


// 3)  Create an object

$user1= new User('Mohid', 'mohi@gmail.com', '11234','');
$user2= new User('Hamza', 'hamz@gmail.com', '1er234', '');

echo $user1 -> name;
echo $user1 -> email;
echo $user2 -> password;
// $user3= new User();
// data with methods

// $user1->set_name('Abdullah');
// $user2->set_name('hamza');

// echo $user1->get_name();
// echo $user2->get_name();
//4)  now give values to the attributes of objects
//  $user1 -> name= 'Mohid';
//  $user1 -> email= 'mohid@gmail.com';
//  $user1 -> password= '12345';

// var_dump($user1);

// see example of public keyword

// echo $user1->name;


// inheritance

class Employee extends User{

    public function __construct($name, $email, $password, $title)
     {
        parent::__construct($name, $email, $password, $title);
        $this-> title = $title;

    }

    function get_title() {
        return $this->title;
    }

}

$Employee1= new Employee('Sara', 'sara@gmail.com', '11223', 'Developer');

echo $Employee1 -> get_title();







?>