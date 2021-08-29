<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$number = $_POST['phn'];
$add = $_POST['ad'];

$pri = $_POST['pri'];
$pin = $_POST['pin'];


// Database connection
$conn = new mysqli('localhost','root','Riya730@','dbname');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(firstName, lastName, email, number,add,pri,pin) values(?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("sssisii", $firstName, $lastName, $email, $number,$add,$pri,$pin);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>