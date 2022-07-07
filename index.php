<?php

//  $Firstname = "Abraham";
//  $lastname = "Praise";




//  echo $Firstname." ". $lastname;



// //PHP Operators


// //aithmetic operators
// //assignment 
// //comparison
// //increment 
// //logical 
// //conditional




// $firstnumber = 100;

// $secondnumber = 100;

// $AdditionResult = $firstnumber + $secondnumber;

// echo $AdditionResult;






// If else statment
// if ($firstnumber > $secondnumber){

//     echo "First Number is greater";

// }elseif ($secondnumber > $firstnumber){

//     echo "Second number is greater";

// }
// else{

//     echo "Both numbers are equal";
   
// }



// // //Switch

// $favcolor = "yellow";



// switch ($favcolor) {

//     case "red";
//     echo "Your favorite color is red";
//     break;

//     case "blue";
//     echo "Your favorite color is blue";
//     break;


//     case "green";
//     echo "Your favorite color is green";
//     break;

//     case "yellow";
//     echo "Your favorite color is yellow";
//     break;

//     default:
//     echo "Your favorite color is neither red, blue nor green";


// }



// //while - loops through a block of code as long as the specified condition is true

// //do...while - loops through a block of code once, and then repeats the loop as long as the specified condition is true


// //for - loops through a block of code a specified number of times

// //foreach - loops through a block of code for each element in an array


// //While Loop

// $x = 0;

// while ($x < 5){

//     echo "The number is: $x <br>";
//     $x++;

// }





// //do 

// $x = 0;

// do {
//     echo "The number is: $x <br>";
//     $x++;

// }while($x < 5);






// //For

// for ($x = 0; $x <= 20; $x++){
//     echo "The number is: $x <br>";
// }




// $colors = array("red", "green", "blue", "yellow");


// foreach ($colors as $item){


//     echo "$item </br>";
// }

// $Firstname;
// $lastname;
// $email;
// $phone;

// $Students = array("FirstName" => 'Abraham ', "LastName" => 'Praise', "Email" => 'AbrahamPraise@yahoo.com', "PhoneNumber" => '09099889988');



// $Firstname = $Students['FirstName'];

// $LastName = $Students['LastName'];

// $Email = $Students['Email'];

// $PhoneNumber = $Students['PhoneNumber'];




// echo "Your FirstName is $Firstname </br>";


// echo "Your LastName is $LastName </br>";


// echo "Your Email is $Email </br>";


// echo "Your Phone Number is $PhoneNumber </br>";



//Multi Dimensional Array
// $marks = array(


//             "Abraham" => array (
//                 "Chemistry" => 10,
//                 "Physics" => 60,
//                 "English" => 90,
//             ),


//             "Toba" => array (
//                 "Chemistry" => 20,
//                 "Physics" => 30,
//                 "English" => 80,
//             ),

//             "Emmanuel" => array (
//                 "Chemistry" => 10,
//                 "Physics" => 39,
//                 "English" => 65,
//             ),

//             "Opeyemi" => array (
//                 "Chemistry" => 40,
//                 "Physics" => 49,
//                 "English" => 75,
//             ),





//         );




// $loginname = 'Emmanuel';
// //For Student
// $StudentInfo = $marks[$loginname];



// $Chemistry = $StudentInfo['Chemistry'];
// $Physics = $StudentInfo['Physics'];
// $English = $StudentInfo['English'];


// echo "$loginname Chemistry score is: $Chemistry <br>";

// echo "$loginname Physics score is: $Physics <br>";

// echo "$loginname English score is: $English";





// $A = 70 - 100; // EXCELLENT

// $B = 60 - 69; // VERY GOOD

// $C = 50 - 59; //GOOD

// $D = 40 - 49; //FAIR

// $F = 0 - 39; //FAILED
// //A B C D F


if (isset($_POST['btnsubmit'])){


    $stduentname = $_POST['txtstudentname'];
    $studentScore = $_POST['txtstudentscore'];



    // echo $stduentname.'<br/>';
    // echo $studentScore;
// A == 70 

//A >= 70 <=100 echo excellent
//else if A >= 60 and a <=69 echo very good


//a >= 70 ECHO excellent
//else a <70 and a >= 60 very good


//if ($a == 70 && $a <=100 ) echo excellent
    //elseif $a == 60 && $a <= 69 echo very good 

  

//abraham
    // if (($studentScore == 70 ) &&  ($studentScore <=100) ){
    //     echo "Excellent";
    // }elseif(($studentScore == 60 ) || ($studentScore <=69) ){


    //     echo "very good";
    // }



    if (($studentScore >= 70 ) && ($studentScore <=100) ){

        $color = "green";
        $result =  "Excellent";
    }elseif(($studentScore >= 60 ) && ($studentScore <=69) ){
        $color = "green";
        $result = "VERY GOOD";
    }elseif(($studentScore >= 50 ) && ($studentScore <=59)){
        $color = "green";
        $result = "GOOD";

    }elseif(($studentScore >= 40 ) && ($studentScore <=49)){
        $color = "red";
        $result = "FAIR";

    }elseif(($studentScore >= 0 ) && ($studentScore <=39)){
        $color = "red";
        $result = "FAILED";

    }else{
        $color = "blue";
        $result = "Out or range";

    }




}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Students Score System</h1>



<form method="post" >

<div class="col">
<label for="">Result:</label>

<p style="color:<?php echo $color ?>;">
<?php


echo $result;

?>
</p>


</div>

<div class="col">
<label for="">Student Name</label>
<input type="text" name="txtstudentname" required>
</div>


<br/>

<div class="col">
<label for="">Student Score</label>
<input type="number" name="txtstudentscore" required>
</div>

<br/>
<div class="col">
<button class="btn" name="btnsubmit">Submit</button>
</div>

<!-- <div class="col">
<button style="background-color:red;" class="btn" name="btntest">test</button>
</div> -->

</form>




    
</body>
</html>

