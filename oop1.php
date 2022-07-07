<?php
//Introduction to OOP


//create a class Fruits
class Fruits {

    //properties 
    public $name;
    public $color;




    //create a method
    function set_name($name){

        $this ->name =$name;
    }


    function get_name(){

        return $this->name;

    }

    function set_color($color){

        $this ->color =$color;
    }

    
    function get_color(){

        return $this->color;

    }


}


//create an instance of the class
$apple = new Fruits();



//Set the arguments to the set method
$apple ->set_name('Apple');
$apple ->set_color('Red');




//Echo the result by calling the get methods
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();

?>


