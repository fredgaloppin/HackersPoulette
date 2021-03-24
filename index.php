<?php include_once "assets/php/validation.php";?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="assets/css/style.css">

<!-- link for jquery style -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

<script src="assets/js/geodatasource-cr.min.js"></script>
<!-- <link rel="stylesheet" href="assets/css/geodatasource-countryflag.css"> -->

<!-- link for semantic-ui style -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js" integrity="sha512-dqw6X88iGgZlTsONxZK9ePmJEFrmHwpuMrsUChjAw1mRUhUITE5QU9pkcSox+ynfLhL15Sv2al5A0LVyDCmtUw==" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" integrity="sha512-8bHTC73gkZ7rZ7vpqUQThUDhqcNFyYi2xgDgPDHc+GXVGHXq+xPjynxIopALmOPqzo9JZj0k6OqqewdGO3EsrQ==" crossorigin="anonymous" /> -->

<!-- link to languages po files -->
<!-- <link rel="gettext" type="application/x-po" href="languages/en/LC_MESSAGES/en.po" /> -->
<script type="text/javascript" src="assets/js/Gettext.js"></script>
<title>Hackers Poulette</title>
</head>
    <body>
        <div class='container'>
        <header>
            <button class="openbtn" >☰ </button>
          
                <a class="navlogo" href="#"> <div id="logo" alt="logo hackers poulette"></div></a> 
            
            
        </header>
        <div class='row'>
            <!-- <div class="eleven columns"> -->
    <form name="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <fieldset>
            <legend>Contact Form</legend>
    <p><span class="error">* required field</span></p>
    <!--  FIRST NAME -->
    <label for="firstName" class="inline">First Name: </label>
    <input type="text" id="firstName" name="firstName">
    <span class="asterix">* <?php echo $firstnameErr;?></span><br>
    <!--  LAST NAME -->
    <label for="lastName" class="inline">Last Name: </label>
    <input type="text" id="lastName" name="lastName">
    <span class="asterix">* <?php echo $lastnameErr;?></span><br>
    <!--  GENDER -->
    <label for="gender">Gender:<span class="asterix">* </span></label>
        <input type="radio" id="gender" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other<br>
    <!--  EMAIL -->
    <label for="email" class="inline">E-mail: </label>    
    <input class="email" name="email" type="email" placeholder="test@mailbox.com" id="EmailInput" style="width: 180px"><span class="asterix">* <?php echo $emailErr;?></span><br>
    <!--  COUNTRY -->
    <label for="choiceCountry">Country:<span class="asterix">* <?php echo $countryErr;?></span></label>
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
    <label for="messageInput">Message<span class="asterix">* <?php echo $messageErr;?></span></label>
    <textarea class="textArea" placeholder="Hey guys …" id="messageInput" name="messageInput"></textarea><br>
    <!-- <label class="send-yourself-copy">
      <input type="checkbox">
      <span class="label-body">Send a copy to yourself</span>
    </label> -->
    <input class="button-primary centered" type="submit" value="Submit">
        </fieldset>
    </form>

</div>

<!-- </div> -->
</div>
    <footer>
    </footer>
    </body>
</html> 
