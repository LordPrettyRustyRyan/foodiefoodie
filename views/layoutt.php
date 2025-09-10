

<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Foodie Foodie Blog">
    <meta name="keywords" content="Foodie Foodie, Blog, Food, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title>Our Foodie Blog</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link href="cssv2/responsive.css" rel="stylesheet" />

<!-- IDK nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

 <!-- slidck slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha256-UK1EiopXIL+KVhfbFa8xrmAWPeBjMVdvYMYkTAEv/HI=" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css.map" integrity="undefined" crossorigin="anonymous" />

</head>


<body class="sub_page">

  <div class="hero_area">

    <header class="header_section">

      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="home.php">
            <span>
              Foodie Foodie
            </span>
          </a>
          <div class="" id="">

            <div class="User_option">
                <a href="home.php">
                  <span>Home</span>
                </a>
                <a href="recipe.php">
                  <span>Recipes</span>
                </a>
                <a href= "s.php">
                  <span>Search</span>
                </a>
                <a href="bt.php">
                  <span>Blog</span>
                </a>
                <a href="auth.php">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>Login</span>
                </a>
                <a href="au.html">
                    <span>Contact</span>
                </a>
                <a href="au.html">
                    <span>About Us</span>
                </a>
            </div>
          </div>
        </nav>
      </div>

    </header>



<div class="caroo">
    <div class="carousel-container">
        <div class="carousel">
            <img src="images/bg1.png" class="carousel-img active" alt="Image 1">
            <img src="images/bg3.png" class="carousel-img" alt="Image 2">
            <img src="images/bg5.png" class="carousel-img" alt="Image 3">
        </div>

        <button class="prev-btn">&#10094; Prev</button>
        <button class="next-btn">Next &#10095;</button>
    </div>
</div>

<?php

$conn = new mysqli("localhost", "root", "", "db_foodie");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET["value"])) {
    $value = $_GET["value"];

$sql = "SELECT * FROM draft WHERE id = $value";
$result = $conn->query($sql);  

$recipe_name = "Not Found";
$recipe_ingredients = "No ingredients listed.";

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $recipe_name = $row["title"];
    $recipe_ingredients = nl2br($row["ingredients"]);
    $recipe_instructions = nl2br($row["instructions"]); 
}


$conn->close(); 
}

?>


<div class="thidone">
    <div class="resdes">
        <!-- Left Column: Recipe Details -->
        <div class="recipedetails">
            <h2 id="recipe-title"><?php echo $row['title']; ?></h2>
            <p><strong>Prep:</strong> <span name ="prep-time"><?php echo $row['prep_time']; ?></span></p>
            <p><strong>Cook:</strong> <span id="cook-time"><?php echo $row['cook_time']; ?></span></p>
            <p><strong>Total:</strong> <span id="total-time"><?php echo $row['total_time']; ?></span></p>
            <p><strong>Yields:</strong> <span id="yields"><?php echo $row['yields']; ?></span></p>

            
            <div class="instructions">
            <h3>Instructions</h3>
            <ul id="instructions-list"><?php 
                // Convert comma-separated ingredients into a list
                $instructions_list = explode(";", $recipe_instructions);
                echo "<ul>";
                foreach ($instructions_list as $instructions) {
                    echo "<li>" . trim($instructions) . "</li>";
                }
                echo "</ul>";
            ?></ul>
        </div>

        </div>

        <!-- Right Column: Ingredients -->
        <div class="ingredients">
            <h3>Ingredients</h3>
            <ul id="ingredients-list"><?php 
                // Convert comma-separated ingredients into a list
                $ingredients_list = explode(";", $recipe_ingredients);
                echo "<ul>";
                foreach ($ingredients_list as $ingredient) {
                    echo "<li>" . trim($ingredient) . "</li>";
                }
                echo "</ul>";
            ?></ul>
        </div>
    </div>
    <form action="publish.php" method="post">
    <input type="hidden" name="value" value="<?php echo htmlspecialchars($row['id']); ?>">
    <div class="action-buttons">
        <button type="submit" name="accept" class="approve-btn">APPROVE</button>
        <button type="submit" name="reject" class="reject-btn">REJECT</button>
    </div>
</form>
</div>






    <script src="js/script.js"></script>
