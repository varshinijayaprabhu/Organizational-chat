<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House of TechGeek - Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<marquee behavior="scroll" direction="left" style="background-color: #ffeb3b; color: #000; padding: 10px; font-weight: bold;">
    🚧 Yo! This site’s still cooking 🍳 Expect some bugs 🐞 and broken stuff 💔. Stay tuned, legends 💻✨
</marquee>
    <!-- Organization Header -->
    <div class="org-header">
        <div class="org-title-container">
            <h1 class="org-title">Organizational Chat</h1>
            <p class="org-subtitle">From The House of TechGeeks</p>
            <button id="dev-info-button">Meet Our Developers</button>
        </div>
    </div>

    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Register</h1>
      <form method="post" action="register.php">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
            <p id="passwordHelp" class="form-text"></p>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <p class="or"></p>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              <label for="password">Password</label>
          </div>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <a href="admin.php" class="admin-button">
          <i class="fas fa-user-shield"></i> Admin</a>
        <p class="or"></p>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
        <!-- Forgot Password Link -->
        <div class="forgot-password-link">
            <a href="forgot_password.php">Forgot Password?</a>
        </div>
    </div>

    <!-- Developer Popup Modal -->
    <div id="dev-modal" class="modal">
        <div class="modal-content">
            <span class="close-button">&times;</span>
            <h2>Our Developer Team</h2>
            <p class="team-intro">The brilliant minds behind House of TechGeeks</p>
            
            <div class="dev-grid">
                <!-- Developer 1 -->
                <div class="dev-card">
                    <div class="dev-img">
                        <img src="photos/vivek.jpg" alt="Vivek R">
                    </div>
                    <h3>Vivek R</h3>
                    <p>Student</p>
                    <div class="dev-links">
                        <a href="https://github.com/Vivektheprogrammer" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://shorturl.at/jEuqd" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <!-- Developer 2 -->
                <div class="dev-card">
                    <div class="dev-img">
                        <img src="photos/yashu.jpg" alt="Yashaswini N">
                    </div>
                    <h3>Yashaswini N</h3>
                    <p>Student</p>
                    <div class="dev-links">
                        <a href="https://github.com/Yashaswinin3" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://shorturl.at/lT3Ip" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <!-- Developer 3 -->
                <div class="dev-card">
                    <div class="dev-img">
                        <img src="photos/thangi.jpg" alt="Varshini J">
                    </div>
                    <h3>Varshini J</h3>
                    <p>Student</p>
                    <div class="dev-links">
                        <a href="https://github.com/varshinijayaprabhu" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://shorturl.at/VdvUG" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
                
                <!-- Developer 4 -->
                <div class="dev-card">
                    <div class="dev-img">
                        <img src="photos/shubha.jpg" alt="Shubhashree TK">
                    </div>
                    <h3>Shubhashree TK</h3>
                    <p>Student</p>
                    <div class="dev-links">
                        <a href="https://github.com/SHUBHASHREE01" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="https://shorturl.at/5EFKF" target="_blank"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>