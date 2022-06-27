<?php
// database connection..
$response = '';
$server="localhost";
$username="root";
$password="";
$database="zalego";

$conn = mysqli_connect($server,$username,$password,$database);
  
    if( isset($_POST ['submitApplication']) )
    {
        // 1. Fetch Form Data.
            $fullName = $_POST['fullname'];
            $phoneNumber = $_POST['phonenumber'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];
            $course = $_POST['course'];
            $check = $_POST['check'];

        // 2. Submit Form Data.
            $insertData = mysqli_query($conn, "INSERT INTO 
            enrollment(fullname,phonenumber,email,gender,course)
            VALUES('$fullName','$phoneNumber','$email','$gender','$course')");

            if($insertData)
            {
                $response = "Data Submitted Successfully";
            }
            else 
            {
                $response = "Error Occured ".mysqli_error($conn) ;
            }
    }

?>