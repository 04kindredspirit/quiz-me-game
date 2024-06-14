<?php 

@include 'config.php';

if (isset($_POST['Submit'])) {
    $Type = $_POST['Type'];
    $Campus = $_POST['Campus'];
    $CourseStrand = $_POST['CourseStrand'];
    $Yeargrade = $_POST['Yeargrade'];
    $FirstName = $_POST['FirstName'];
    $MiddleName = $_POST['MiddleName'];
    $LastName = $_POST['LastName'];
    $DateofBirth = $_POST['DateofBirth'];
    $Gender = $_POST['Gender'];
    $Contact = $_POST['Contact'];
    $EmailAddress = $_POST['EmailAddress'];
    $Address = $_POST['Address'];
    
    

    $query = "INSERT INTO newenrollees (Campus, Type, CourseStrand, Yeargrade, FirstName, MiddleName, LastName, DateofBirth, Gender, Contact, EmailAddress, Address)
              VALUES ('$Campus', '$Type', '$CourseStrand', '$Yeargrade', '$FirstName', '$MiddleName', '$LastName', '$DateofBirth', '$Gender', '$Contact', '$EmailAddress', '$Address')";

if ($conn->query($query)) {
    echo '<script>alert("Submitted Successfully")</script>'; 
    echo '<script>window.location.href = "online-application.php";</script>';
    exit();
} else {
    echo "Error: " . $conn->error;
}
}




?>