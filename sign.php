<?php
$servername = "localhost";
$username = "root";
$passw = "";
$db = "Account";

// Create connection
$conn = new mysqli($servername, $username, $passw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";
// Create database
/*$sql = "CREATE DATABASE Account";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


// sql to create table
$sql = "CREATE TABLE UserDetail (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
mobno BIGINT(10) NOT NULL,
password VARCHAR(15),
secq VARCHAR(30) NOT NULL,
seca VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";


if ($conn->query($sql) === TRUE) {
    echo "Table UserDetail created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}*/

if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)){
    //prepare and bind
    $stmt = $conn->prepare("INSERT INTO UserDetail (username, email, mobno, password, secq, seca) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssisss", $username, $email, $mobno, $password, $secq, $seca);
    //set parameter and execute
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobno = $_POST['mobno'];
    $password = $_POST['password'];
    $secq = $_POST['secq'];
    $seca = $_POST['seca'];

    $query = "SELECT *from UserDetail where email ='$email'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0)
    {
        echo '<script>alert("Already Registered");</script>';
        echo '<h1>Redirecting....</h1><br><br>';
        echo 'Page is Redirecting Please Wait';
        echo '<a href="signup.html">   Click Here</a>';
    }
    else{
        $stmt->execute();
        //echo '<script>alert("Account Created Successfully!!!");</script>';
        //echo '<h1>Page Is Redirecting</h1><br><br>';
        //echo '<h3>Please Wait</h3>';
        //echo '<a href="Login.php"> <h3>  Click Here</h3></a>';
		header("Location:http://localhost/bookstore/Login.php");

    }

    $conn->close();
    
}

else{
    echo "ALL Fields Are Required";
}



?>