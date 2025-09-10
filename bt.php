<!-- <?php
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
$sql = "SELECT * FROM blog";
$result = $conn->query($sql);
?> -->

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Blog Tab</title>
      <link rel="stylesheet" href="css/bt.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>

      <nav>
         <div class="logo">
            Foodie Foodie
         </div>

         <input type="checkbox" id="click">

         <label for="click" class="menu-btn">
         <i class="fas fa-bars"></i>
         </label>

         <ul>
         <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="recipe.php">Recipes</a></li>
            <li><a href="s.php">Search</a></li>
            <li><a class="active" href="#">Articles</a></li>
            <li><a href="auth.php">Log In</a></li>
         </ul>
         </ul>

      </nav>

    <div class="card-section">
        <div class="card">
            <div class="breadcrumb">
                <a href="#">Home</a> → Blog
            	</div>
            <h1 class="title">Blog</h1>
            <p class="subtitle">
                Discover delicious recipes, cooking tips, and foodie inspiration.
From quick meals to gourmet dishes—there’s something for every taste.
            </p>
        </div>
    </div>

    <section class="services-filter">
        <div class="container">
            <div class="filter-options">
                <h3>Filter By:</h3>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">All</button>
                    <button class="filter-btn" data-filter="Fitness">Fitness</button>
                    <button class="filter-btn" data-filter="Low-Carb">Low-Carb</button>
                    <button class="filter-btn" data-filter="Holiday">Holiday</button>
                    <button class="filter-btn" data-filter="Party">Party Food</button>
                    <button class="filter-btn" data-filter="Comfort">Comfort Food</button>
                    <button class="filter-btn" data-filter="Kid-Friendly">Kid-Friendly</button>
                    <button class="filter-btn" data-filter="Under30Minutes">Under 30 Minutes</button>
                    <button class="filter-btn" data-filter="Quick">Quick & Easy</button>
                </div>
            </div>
        </div>
    </section>

    <?php
 
 if ($result->num_rows > 0) {
  
    while ($row = $result->fetch_assoc()) {

    echo'<a href="/bbl.php?value='.htmlspecialchars($row["id"]).'" class="apost">';
        echo'<img src="/websitev2/images/'.htmlspecialchars($row["image"]);
        echo'<div class="apost-content">';
           echo' <h3>'.htmlspecialchars($row["title"]).'</h3>';

           
        echo'</div>';
    echo'</a>';
    
    }
    echo'<br>';
}

?>

<script src="js/bt.js"></script>



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

