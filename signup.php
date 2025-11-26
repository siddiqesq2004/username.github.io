<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - MarketPro</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-body">

    <div class="signup-container">
        <h2>Create Your Account</h2>
        <p class="auth-subtitle">Select account type to continue</p>

        <!-- ROLE SELECTION -->
        <div class="role-selection">
    <div class="role-card" id="author-card" onclick="selectRole('author')">
        <img src="assets/images/author.png" alt="Author">
        <h3>Author</h3>
        <p>Post projects and hire professionals.</p>
    </div>

    <div class="role-card" id="professional-card" onclick="selectRole('professional')">
        <img src="assets/images/professional.png" alt="Professional">
        <h3>Professional</h3>
        <p>Offer your skills and get hired.</p>
    </div>
</div>


        <!-- SIGNUP FORM -->
        <form class="auth-form signup-form" id="signupForm" style="display:none;">
            <input type="text" placeholder="Full Name" class="auth-input" required>
            <input type="email" placeholder="Email Address" class="auth-input" required>
            <input type="password" placeholder="Password" class="auth-input" required>

            <input type="hidden" id="selectedRole" name="role">

            <button type="submit" class="auth-btn">Create Account</button>
        </form>

        <p class="signup-text">
            Already have an account?
            <a href="login.php">Login</a>
        </p>
    </div>

    <script>
        function selectRole(role) {
            document.getElementById("signupForm").style.display = "flex";
            document.getElementById("selectedRole").value = role;
        }
    </script>

</body>
</html>
