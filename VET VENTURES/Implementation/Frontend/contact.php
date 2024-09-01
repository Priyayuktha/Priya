<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/contact.css">
<title>Contact Form</title>
</head>
<body>
<div class="form-main">
  <div class="main-wrapper">
    <h2 class="form-head">Contact Form</h2>
    <form class="form-wrapper" method="post" action="Contacts.php">
      <div class="form-card">
        <input class="form-input" type="text" name="FullName" required="required" />
        <label class="form-label" for="full_name">FullName</label>
      </div>
<div class="form-card">
        <input class="form-input" type="email" name="Email" required="required" />
        <label class="form-label" for="email">Email</label>
      </div>
<div class="form-card">
        <input class="form-input" type="number" name="PhoneNumber" required="required" />
        <label class="form-label" for="phone_number">PhoneNumber</label>
      </div>
<div class="form-card"> 
        <label class="form-textarea-label" for="message">Message</label>
        <textarea class="form-textarea" maxlength="420" rows="3" name="Message" required="required"></textarea>
      </div>
      <div class="btn-wrap">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
</body>
</html>
