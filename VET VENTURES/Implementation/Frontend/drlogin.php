<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/drlogin.css">
    <title>Dr Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap");

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Quicksand", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  width: 100%;
  background: #222431;
  padding: 40px 20px;
}

/* Snow */

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
}

main {
  display: grid;
  grid-template-columns: 45% 55%;
  place-items: center;
  background: #f6f6f6;
  width: min(700px, 95%);
  border-radius: 20px;
}

/* Left Side */

.left-side {
  height: 100%;
  width: 100%;
  background-image: url(https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/64ef8d9a-9202-4543-b838-82f4c7c91ccf);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
  pointer-events: none;
  border-radius: 20px 0 0 20px;
}

/* Right Side */

.right-side {
  padding: 60px;
}

/* Button Group */

.btn-group {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  gap: 5px;
  margin-bottom: 32px;
}

.btn-group .btn {
  display: flex;
  align-items: center;
  column-gap: 4px;
  width: max-content;
  font-size: 0.8rem;
  font-weight: 500;
  padding: 8px 6px;
  border: 2px solid #6b7280;
  border-radius: 5px;
  background-color: #f6f6f6;
  transform: scale(1);
  cursor: pointer;
  transition: transform 0.1s ease, background-color 0.5s, color 0.5s;
}

.btn-group .btn:focus {
  transform: scale(0.97);
}

.btn-group .btn:hover {
  background-color: #000;
  color: #eee;
}

.btn img {
  width: 16px;
  height: 16px;
}

.logo {
  display: flex;
  align-items: center;
  justify-content: center;
  background: #f6f6f6;
  border-radius: 50%;
  padding: 2px;
}

/* OR */

.or {
  position: relative;
  text-align: center;
  margin-bottom: 24px;
  font-size: 1rem;
  font-weight: 600;
}

.or::before,
.or::after {
  content: "";
  position: absolute;
  top: 50%;
  width: 40%;
  height: 1px;
  background: #000;
}

.or::before {
  left: 0;
}

.or::after {
  right: 0;
}

/* Inputs and Labels */

input {
  width: 100%;
  padding: 12px 20px;
  border: 2px solid #ccc;
  outline: 0;
  border-radius: 5px;
  background-color: transparent;
  margin: 4px 0 18px;
  font-size: 0.85rem;
  font-weight: 600;
  transition: all 0.5s;
}

input:focus {
  border: 2px solid #000;
}

input:-webkit-autofill,
input:-webkit-autofill:hover,
input:-webkit-autofill:focus,
input:-webkit-autofill:active {
  -webkit-background-clip: text;
  -webkit-text-fill-color: #000;
  transition: background-color 5000s ease-in-out 0s;
}

label {
  font-weight: 600;
  font-size: 0.9rem;
}

/* Login Button */

.login-btn {
  width: 100%;
  font-size: 0.9rem;
  font-weight: 600;
  padding: 8px 24px;
  margin: 12px 0 24px;
  border: 2px solid #6b7280;
  border-radius: 5px;
  background-color: #f6f6f6;
  cursor: pointer;
  transition: all 0.5s;
}

.login-btn:hover {
  background-color: #000;
  color: #eee;
}

/* Links */

.links {
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

a:link,
a:visited,
a:hover,
a:active {
  text-decoration: none;
}

a {
  color: #000;
  font-size: 0.88rem;
  font-weight: 600;
  letter-spacing: -1px;
  transition: all 0.4s ease;
}

a:hover {
  color: rgb(13, 133, 185);
}

</style>
</head>
<body>
    <div id="particles-js" class="snow"></div>

    <main>
       <div class="left-side"></div>
      
      <div class="right-side">
        <form method="post"action="drauth.php">
        <div class="btn-group">
          <button class="btn">
            <img class="logo" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/d1c98974-c62d-4071-8bd2-ab859fc5f4e9" alt="" />
            <span>Sign in with Google</span>
          </button>
          <button class="btn">
            <img class="logo" src="https://github.com/ecemgo/mini-samples-great-tricks/assets/13468728/59c1561b-8152-4d05-b617-0680a7629a0e" alt="" />
            <span>Sign in with Apple</span>
          </button>
        </div>
        

        <div class="or">OR</div>

        <label for="Email">Email</label>
        <input type="text" placeholder="Enter Email" name="Email" required />

        <label for="password">Password</label>
        <input
          type="password"
          placeholder="Enter Password"
          name="Password"
          required />

        <button type="submit" class="login-btn">Sign in</button>
        <div class="links">
          <a href="#">Forgot password?</a>
          <a href="#">Do not have an account?</a>
        </div>
      </form>
      </div>
      
    </main>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" data-deferred="1"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', 'bilder/particlesjs-config.json', function() {
  console.log('callback - particles.js config loaded');
});
        particlesJS("particles-js", {
  particles: {
    number: {
      value: 310,
      density: {
        enable: true,
        value_area: 800,
      },
    },
    color: {
      value: "#fff",
    },
    shape: {
      type: "circle",
      stroke: {
        width: 0,
        color: "#000000",
      },
      polygon: {
        nb_sides: 5,
      },
    },
    opacity: {
      value: 1,
      random: false,
      anim: {
        enable: false,
        speed: 1,
        opacity_min: 0.1,
        sync: false,
      },
    },
    size: {
      value: 3,
      random: true,
      anim: {
        enable: false,
      },
    },
    line_linked: {
      enable: false,
    },
    move: {
      enable: true,
      speed: 2,
      direction: "bottom",
      random: false,
      straight: false,
      out_mode: "out",
      bounce: false,
      attract: {
        enable: false,
        rotateX: 600,
        rotateY: 1200,
      },
    },
  },
  retina_detect: true,
});

</script>
</body>
</html>