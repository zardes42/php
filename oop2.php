<?php
//Introduction to OOP



// //Start Constructor
// //create a class Fruits
// class Fruits {

//     //properties 
//     public $name;
//     public $color;





//     function __construct($name,$color){


//         $this->name = $name;
//         $this->color = $color;

//     }




//     function get_name(){


//         return $this->name;

//     }


//     function get_color(){

//         return $this->color;

//     }


// }




// $apple = new Fruits("Apple","Yellow");

// echo $apple->get_name();
// echo "<br>";
// echo $apple->get_color();


// //End  Constructor




//ACCESS MODIFIERS

//Public method /prooperty can be accessed from anywhere

//Private method can be accessed only within the class 


//protected  method can be accesed within the class and by classes derived from that class

// Class Cars{

//     public $name;
//     protected $color;
//     private $manufacturer;





// }


// $car = new Cars();


// $car->name = "Lexus";
// $car->color = "Wine";
// $car->manufacturer = "Toyota";

//ACCESS MODIFIERS END




//Constannts


class Welcome{



    const Message = "Thank you for visiting my Application";





}

class Goodbye{


    const Message = "Thank you for visiting my Application";



}





echo Goodbye::Message;




?>


