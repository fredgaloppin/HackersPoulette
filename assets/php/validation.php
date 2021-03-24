<?php
// define variables and set to empty values
$firstnameErr = $lastnameErr = $emailErr = $genderErr = $countryErr = "";
$firstName = $lastName = $email = $gender = $messageInput = $country = $subjectInput = "";

$nameMissingErr = "Name is required";
$nameErr = "Only letters and white space allowed";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["firstName"])) {
    $firstnameErr = $nameMissingErr;
  } else {
    $firstName = test_input($_POST["firstName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $firstnameErr = $nameErr;
    }
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["lastName"])) {
      $lastnameErr = $nameMissingErr;
    } else {
      $lastName = test_input($_POST["lastName"]);
      // check if name only contains letters and whitespace
      if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
        $lastnameErr = $nameErr;
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
    

  if (empty($_POST["messageInput"])) {
    $messageInput = "";
  } else {
    $messageInput = test_input($_POST["messageInput"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

$country = isset($_POST['choiceCountry']) ? $_POST['choiceCountry'] : false;
if ($country) {
   echo htmlentities($_POST['choiceCountry'], ENT_QUOTES, "UTF-8");
} else {
    $countryErr = "Pick a country is required";
  exit; 
}

$subjectInput = ($_POST["subjectInput"]);

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $firstName; echo <br>;
echo $lastName; echo <br>;
echo $gender; echo <br>;
echo $email; echo <br>;
echo $country; echo <br>;
echo $subjectInput; echo <br>;
echo $messageInput; 

?>