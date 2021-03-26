<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require("assets/PHPMailer/src/PHPMailer.php");
require("assets/PHPMailer/src/SMTP.php");
require('assets/PHPMailer/src/Exception.php');
// define variables and set to empty values
$commu = $firstnameErr = $lastnameErr = $genderErr = $emailErr = $countryErr = $subjectErr = $messageErr = "";
$firstName = $lastName = $gender = $email = $country = $subject = $message = "";
$valid_form = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //FirstName
    if (empty($_POST["firstName"])) {
        $firstnameErr = " is required";
        $valid_form = false;
    } else {
        $firstName = test_input($_POST["firstName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$firstName)) {
            $firstnameErr = "Only letters and white space allowed";
            $valid_form = false;
        } elseif (!filter_var($firstName, FILTER_SANITIZE_STRING)) {
            $firstnameErr = "Invalid";
            $valid_form = false;
        }
    }

    //Lastname
    if (empty($_POST["lastName"])) {
        $lastnameErr = " is required";
        $valid_form = false;
    } else {
        $lastName = test_input($_POST["lastName"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lastName)) {
            $lastnameErr = "Only letters and white space allowed";
            $valid_form = false;
        } elseif (!filter_var($lastName, FILTER_SANITIZE_STRING)) {
            $lastnameErr = "Invalid";
            $valid_form = false;
        }
    }

    //Gender
    if (empty($_POST["gender"])) {
        $genderErr = " is required";
        $valid_form = false;
    } else {
        $gender = test_input($_POST["gender"]);
    }
    
    //Email
    if (empty($_POST["email"])) {
        $emailErr = " is required";
        $valid_form = false;
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
            $valid_form = false;
        } elseif (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
            $emailErr = "Invalid";
            $valid_form = false;
        }
    }

    //Country
    if (empty($_POST["country"])) {
        $countryErr = " is required";
        $valid_form = false;
    } else {
        $country = $_POST["country"];
    }

    //Subject
    $subject = $_POST["subject"];
    
    //Message
    $message = test_input($_POST["message"]);
    if (empty($_POST["message"])) {
        $messageErr = " is required";
        $valid_form = false;
    } else {
        $message = filter_var($message, FILTER_SANITIZE_SPECIAL_CHARS);
    }
        //=== HONEYPOT
        if($_POST["honeypot"] != ""){
            $valid_fields = false;
            $err_messages[7] = "Hello Mr Bot!";
        }
    //======================
    //   Sending email
    //======================
        $thanks_msg = "Thanks for your request!\r\n";
        $thanks_msg .= "Our support team will follow up and get back to you within 72 hours.\n";
        $thanks_msg .= "Here is a copy of your request: <br>";
        $thanks_msg .= "Subject: ".$subject."\n\n";
        $thanks_msg .= "Message: ".$message. "\n\n";
        if($valid_form == true){
            $mail = new PHPMailer();
            try {
                $mail->IsSMTP();
                $mail->Mailer = "smtp";

                $mail->SMTPDebug  = 0;  
                $mail->SMTPAuth   = true;
                $mail->SMTPSecure = "tls";
                $mail->Port       = 587;
                $mail->Host       = "smtp.gmail.com";
                $mail->Username   = "fredgaloppin@gmail.com";
                $mail->Password   = "Prout";// not good one

                $mail->AddAddress("$email", "$firstName $lastName");
                $mail->SetFrom("fredgaloppin@gmail.com");
                
                $mail->IsHTML(true);
                $mail->Subject = "Contact form receipt";
                $mail->Body    = "Name: $firstName $lastName $gender  <br>from: $email <br> The content:  $message  ";
                $mail -> send();
                $commu = 'Message has been sent, or not';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

        }
}

//var_dump($_POST);

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/*echo "<h2>Your Input:</h2>";
echo $firstName;
echo "<br>";
echo $lastName;
echo "<br>";
echo $gender;
echo "<br>";
echo $email;
echo "<br>";
echo $country;
echo "<br>";
echo $subject;
echo "<br>";
echo $message;*/
?>



<!-- $mail->isSMTP();                                            
        $mail->Host       = 'smtp-mail.outlook.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'adrien-test-code@outlook.com';                     
        $mail->Password   = 'adrien1997';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $mail->Port       = 587;                                    
        //Recipients
        $mail->setFrom('adrien-test-code@outlook.com');
        $mail->addAddress($email,"$firstname $lastname");     //Add a recipient
        $mail->addReplyTo('info@example.com', 'Information');
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'hacker poulette';
        $mail->Body    = "Dear $firstname<br> thanks for your feedback.<br> we treat your demand as soon as possible<br><br> Firstname: $firstname <br> lastname: $lastname <br> Gender: $gender <br> Email: $email <br> Country: $country <br> Subject: $subject <br> Message: $message";
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; -->