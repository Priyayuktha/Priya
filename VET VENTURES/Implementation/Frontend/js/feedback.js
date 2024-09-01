document.getElementById("survey-form").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent the form from submitting
    
    // Fetching values from input fields
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var age = document.getElementById("age").value;
    var type = document.getElementById("dropdown").value;
    var sicknesses = [];
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
      if (checkbox.checked) {
        sicknesses.push(checkbox.value);
      }
    });
    var mood = document.querySelector('input[name="mood"]:checked').value;
    var comments = document.getElementById("comments").value;
  
    // Displaying submitted data
    alert("Submitted Data:\n" +
      "Name: " + name + "\n" +
      "Email: " + email + "\n" +
      "Age: " + age + "\n" +
      "Type: " + type + "\n" +
      "Sicknesses: " + sicknesses.join(", ") + "\n" +
      "Mood: " + mood + "\n" +
      "Comments: " + comments
    );
  
    // Resetting form after submission
    document.getElementById("survey-form").reset();
  });
  