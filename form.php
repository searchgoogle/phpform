<?php
 //connecting to database
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $disc = $_POST['disc'];

   
    $servername = "localhost";
    $username = "root";
    $passward = "";
    $database = "contact";

    //create a connection
    $conn = mysqli_connect($servername, $username, $passward, $database);

    //die if connection is not successful
    if(!$conn){
        die("Sorry we failed to connect:" . mysqli_connect_error());}
    else{
        echo "Successfully";
    
   $sql = "INSERT INTO `contact`(`name`, `email`, `disc`, `dt`) VALUES ('$name','$email','$disc', current_timestamp())";
   $result = mysqli_query($conn, $sql);

   if($result){
       echo "Successfull";
   }
   else{
       echo "Unsuccessfull". mysqli_error($conn);
   }
    } 
}
?>



