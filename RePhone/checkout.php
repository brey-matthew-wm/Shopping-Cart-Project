<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" media="all" href="horizontal-responsive-form-ui/css/styles.css">
    <link rel="stylesheet" type="text/css" media="all" href="horizontal-responsive-form-ui/css/switchery.min.css">
    <script type="text/javascript" src="horizontal-responsive-form-ui/js/switchery.min.js"></script>

    <title>RePhone Checkout</title>
</head>
<body>
<?php


include'connect.php';


if(@$_POST['formSubmit'] == "Submit")
{
    $errorMessage = "";

    if(empty($_POST['fName']))
    {
        $errorMessage = "<li>You forgot to enter your first name.</li>";
    }
    if(empty($_POST['lName']))
    {

    }
    if(empty($_POST['email']))
    {
        $errorMessage = "<li>You forgot to enter your addresss</li>";


        if(empty($_POST['phoneNumber']))
        {
            $errorMessage = "<li>You forgot to enter your phone number</li>";
        }
    }
    if(empty($_POST['address']))
    {
        $errorMessage = "<li>You forgot to enter your address</li>";
    }
    if(empty($_POST['zip']))
    {
        $errorMessage = "<li>You forgot to enter your state</li>";
    }
    if(empty($_POST['payment']))
    {
        $errorMessage = "<li>You forgot to enter your zip code</li>";
    }






    $stmt = $dbh->prepare("INSERT INTO users (firstName, lastName, email, phNumber, address, zipCode, payment, aInfo) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $result = $stmt->execute(array($_POST['fName'], $_POST['lName'], $_POST['email'], $_POST['phoneNumber'], $_POST['address'], $_POST['zip'], $_POST['payment'], $_POST['additional']));

    if(!$result){
        print_r($stmt->errorInfo());
    }

    if(!empty($errorMessage))
    {
        echo("<p>There was an error with your form:</p>\n");
        echo("<ul>" . $errorMessage . "</ul>\n");
    }

}

?>
<!--<form id="info" action="checkout.php" method="post">

    First Name:<input type="text" name="fName" maxlength="255"><br>
    Last Name:<input type="text" name="lName" maxlength="255"><br>
    Email:<input type="email" name="email" maxlength="45"><br>
    Phone:<input type="number" name="phoneNumber" maxlength="15"><br>
    Address:<input type="text" name="address" maxlength="255"><br>
    Zip Code:<input type="number" name="zip" maxlength="5"><br>
    Credit/Debit Card: <input type="number" name="payment" maxlength="16"><br>
    <button type="submit" name="formSubmit" value="Submit">Submit</button> -->

</form>


<div id="wrapper">

    <h1>Checkout Info</h1>

    <form id="info" action="checkout.php" method="post"><!--onsubmit="return false"-->
        <div class="col-2">
            <label>
                First Name
                <input placeholder="What is your first name?"  name="fName" tabindex="1">
            </label>
        </div>
        <div class="col-2">
            <label>
                Last Name
                <input placeholder="What is your last name?"  name="lName" tabindex="2">
            </label>
        </div>

        <div class="col-3">
            <label>
                Email
                <input placeholder="What is your e-mail address?"  name="email" type="email" tabindex="4">
            </label>
        </div>
        <div class="col-3">
            <label>
                Phone Number
                <input placeholder="What is your phone number?"  name="phoneNumber" type="number" tabindex="3">
            </label>
        </div>

        <div class="col-3">
            <label>
                Address
                <input placeholder="What is your address?" name="address" tabindex="3">
            </label>
        </div>
        <div class="col-3">
            <label>
                Zip Code
                <input placeholder="What is your zip code?"  name="zip" type="number"  tabindex="3">
            </label>
        </div>
        <div class="col-3">
            <label>
                Credit Card
                <input placeholder="What is your Credit Card #?" name="payment" type="number" tabindex="3">
            </label>
        </div>

        <!-- <div class="col-3">
            <label>
                Availability
                <select tabindex="5">
                    <option>5-15 hrs per week</option>
                    <option>15-30 hrs per week</option>
                    <option>30-40 hrs per week</option>
                </select>
            </label>
        </div> -->

        <div class="col-4">
            <label>
                Additional info/Comments
                <input placeholder="Type any additional info here" name="additional" tabindex="6">
            </label>
        </div>
        <!--<div class="col-4">
            <label>
                Yrs Experience
                <input placeholder="How many years of experience?" id="experience" name="experience" tabindex="7">
            </label>
        </div>-->
        <div class="col-4">
            <label>Want a digital receipt?</label>
            <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
        </div>
        <div class="col-4 switch">
            <label>Want to be emailed about sales or special deals?</label>
            <center style="position:relative;margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
        </div>

        <div class="col-submit">
            <button class="submitbtn" name="formSubmit" value="Submit">Submit</button>
        </div>

    </form>
</div>
<script type="text/javascript">
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

    elems.forEach(function(html) {
        var switchery = new Switchery(html);
    });
</script>
</body>
</html>