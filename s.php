<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Navigation Menu</title>
      <link rel="stylesheet" href="css/s.css">
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
            <li><a href="home.php">Home</a></li>
            <li><a href="recipe.php">Recipes</a></li>
            <li><a class="active" href="s.php">Search</a></li>
            <li><a href="bt.php">Blog</a></li>
            <li><a href="auth.php">Log In</a></li>
            <li><a href="au.html">Contact Us</a></li>
            <li><a href="au.html">About Us</a></li>
         </ul>

      </nav>

      <div class="content">

    <div class="card-section">
        <div class="card">
            <div class="breadcrumb">
                <a href="#">Home</a> → Search
            	</div>
            <h1 class="title">Search</h1>
            <p class="subtitle">
                Browse Collection of Alternate Food Recipes for by course, cooking style, cuisine, ingredient, holiday, 
                and more categories to find a new alternative food recipe.
            </p>
        </div>
    </div>

    <div class="search-container">
    <form action="search.php" method="get">
        <input type="text" name="search" placeholder="Search Foodie...">
        <button>Search</button>
  <select id="category" name="category" class="custom-select" required>
    <option value="">-- Choose a Category --</option>
    <option value="breakfast">Breakfast</option>
    <option value="lunch">Lunch</option>
    <option value="dinner">Dinner</option>
    <option value="dessert">Dessert</option>
    <option value="snack">Snack</option>
    <option value="beverage">Beverage</option>

  </select></form>
    </div>

<div class="form-group">

</div>

    <div class="alphabet-buttons" id="alphabetButtons">
        <!-- Alphabet buttons will be dynamically added here -->
    </div>

    <div id="ingredientsContainer" class="ingredients-section">
        <!-- Ingredients list will be dynamically added here -->
    </div>

      </div>

<script src="js/s.js"></script>

   </body>
</html>