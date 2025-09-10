<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login & Signup</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php if (isset($_SESSION['alert'])): ?>
  <div class="alert alert-<?= $_SESSION['alert']['type'] ?> alert-dismissible fade show" role="alert">
    <?= $_SESSION['alert']['msg'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php unset($_SESSION['alert']); ?>
<?php endif; ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/auth.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    

    <title>Login & Register Page  ->> Code With Patel</title>
</head>

<body>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form  method="post">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-github'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-linkedin'></i></a>
                </div>
                <span>Register with E-mail</span>
                <input type="text" name="name" placeholder="Name">
                <input type="email" name="email" placeholder="Enter E-mail">
                <input type="password" name="password" placeholder="Enter Password">
                <button type="submit" name="signup">Sign Up</button>
            </form>
        </div>


        <div class="form-container sign-in">
            <form method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icons"><i class='bx bxl-google'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-facebook'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-github'></i></a>
                    <a href="#" class="icons"><i class='bx bxl-linkedin'></i></a>
                </div>
                <span>Login With Email & Password</span>
                <input type="email" name="email" placeholder="Enter E-mail">
                <input type="password" name="password" placeholder="Enter Password">
                <a href="#">Forget Password?</a>
                <button type="submit" name="login">Sign In</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome To <br>Foodie Foodie</h1>
                    <p>Sign in With ID & Passowrd</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hi Foodies</h1>
                    <p>Join "Foodie Foodie" to Enjoy Healthy and Delicious Recipes</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/auth.js"></script>
</body>

</html>

<?php
$conn = new mysqli("localhost", "root", "", "db_foodie");

if (isset($_POST['signup'])) {
    // Signup logic
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $check = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($check && $check->num_rows > 0) {
        $_SESSION['alert'] = ["type" => "danger", "msg" => "Email already exists!"];
    } else {
        $conn->query("INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')");
        
    }
    header("Location: auth.php");
    exit;
}

if (isset($_POST['login'])) {
    // Login logic
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $conn->query("SELECT * FROM users WHERE email='$email'");
    if ($user && $user->num_rows > 0) {
        $row = $user->fetch_assoc();
        if ($password === $row['password']) {
            if ($email === "Admin@gmail.com") {
                $_SESSION['user'] = $row['name'];
                
                header("Location: admin.html");
                exit;
            }
            if( $email !== "Admin@gmail.com"){
            $_SESSION['user'] = $row['name'];
            
            header("Location: user.html");
            exit;
        } 
    }
        else {
            $_SESSION['alert'] = ["type" => "danger", "msg" => "Incorrect password!"];
        }
    }
     else {
        $_SESSION['alert'] = ["type" => "danger", "msg" => "Account not found!"];
        header("Location: auth.php");
        exit;
    }
    
}
?>