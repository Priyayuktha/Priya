<?php
include("config.php");

$FullName = $_REQUEST['FullName'];
$Email = $_REQUEST['Email'];
$PhoneNumber= $_REQUEST['PhoneNumber'];
$Message = ($_REQUEST['Message']);

 $ins = "insert into Contacts (`FullName`,`Email`,`PhoneNumber`,`Message`) values ('$FullName' , '$Email' ,'$PhoneNumber','$Message')";
  
if($ins_rs = mysqli_query($con, $ins))
{
    
    ?>
    <script>
        window.location.href="homepage.php";
    </script>
    <?php

}
else
{
    echo "failed";
}


?>