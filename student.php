<?php


include 'masterdb.php';
if (isset($_POST['submitStudentRecord'])){

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];



if($firstname == '' && $lastname == '' && $phone == ''){
    
}else{

  $result  =   $database->student_create($firstname,$lastname,$phone);
  if ($result){
    echo 'Student created succesfully';
  }else{
    echo 'Failed to create student';
  }
}

}
if(isset($_POST['getStudentRecord'])){
    $firstname = $_POST['get_firstname'];
    $lastname = $_POST['get_lastname'];

$result = $database->get_student($firstname,$lastname);
if ($result){
    $array = $result -> fetch_array(MYSQLI_NUM);
    foreach($array as $item){
        echo $item;
    };

}else{
    echo 'No such student in our records';
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

<h2>Create Student Form </h2>
    <form method="post">

   
    Firstname :<input type="text" name='firstname'>
    Lastname :<input type="text" name='lastname'>
    Phonenumber :<input type="text" name='phone'>
    <button type="submit" name='submitStudentRecord'>Submit</button>
    </form>

    <h2>Get Student Form </h2>
        <form method='post'>
        Firstname : <input type="text" name="get_firstname" id="get_firstname">
        Lastname :<input type="text" name="get_lastname" id="get_lastname">
            <button name='getStudentRecord' type="submit">Get student details</button>
        </form>

</body>
</html>