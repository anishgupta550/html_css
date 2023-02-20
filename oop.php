<?php
// oop = object oriented program

// access modifires = public / protected / private


// class user {
//     public $name = "Jyoti";
//     protected $email = "jyoti@gmail.com";
//     private $password = "sdjfhjk345";

    
// }

// $data = new user();
// // echo $data->name ="jyoti";
// echo $data->name;
// // echo $data->email;
// // echo $data->password;
// $data->hello();


// class start construt

// class end destruct

// class user {
//     public function __construct(){
//         echo "hello i am start";
//     }

//     public function __destruct(){
//         echo "ending";
//     }
// }
// $user = new user();
// echo $user;



// constant

// class hello {
//     const Find = "hello i'm constant variable";
// }

// echo hello::Find;


// static class 

// class user {
//     public $name = "jyoti";
//     public $email ="jyoti@gmail.com";

//     public function use1(){
//         return $this->name . "  and   " .$this->email;
//     }

// }
// $data = new user();
// // echo $data->name;
// // echo $data->email;
// echo $data->use1();



// inheritance 


// class user {
//     public $name;
//     public $email;

//     public function use1(){
//         return $this->name . "  and   " .$this->email;
//     }

// }

// class student extends user {
//     public function student1(){
//         return "my name is = ".$this->name . "  and  my email is = " .$this->email;
//     }
// }

// $hope = new student();
// $hope->name = "anish";
// $hope->email = "anish@gmail.com";
// echo $hope->student1();
// echo "<br>";
// echo $hope->use1();



// interface 


// interface inter {
//     public function hello();
// }

// class useee implements inter {
//     public function hello(){
//         echo "Hello i am interface";
//     }
// }

// $obj = new useee();
// $obj->hello();


// traits 


// trait jyoti {
//     public function jyo(){
//         echo "hello i am here";
//     }
// }


// class wel {
//     use jyoti;
// }

// $cl = new wel();
// $cl->jyo();


?>
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $hope->use1(); ?></h1>
</body>
</html> -->