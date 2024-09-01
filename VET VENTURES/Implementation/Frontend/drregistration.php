<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {
  background-image: url('https://www.shutterstock.com/image-photo/vet-examining-dog-cat-puppy-600nw-1479238910.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/drregistration.css">
    <title>Document</title>
</head>
<body>
<form action="drregistrations.php" enctype="multipart/form-data" id="contactForm" method="post" name="contactForm">
  <input id="hidFormName" name="hidFormName" type="hidden" value="Contact Form" />
    <ul class="contactform clearfix nobullets">
        
      <li class="twelvecol clearfix">
        <h3>DOCTOR REGISTRATION</h3> </li>
      <li class="sixcol">
        <label class="required" for="txtName">Name</label>
        <input type="text" class="text" id="txtName" name="Name" required="required" title="Full Name" data-parsley-required-message="Please Enter Your Full Name!" /> </li>
      <li class="sixcol">
        <label class="required" for="txtProTitle">Specialization</label>
        <input type="text" class="text" id="txtName" name="Specialization" required="required" title="Specialization" data-parsley-required-message="Please Enter your specialization!" /> </li>
      <li class="sixcol">
        <label class="required" for="txtCompany">LicenseNumber</label>
        <input type="text" class="text" id="txtCompany" name="LicenseNumber" required="required" title="LicenseNumber" data-parsley-required-message="Please Enter Your License Number!" /> </li>
      <li class="sixcol last">
        <label class="required" for="txtPhone">Age</label>
        <input type="tel" class="text" id="txtPhone" name="Age" required="required" title="(XXX) XXX-XXXX" data-parsley-required-message="Please Enter Your Age" onblur="updatePhone(this.value)" /> </li>
      <li class="sixcol">
        <label class="required" for="txtEmail">Gender</label>
        <input type="text" class="text" id="txtEmail" name="Gender" required="required" title="Gender" data-parsley-required-message="Please Enter Your Gender" onblur="updateEmail(this.value)" /> </li>
      <li class="sixcol last">
        <label for="txtAddress">Phone</label>
        <input type="text" class="text" id="txtAddress" name="Phone" title="Phone" /> </li>
      <li class="clearfloat"></li>
      <li class="fourcol">
        <label for="txtZip">Email</label>
        <input type="text" class="text zip-mask" id="txtZip" name="Email" title="Email" onblur="checkZip(this.value, 'Contact Form', 1)" /> </li>
      <li class="fourcol">
        <label for="txtCity">Password</label>
        <input type="password" class="text" id="txtCity" name="Password" title="City" /> </li>
      <li class="fourcol last">
        <label for="cboState">City</label>
        <input type="text" class="text" id="txtCity" name="City" title="State" /> </li>
        
      
          </ul>
        </fieldset>
      </li>
          </ul>
        </fieldset>
      </li>
    </ul>
    <button type="submit" class="big-button">Register</button>
</form>

</body>
</html>