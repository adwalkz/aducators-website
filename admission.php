<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admission Form - aducators.in</title>
</head>

<body>

<header>
    <!-- NAV START -->
    <nav class="navbar navbar-expand-md navbar-light bg-light">
    
    <a class="navbar-brand" href="#">
        <img src="img/Brand/logo cropped with name.png" style="height: 35px; width: 34px" alt="logo" />
    </a>
    
    <a class="navbar-brand" href="#"> ADUCATORS </a>
    </nav>
    <!-- NAV END -->
</header>

<div class="container-fluide">
<div class="container">

<h1 class="display-3 text-center">ADMISSION FORM</h1>

<div class="card col-12 p-5 mb-3">

<form action="admissionsubmit.php" method="post">

<div class="form-group">
    <label for="name"><strong>Full Name</strong></label>

    <input class="form-control" type="text" name="name" id="name" 
    placeholder="Enter Full Name" maxlength="30" required>
</div>

<div class="form-group">
    <label><strong>Gender</strong></label>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="gender1" value="female">
    <label class="form-check-label" for="gender1">Female</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="gender2" value="male">
    <label class="form-check-label" for="gender2">Male</label>
    </div>
    
    <div class="form-check">
    <input class="form-check-input" type="radio" name="gender" id="gender3" value="other">
    <label class="form-check-label" for="gender3">Prefer not to say</label>
    </div>
</div>

<div class="form-group">
    <label for="gname"><strong>Guardian Name</strong></label>

    <input class="form-control" type="text" name="gname" id="gname" 
    placeholder="Enter Either Guardian Name" maxlength="30" required>
</div>

<div class="form-group">
    <label for="age"><strong>Age</strong></label>
    
    <input class="form-control" type="number" name="age" id="age" 
    placeholder="Enter Age" min="10" max="50" required>

    <small class="form-text text-muted">Age Limit: 10-50</small>
</div>

<hr>

<div class="form-group">
    <label><strong>You are in?</strong></label>
    
    <div class="form-check">
    <input class="form-check-input" type="radio" name="doing" id="doing1" value="school">
    <label class="form-check-label" for="doing1">School</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="doing" id="doing2" value="college">
    <label class="form-check-label" for="doing2">College</label>
    </div>
    
    <div class="form-check">
    <input class="form-check-input" type="radio" name="doing" id="doing3" value="job">
    <label class="form-check-label" for="doing3">Job</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="doing" id="doing4" value="doing_other">
    <label for="doing_other">Other:</label>
    <input type="text" name="doing_other" id="doing_other" 
    placeholder="Enter what you are in?">
    </div>
</div>

<div class="form-group">
    <label for="doing_name"><strong>School / College / Profession Name</strong></label>

    <input class="form-control" type="text" name="doing_name" id="doing_name" 
    placeholder="Enter School / College / Profession Name" maxlength="100" required>
</div>

<div class="form-group">
    <label><strong>What Course You Doing In The Above Institution?</strong></label>

    <small class="form-text text-muted mb-2">
    Note: First four options are for school students and rest options for graduation students | 
    if you are doing Job then choose what course you did in college | in case your course is not 
    listed enter your course in given Text Box.
    </small>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course1" value="high school">
    <label class="form-check-label" for="course1">High School</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course2" value="high school">
    <label class="form-check-label" for="course2">Science</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course3" value="high school">
    <label class="form-check-label" for="course3">Commerce</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course4" value="high school">
    <label class="form-check-label" for="course4">Humanities</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course5" value="high school">
    <label class="form-check-label" for="course5">BCA</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course6" value="high school">
    <label class="form-check-label" for="course6">BTech</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course7" value="high school">
    <label class="form-check-label" for="course7">MCA</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course8" value="high school">
    <label class="form-check-label" for="course8">MTech</label>
    </div>

    <div class="form-check">
    <input class="form-check-input" type="radio" name="course" id="course9" value="course_other">
    <label for="course_other">Other:</label>
    <input type="text" name="course_other" id="course_other" 
    placeholder="Enter your course">
    </div>
</div>

<div class="form-group">
    <label for="semester"><strong>Class / Semester / Work Experience in years</strong></label>

    <input class="form-control" type="number" name="semester" id="semester" 
    placeholder="Enter Class / Semester / Work Experience in years" 
    min="0" max="100" required>
</div>

<hr>

<div class="form-group">
    <label for="regmail"><strong>Gmail Address</strong></label>
    
    <input class="form-control" type="email" name="regmail" id="regmail" 
    placeholder="Enter Gmail Id" maxlength="320" pattern="[a-zA-Z0-9_\.]+@gmail.com"
    required>
    
    <small class="form-text text-muted">
    You will get all updates like your enrollment number, schedule, etc. at this Gmail Id ONLY.
    </small>
</div>

<div class="form-group">
    <label for="con_whatsapp"><strong>Contact Number (WhatsApp)</strong></label>

    <input class="form-control" type="text" name="con_whatsapp" id="con_whatsapp" 
    placeholder="Enter Contact Number" pattern="[0-9]{10}" required>
</div>

<div class="form-group">
    <label for="con_altrnt"><strong>Contact Number (Alternate)</strong></label>
    
    <input class="form-control" type="number" name="con_whatsapp" id="con_whatsapp" 
    placeholder="Enter Alternate Contact Number (Optional)" maxlength="10" pattern="[0-9]{10}">
</div>

<div class="form-group">
    <label for="address"><strong>Enter Current Address</strong></label>
    
    <small class="form-text text-muted mb-2">
    Note: This address will be considered as your shipping address for any freebies in case.
    </small>

    <input class="form-control mb-2" type="text" name="address" id="address" 
    placeholder="Enter Address Line 1" maxlength="100" required>

    <input class="form-control" type="text" name="address" id="address" 
    placeholder="Enter Address Line 2 (Optional)" maxlength="100">
</div>

<div class="form-group">
    <label for="pin_code"><strong>PIN Code</strong></label>
    
    <input class="form-control" type="number" name="pin_code" id="pin_code" 
    placeholder="Enter PIN Code" min="100000" required>
</div>

<div class="form-group col-12">
    <input class="btn btn-primary btn-lg btn-block active" type="submit" value="Submit">
</div>

<div class="row mt-5">
<div class="form-group col-6">
    <a href="index.php">
        <input class="btn btn-primary btn-sm active" type="button" value="Back">
    </a>
</div>

<div class="form-group col-6 text-right">
    <input class="btn btn-primary btn-sm active" type="reset" value="Reset">
</div>
</div>
</form>

</div>

</div>
</div>

<div class="container-fluide p-5 text-center">

<button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#why">
    WHY TO FILL THIS FORM?
</button>

<div id="why" class="collapse">
<div class="card card-body">
    <h6>
        This is the Admission Form which is required to fill for sake of record track only. 
        After filling this form you will get an unique enrolment number which will save your time when 
        you register for some course. You don't have to fill your personal details 
        every time registering for new course.
    </h6>
</div>
</div>

</div>

<!-- FILES -->
<link rel="stylesheet" href="css/bootstrap.min.css" />                <!-- BOOTSTRAP FILE -->
<script type="text/javascript" src="jquery-3.4.1.min.js"></script>    <!-- JQUERY FILE -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>    <!-- JAVASCRIPT FILE -->

</body>

</html>