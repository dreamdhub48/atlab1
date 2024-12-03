<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$con = mysqli_connect("localhost", "root", "", "mydb1");

$query = "select * from users where email='$email' and password='$password'";

$result = mysqli_query($con, $query);

if($result){
    echo "
    <script>

    alert('Login Successfull!')
    

    </script>
    ";
}

// if(mysqli_num_rows($result)){
//     $row = mysqli_fetch_assoc($result);
//     echo '
    
//     <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <h1>Hello '.$row['username'].'</h1>
// </body>
// </html>
    
//     ';
// }
// else{
//     echo "invalid User!";
// }

?>

