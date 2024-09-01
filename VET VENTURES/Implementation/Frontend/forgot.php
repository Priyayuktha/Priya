<html>
<head>
<style>
body {
  background-image: url('https://media.istockphoto.com/id/1417882544/photo/large-group-of-cats-and-dogs-looking-at-the-camera-on-blue-background.webp?b=1&s=170667a&w=0&k=20&c=Q-OSb3I9cuoCZT5rm539lIeu23zU3FdFyB35WhL0Kes=');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
	<title>Forgot Password</title>
	<link href="css/forgot.css" rel="stylesheet" >
</head>
<body>
	<div class="row">
		<h1>Forgot Password</h1>
		<h6 class="information-text">Enter your registered email to reset your password.</h6>
		<div class="form-group">
		<form method="post" action="Fpass.php" class="form-group">
		<p><label for="username">Email</label></p>
			<input type="email" name="Email" id="email">
			<div class="form-group">
			<p><label for="questions"> Hintquestions</label></p>
			<select name="Hintquestions" class="form-control">
                                    <option value="In which city or town was your first job?">In which city or town was your first job?</option>
                                    <option value="What is your favourite colour?">What is your favourite movie?</option>
                                    <option value="what was your first car?">what was your first car?</option>
                                    <option value="what was your favourite school teachers name?">what was your favourite school teachers name?</option>
            </select>
			<div class="form-group">
		<p><label for="answer">Answer</label></p>
			<input type="text" name="Answer" id="answer">
			<div class="form-group">
		<p><label for="password">Password</label></p>
			<input type="password" name="Password" id="password">
			<div class="form-group">
		<p><label for="RetypePassword">Confirmpassword</label></p>
			<input type="password" name="RetypePassword" id="confirmpassword">
			<div class="form-group">
                            <label class="form-label col-md-4"></label>
                            <div class="col-sm-8">
                                <input type="submit" style="background-color:white;border-color:white" class="button" >
                            </div>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</form>
</body>
</html>