<?php include "assets/php/validation.php";?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta description="becode training php form">
<title>Hackers Poulette contact form</title>
<link rel="stylesheet" href="assets/css/style.css">

<!-- link for jquery style -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="assets/js/geodatasource-cr.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/Gettext.js"></script>

</head>

    <body>
        <div class='container'>
            <header>
                <button class="openbtn" >☰ </button>
            
                    <a class="navlogo" href="#"> <div id="logo" alt="logo hackers poulette"></div></a> 
                
                
            </header>
            <div class='row'>
            
                <form name="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                    <fieldset>
                    <legend>Contact Form</legend>
                    <p><span class="error">* required field</span></p>
            <!--  FIRST NAME -->
                    <label for="firstName" class="inline">First Name: </label>
                    <input type="text" id="firstName" name="firstName" value="<?php echo $firstName;?>">
                    <span class="asterix">* <?php echo $firstnameErr;?></span><br>
             <!--  LAST NAME -->
                    <label for="lastName" class="inline">Last Name: </label>
                    <input type="text" id="lastName" name="lastName">
                    <span class="asterix">* <?php echo $lastnameErr;?></span><br>
            <!--  GENDER -->
                    <label for="gender">Gender:</label>
                    <span class="asterix">* <?php echo $genderErr;?></span>
                        <input type="radio" id="gender" name="gender" value="female">Female
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="other">Other<br>
            <!--  EMAIL -->
                    <label for="email" class="inline">E-mail: </label>    
                    <input class="email" name="email" type="email" placeholder="test@mailbox.com" id="EmailInput" style="width: 180px">
                    <span class="asterix">* <?php echo $emailErr;?></span><br>
            <!--  COUNTRY -->
                    <label for="choiceCountry">Country:</label>
                    <span class="asterix">* <?php echo $countryErr;?></span>
                    <select class="gds-cr" id="country" name="choiceCountry" data-language="en" style="width: 162px"></select>
            <!--  SUBJECT -->
                    <label for="subjectInput">Subject:</label>
                    <select class="subject" name="subjectInput" id="subjectInput" style="width: 162px">
                        <option value="Other">Other</option>
                        <option value="Admiration">Admiration</option>
                        <option value="Questions">Questions</option>
                        <option value="number?">Can I get your number?</option>
                    </select><br>
            <!--  MESSAGE -->
                    <label for="messageInput">Message</label>
                    <span class="asterix">* <?php echo $messageErr;?></span>
                    <textarea class="textArea" placeholder="Hey guys …" id="messageInput" name="messageInput"></textarea><br>
                <!-- <label class="send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Send a copy to yourself</span>
                </label> -->
                    <input class="button-primary centered" type="submit" value="Submit">
                    </fieldset>
                </form>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html> 
