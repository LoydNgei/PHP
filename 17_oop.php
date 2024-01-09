<?php

class User {

    // public - can be accessed from anywhere
    // private - only accessed from inside the class
    // protected - only accessed from inside the class and by inheriting classes

    public $name;
    public $email;
    public $password;


    // A constructor is a method that runs when an object is created

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }


    // Method is a function that belongs to a class

    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        $this->name = $name;
    }
}

// Instatiate a user object
// $user1 = new User('loyd', 'Loydngei@gmail.com', '123456');


// echo $user1->email;


// Call the method set_name

// $user1->set_name('Loyd');

// var_dump($user1);



// INHERITANCE

class Employee extends User {
    public function __construct($name, $email, $password, $title) 
    {
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '23456', 'Manager');

echo $employee1->get_title();







?>