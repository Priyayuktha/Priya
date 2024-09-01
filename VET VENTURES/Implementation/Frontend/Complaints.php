<?php
include("config.php");

$PetName = $_POST['PetName'];
$PetBreed = $_POST['PetBreed'];
$PetGender = $_POST['PetGender'];
$PetWeight = $_POST['PetWeight'];
$PetComplaint = $_POST['PetComplaint'];

// File upload handling
$targetDir = "uploads/"; // Directory where uploaded files will be stored
$uploadFile = $targetDir . basename($_FILES["uploadphoto"]["name"]); // Full path to upload directory + file name

// Check if file was uploaded without errors
if (move_uploaded_file($_FILES["uploadphoto"]["tmp_name"], $uploadFile)) {
    // File uploaded successfully, now insert into database
    $ins = "INSERT INTO complaint (`PetName`, `PetBreed`, `PetGender`, `PetWeight`, `PetComplaint`, `uploadphoto`) VALUES ('$PetName', '$PetBreed', '$PetGender', '$PetWeight', '$PetComplaint', '$uploadFile')";

    if (mysqli_query($con, $ins)) {
        // Redirect to homepage or success page
        header("Location: homepage.php");
        exit();
    } else {
        echo "Error: " . $ins . "<br>" . mysqli_error($con);
    }
} else {
    echo "File upload failed.";
}
?>
