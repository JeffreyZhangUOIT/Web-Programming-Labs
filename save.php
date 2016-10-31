<?php
$db = new mysqli('localhost', 'root', '', 'lab');

// TODO You must process the POST data from the form and then set the variables
// below to be inserted in the database

// You should see sucess if you can connect
if($db->connect_errno > 0){
    echo "ERROR";
    die('Unable to connect to database [' . $db->connect_error . ']');
}
else {
    echo "SUCCESS";
}

// Insert sample data into the database
$sql = $db->prepare("INSERT INTO sample(username, email, password, experience, cuisine, " .
                    "gender, comments) VALUES (?, ?, ?, ?, ?, ?, ?)");

// These should be retrieved from POST variables
$username = "Jon";
$email = "jon@test.com";
$insecure_pass = "test123"; // This password needs to be securely hashed
$experience = "Option 1"; // This is one of the dropdown selection options
$cuisine = 0;  // This is a array value  betweene 0 , 1 , 2
$gender = 2;   // This is an integer value
$comments = "This is a sample message.";

// Securely hash the password
$password = password_hash($insecure_pass, PASSWORD_DEFAULT);

// Bind the parameters to the SQL query above, s is a string i is an integer
$sql->bind_param("ssssiis", $username, $email, $password, $experience, $cuisine, $gender, $comments);

// Execute the query, inserting the data
$sql->execute();

// Close the connection
$sql->close();
$db->close();

?>
