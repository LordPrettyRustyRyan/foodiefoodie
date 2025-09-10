<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_foodie";

// Connect to DB
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch recipes
$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Foodie Foodie Recipes">
    <meta name="keywords" content="Foodie Foodie, Recipes, Food, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title>Foodie Foodie Recipes</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Unna:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="cssv2/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="cssv2/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/recipe.css" type="text/css">
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




    <div class="card-section">
        <div class="card">
            <div class="breadcrumb">
                <a href="#">Home</a> → Recipes
            	</div>
            <h1 class="title">Recipes</h1>
            <p class="subtitle">
                Browse Collection of Alternate Food Recipes for by course, cooking style, cuisine, ingredient, holiday, 
                and more categories to find a new alternative food recipe.
            </p>
        </div>
    </div>




<!--
    <div class="category-container">
        <button class="nav-btn" id="left-btn" onclick="scrollLeft()">&#8249;</button>

        <div class="scroll-wrapper">

                <button class="category-btn" onclick="selectCategory(this)">Contests</button>
                <button class="category-btn" onclick="selectCategory(this)">Cooking Style</button>
                <button class="category-btn" onclick="selectCategory(this)">Cuisines</button>
                <button class="category-btn" onclick="selectCategory(this)">Dishes & Beverages</button>
                <button class="category-btn" onclick="selectCategory(this)">Food News</button>
                <button class="category-btn" onclick="selectCategory(this)">Gear</button>
                <button class="category-btn" onclick="selectCategory(this)">Health & Wellness</button>
                <button class="category-btn" onclick="selectCategory(this)">Contests</button>
                <button class="category-btn" onclick="selectCategory(this)">Cooking Style</button>
                <button class="category-btn" onclick="selectCategory(this)">Cuisines</button>
                <button class="category-btn" onclick="selectCategory(this)">Dishes & Beverages</button>
                <button class="category-btn" onclick="selectCategory(this)">Food News</button>
                <button class="category-btn" onclick="selectCategory(this)">Gear</button>
                <button class="category-btn" onclick="selectCategory(this)">Health & Wellness</button>
                <button class="category-btn" onclick="selectCategory(this)">More Categories</button>

        </div>

        <button class="nav-btn" id="right-btn" onclick="scrollRight()">&#8250;</button>
    </div>

-->

    <?php
 
    if ($result->num_rows > 0) {
        
        echo'<div class="container-mt-4">';
        $count = 0;
        echo'<div class="row g-4">';
        
        while ($row = $result->fetch_assoc()) {
            
           echo'<div class="col-md-3">';
           echo '<a href="../website/layout.php?value='.htmlspecialchars($row["id"]).'"class="upload">' ;
           echo ' <img src="recipe/'.htmlspecialchars($row['step_4']).'" alt="image">';
            echo '<div class="content">';
               echo ' <h5>'.htmlspecialchars($row["title"]).'</h5>';
               echo ' <p>'.htmlspecialchars($row["description"]).'</p>';
           echo ' </div>';
        echo '</a>';
        echo ' </div>';
        $count++;

        // If 4 items are placed, close the row and start a new one
        if ($count % 4 == 0) {
            echo '</div><div class="row g-4">';
        }
        }
        echo ' </div>';
        echo '</div>';

    } else {
        echo "<p>No recipes found.</p>";
    }

    $conn->close();
    ?>










<!--

    <div class="pagination">
        <button class="page page-control" id="prev">Prev</button>
        <div id="pages"></div>
        <button class="page page-control" id="next">Next</button>
    </div>
-->

<script src="js/recipe.js"></script>


<footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section contact-info">
                    <h2 class="logo">Foodie Foodie<span>.</span></h2>
                    <p><i class="fas fa-envelope"></i> info@FoodieFoodie.com</p>
                    <p><i class="fas fa-phone-alt"></i> (690)-690-6969</p>
                    <p><i class="fas fa-map-marker-alt"></i> Go Left, Go Right.</p>
                </div>

                <div class="footer-section links">
                    <h3>. Pages</h3>
                    <ul>
                        <li><a href="home.php">Home</a></li>
                            <li><a href="recipe.php">Recipes</a></li>
                            <li><a href="s.php">Search</a></li>
                            <li><a href="bt.php">Blog</a></li>
                            <li><a href="auth.php">Patrons</a></li>
                            <li><a href="au.html">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section links">
                    <h3>. Recipes</h3>
                    <ul>
                        <li><a href="#">Breakfast</a></li>
                        <li><a href="#">Lunch</a></li>
                        <li><a href="#">Dinner</a></li>
                        <li><a href="#">Snacks</a></li>
                        <li><a href="#">Beverages</a></li>
                        <li><a href="#">Sauces</a></li>
                        <li><a href="#">Desserts</a></li>
                    </ul>
                </div>

                <div class="footer-section hours">
                    <h3>.  Contact Us</h3>
                    <ul>
                        <li>Week Days : we busy</li>
                        <li>Weekends : we chill</li>
                        <li>so, don't contact</li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>Copyright © FoodieFoodie. | Designed for Finding Food Alterantives - Powered By THE IMPERIUM</p>
            </div>
        </div>
    </footer>



