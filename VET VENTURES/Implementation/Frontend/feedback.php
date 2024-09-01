<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/feedback.css">
  <title>Feedback Form</title>
</head>
<body>
<div class="container">
    <h1 id="title">Vet Ventures</h1>
    <p id="description"><b>How satisfied are you with our customer support performance?</b></p>
    <form class="survey-form"  method="post" action="Feedbacks.php">
      <div class="form-group">
        <label for="name" id="name-label">PetName :</label>
        <input type="text" class="form-control" id="name" name="PetName" required placeholder="Enter The Animal's Name">
      </div>
      <div class="form-group">
        <label for="email" id="email-label">Email :</label>
        <input type="email" class="form-control" id="Email" name="Email" required placeholder="Enter Your Email">
      </div>
      <div class="form-group">
        <label for="age" id="number-label">PetAge :</label>
        <input type="number" class="form-control" id="age" name="PetAge" placeholder="Enter The Animal's Age" min="0" max="50">
      </div>
      <div class="form-group">
        <label for="dropdown">PetType :</label>
        <select id="dropdown" name="PetType" required>
          <option value="dog">Dog</option>
          <option value="cat">Cat</option>
          <option value="bird">Bird</option>
          <option value="rabbit">Rabbit</option>
          <option value="cattle">Cattle</option>
        </select>
      </div>
      <div class="form-group">
        <label>petscurrentmood:</label>
        <label><input type="radio" name="petscurrentmood" value="happy"> 😊</label>
        <label><input type="radio" name="petscurrentmood" value="neutral"> 😐 </label>
        <label><input type="radio" name="petscurrentmood" value="sad"> 😞</label>
        <label><input type="radio" name="petscurrentmood" value="angry"> 😠</label>
      </div>
      <div class="form-group">
        <label for="comments">Additionalcomments :</label>
        <textarea id="comments" name="Additionalcomments" placeholder="Enter your comments here..."></textarea>
      </div>
      <div class="form-group">
      <button type="submit">Submit</button>
    </form>
  </div>
  <script src="js/feedback.js"></script>
</div>
</body>
</html>
