<?php
$con = mysqli_connect("localhost","root","","mydb1");

$username = $_POST['username'];
$email= $_POST['email'];
$password = $_POST['password'];

$query = "insert into users(username, email, password) values('$username', '$email', '$password')";
$result =  mysqli_query($con, $query);

if($result){
    echo "
    <script>

    alert('Registration Successfull!')
    location.href='login.html'

    </script>
    
    ";
}

?>