<?php

class Database{
    private $connection;
    public function connect_db(){

        $this->connection = mysqli_connect('localhost','root','','sql_tutorial');
    
             if (mysqli_connect_error()){
                 die('Database connection failed'.mysqli_connect_error().mysql_connect_errno());
             }
     }

    public function student_create($firstname,$lastname,$phone){
            $sql = "INSERT INTO student (Firstname,Lastname,Phonenumber) VALUES ('$firstname','$lastname','$phone')";
    
            $query = mysqli_query($this->connection, $sql);

            if($query){
                return true;
            }else{
                return false;
            }
        }
    public function get_student($firstname,$lastname){
        $sql = "SELECT * FROM student WHERE Firstname = '$firstname' AND Lastname = '$lastname' ";
        $query = mysqli_query($this->connection, $sql);
        if ($query){
            return $query;
    }else{
        return false;
    }

    }

}

$database = new Database() ;
$database->connect_db();

?>