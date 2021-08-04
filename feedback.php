<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>aducators.in | feedback</title>
</head>

<body>

<header>
    <!-- NAV START -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
    
    <a class="navbar-brand" href="#">
        <img src="img/Brand/logo cropped with name.png" style="height: 35px; width: 34px" alt="logo" />
    </a>
    
    <a class="navbar-brand" href="#"> ADUCATORS </a>
</header>

<?php
    
if($_GET['submitted'] == "true") { ?>
    <div class="alert alert-success" role="alert">   
        Feed back Submitted Successfully
    </div>
<?php }?>

<div class="container-fluide">
<div class="container">
<h1 class="display-1 text-center">FEED BACK FORM</h1>
<div class="card col-12 p-5 mb-3">
<form action="feedbacksubmit.php" method="post">
    <div class="form-group">
        <label for="regmail">Gmail Address</label>
        
        <input class="form-control" type="email" name="regmail" id="regmail" 
        placeholder="Enter Registered Gmail" maxlength="320" pattern="[a-zA-Z0-9_\.]+@gmail.com"
        required>
        
        <small class="form-text text-muted">You will get receipt at this Gmail Address.</small>
    </div>
    
    <div class="form-group">
        <label for="entlno">Enrollment Number</label>

        <input class="form-control" type="text" name="enrlno" id="enrlno" 
        placeholder="Enter Enrollment Number" maxlength="6" pattern="20[0-9][0-9][0-9][0-9]"
        required>
    </div> 

    <div class="input-group">
        <div class="input-group">
            <label for="feed">FeedBack</label>
        </div>
        <textarea class="form-control" name="feed" id="feed" 
        placeholder="Enter Your Feed back" maxlength="100" required></textarea>
    </div>

    <div class="input-group">
        <input class="btn btn-primary btn-lg active mt-3" type="submit" value="Submit">
    </div>
</form>
</div>
</div>
</div>

<!-- FILES -->
<link rel="stylesheet" href="css/bootstrap.min.css" />                <!-- BOOTSTRAP FILE -->
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>    <!-- JQUERY FILE -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>    <!-- JAVASCRIPT FILE -->

</body>

</html>