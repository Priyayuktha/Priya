<!DOCTYPE html>  
<html>  
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<style>  
body{  
  font-family: Calibri, Helvetica, sans-serif;    
}  
.container {  
    padding: 50px;   
}  
  
input[type=text], input[type=password], textarea {  
  width: 100%;  
  padding: 15px;  
  margin: 5px 0 22px 0;  
  display: inline-block;  
  border: none;  
  background: #f1f1f1;  
}  
input[type=text]:focus, input[type=password]:focus {  
  background-color: orange;  
  outline: none;  
}  
 div {  
            padding: 10px 0;  
         }  
hr {  
  border: 1px solid #f1f1f1;  
  margin-bottom: 25px;  
}  
.registerbtn {  
  background-color: #4CAF50;  
  color: white;  
  padding: 16px 20px;  
  margin: 8px 0;  
  border: none;  
  cursor: pointer;  
  width: 100%;  
  opacity: 0.9;  
}  
.registerbtn:hover {  
  opacity: 1;  
}  
body {
  background-image: url('https://w0.peakpx.com/wallpaper/463/467/HD-wallpaper-pets-pet-kittten-caine-cat-pisici-animal-dog-puppy.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>  
</head>  
<body>  
<form method="post" action="register.php">  
  <div class="container">  
  <center>  <h1> Vet Ventures Registeration Form</h1> </center>  
  <hr> 
  <h3>OWNER'S DETAILS</h3> 
  <label><b> OwnerName</b> </label>   
<input type="text" name="OwnerName" placeholder= "Ownername" size="25" required />   
<div>  
<label><b>   
Sex :  
</b></label> 
<input type="radio" value="Male" name="Sex" checked > Male   
<input type="radio" value="Female" name="Sex"> Female   
<input type="radio" value="Other" name="Sex"> Other  
  </div>  
<label>  <b>
Phone :  
</b></label>     
<input type="text" name="Phone" placeholder="phone" size="10"/ required> 
<label><b>  
CurrentAddress :
</b></label>  
<textarea cols="80" rows="5"  name="CurrentAddress"placeholder="Current Address" value="address" required>  
</textarea>  
 <label for="email"><b>Email</b></label>  
 <input type="text" placeholder="Enter Email" name="Email" required>  
  
    <label for="psw"><b>Password</b></label>  
    <input type="password" placeholder="Enter Password" name="Password" required>  
  
    <label for="psw-repeat"><b>RetypePassword</b></label>  
    <input type="password" placeholder="Retype Password" name="RetypePassword" required> 
    
    <h3> PET'S DETAILS:</h3>
    <label><b> PetName: </b></label>   
<input type="text" name="PetName" placeholder="PetName" size="15" required /> 
<label><b>   
</b>Species:  
</label>   
<select name="Species">  
<option value="Species">Species</option>  
<option value="DOG">DOG</option>  
<option value="CAT">CAT</option>  
<option value="BIRD">BIRD</option>  
<option value="RABBIT">RABBIT</option>  
<option value="CATTLE">CATTLE</option>    
</select><br>    
<label><b> Breed </b> </label>    
<input type="text" name="Breed" placeholder="Breed" size="25"required />   
<div>  
<label><b>   
Gender :  
</b></label> 
<input type="radio" value="Male" name="Gender" checked > Male   
<input type="radio" value="Female" name="Gender"> Female    
</div>
<label><b> Colour</b></label>    
<input type="text" name="Colour" placeholder="Colour" size="25"required />  
<div>  
<label> <b>sterilised:</b></label> 
<input type="radio" value="yes" name="sterilised" checked > Yes   
<input type="radio" value="No" name="sterilised"> No    
</div>
<label><b>VisitingReasons</b></label>    
<textarea cols="80" rows="5" name="VisitingReasons" placeholder="reasons" value="reasons" >  
</textarea>
<label><b>medicalconditions</b></label>    
<textarea cols="80" rows="5" name="medicalconditions" placeholder=""  ></textarea>
<div>
    <p><label for="questions"><b>Hintquestions(For security purpose)</b></label></p>
			<select name="Hintquestions" class="form-control">
                                    <option name="Hintquestions" value="In which city or town was your first job?">In which city or town was your first job?</option>
                                    <option  name="Hintquestions"value="What is your favourite colour?">What is your favourite movie?</option>
                                    <option  name="Hintquestions"value="what was your first car?">what was your first car?</option>
                                    <option  name="Hintquestions"value="what was your favourite school teachers name?">what was your favourite school teachers name?</option>
        </select>
</div> 
<div>
    <p><b><label for="answer">Answer</label></b></p>
			<input type="text" name="Answer" id="answer"> 
</div>
<button type="submit" class=".btn-success">Register</button> 
</form>  
</body>  
</html> 