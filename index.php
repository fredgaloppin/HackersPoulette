<?php include "assets/php/validation.php";?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
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
                    
                   <img id="logo" alt="logo hackers poulette" src="/assets/img/hackers-poulette-logo4.png">
                
                
            </header>
            <div class='row'>
            
                <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <fieldset>
                    <legend>Contact Form</legend>
                    <p>* required field</p>
            <!--  FIRST NAME -->
                    <label for="firstName" class="inline">First Name: *<span class="asterix"> <?php echo $firstnameErr;?></span></label>
                    <input type="text" id="firstName" name="firstName" value="<?php echo $firstName;?>">
                    <br>
             <!--  LAST NAME -->
                    <label for="lastName" class="inline">Last Name: *<span class="asterix"> <?php echo $lastnameErr;?></span></label>
                    <input type="text" id="lastName" name="lastName" value="<?php echo $lastName;?>">
                    <br>
            <!--  GENDER -->
                    <label for="gender">Gender: *<span class="asterix"> <?php echo $genderErr;?></span></label>
                        <input type="radio" id="gender" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                        <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other<br>
            <!--  EMAIL -->
                    <label for="email" class="inline">E-mail: *</label>    
                    <input class="email" name="email" type="email" placeholder="test@mailbox.com" id="emailInput" style="width: 180px" value="<?php echo $email;?>">
                    <span class="asterix"> <?php echo $emailErr;?></span><br>
            <!--  COUNTRY -->
                    <label for="country">Country: *<span class="asterix"> <?php echo $countryErr;?></span></label>
                    <select class="gds-cr" id="country" name="country" data-language="en" style="width: 162px" <?php echo $country;?>></select>
            <!--  SUBJECT -->
                    <label for="subject">Subject:</label>
                    <select class="subject" name="subject" id="subject" style="width: 162px">
                        <option value="Other">Other</option>
                        <option value="Admiration">Admiration</option>
                        <option value="Questions">Questions</option>
                        <option value="number?">Can I get your number?</option>
                    </select><br>
            <!--  MESSAGE -->
                    <label for="message">Message *<span class="asterix"> <?php echo $messageErr;?></span></label>
                    <textarea class="textArea" placeholder="Hey guys …" id="message" name="message"><?php echo $message;?></textarea><br>
                <!-- <label class="send-yourself-copy">
                <input type="checkbox">
                <span class="label-body">Send a copy to yourself</span>
                </label> -->
                    <span class="commu" name="commu"><?php echo $commu;?></span>
                    <input class="button-primary centered" type="submit" value="Submit">
                    </fieldset>
                    <input id="form_honeypot" name="honeypot" type="text" style="display:none;" value="">
                </form>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html> 
