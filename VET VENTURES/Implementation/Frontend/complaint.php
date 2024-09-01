<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vet Ventures complaint page</title>
  <link rel="stylesheet" href="css/complaint.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <form method="post" action="Complaints.php" enctype="multipart/form-data">
    <div class="signup-container">
      <div class="left-container">
        <h1>
          <i class="fas fa-paw"></i>
          VET VENTURES
        </h1>
        <div class="puppy">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-542207-jpeg.png" alt="Puppy Image">
        </div>
      </div>
      <div class="right-container">
        <header>
          <h1>Yay, buddies! Ensure your pet gets the best care!</h1>
          <div class="set">
            <div class="pets-name">
              <label for="pets-name">PetName</label>
              <input type="text" id="pets-name" name="PetName" placeholder="Pet's Name">
            </div>
          </div>
      
          <div class="set">
            <div class="pets-breed">
              <label for="pets-breed">PetBreed</label>
              <input type="text" id="pets-breed" name="PetBreed" placeholder="Pet's breed">
            </div>
          </div>
          <div class="set">
            <div class="pets-gender">
              <label for="pet-gender-female">PetGender</label>
              <div class="radio-container">
                <input type="radio" id="pet-gender-female" name="PetGender" value="female" checked>
                <label for="pet-gender-female">Female</label>
                <input type="radio" id="pet-gender-male" name="PetGender" value="male">
                <label for="pet-gender-male">Male</label>
              </div>
            </div>
          </div>
          <div class="pet's weight">
            <label for="pet-weight-0-25">PetWeight</label>
            <div class="radio-container">
              <input type="radio" id="pet-weight-0-25" name="PetWeight" value="0-25" checked>
              <label for="pet-weight-0-25">0-25 KG</label>
              <input type="radio" id="pet-weight-25-50" name="PetWeight" value="25-50">
              <label for="pet-weight-25-50">25-50 KG</label>
              <input type="radio" id="pet-weight-50-100" name="PetWeight" value="50-100">
              <label for="pet-weight-50-100">50-100 KG</label>
              <input type="radio" id="pet-weight-100-plus" name="PetWeight" value="100+">
              <label for="pet-weight-100-plus">100+ KG</label>
            </div>
          </div>
          
          <div class="set">
            <div class="Pets-complaint">
              <label for="Pets-complaint">PetComplaint</label>
              <input type="text" id="Pets-complaint" name="PetComplaint" placeholder="Pet's complaint">
            </div>
          </div>
          <div class="pets-photo">
            <button id="pets-upload" type="button"> <!-- Changed type to button -->
                <i class="fas fa-camera-retro"></i>
            </button>
            <label for="upload-input">Upload a photo</label>
            <input type="file" id="upload-input" style="display: none;" accept="image/*" name="uploadphoto">
          </div>
        </header>
        <footer>
          <div class="set">
            <button type="submit" id="submit">Submit</button>
          </div>
        </footer>
      </div>
    </div>
  </form>
  <script src="js/complaint.js"></script>
  <script>
    document.getElementById('pets-upload').addEventListener('click', function() {
        document.getElementById('upload-input').click();
    });

    // Add event listener to file input to check if a file has been selected
    document.getElementById('upload-input').addEventListener('change', function() {
        var file = this.files[0];
        if (file) {
            // File selected, enable form submission
            document.getElementById('submit').removeAttribute('disabled');
        } else {
            // No file selected, disable form submission
            document.getElementById('submit').setAttribute('disabled', 'disabled');
        }
    });
  </script>
</body>
</html>
