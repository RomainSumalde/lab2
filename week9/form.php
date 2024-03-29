<?php
// define variables and set to empty values
$nameErr = $emailErr = "";
$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {$servername = "localhost";
	  $username = "webprogmi211";
    $password = "webprogmi211";
    $dbname = "webprogmi211";
	// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
	}
	$sql = "INSERT INTO rcsumalde_MyGuests (name, email, comment)
	VALUES ('$name', '$email', '$comment')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
	} else {
        echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
	}
?>