<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Blog Layout</title>
      <link rel="stylesheet" href="css/bbl.css">
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
            <li><a href="s.php">Search</a></li>
            <li><a class="active" href="bt.php">Blog</a></li>
            <li><a href="auth.php">Log In</a></li>
            <li><a href="au.html">Contact Us</a></li>
            <li><a href="au.html">About Us</a></li>
         </ul>

      </nav>

      <?php

$conn = new mysqli("localhost", "root", "", "db_foodie");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (isset($_GET["value"])) {
    $value = $_GET["value"];

$sql = "SELECT * FROM blog WHERE id = $value";
$result = $conn->query($sql);  

$recipe_name = "Not Found";
$recipe_ingredients = "No ingredients listed.";

if ($result->num_rows > 0) {
    $row= $result->fetch_assoc();
    $tags = nl2br($row["tag"]); 
}


$conn->close(); 
}

?>

        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <!-- Post content-->
                    <article>
                        <!-- Post header-->
                        <header class="mb-4">
                            <!-- Post title-->
                            <h1 class="fw-bolder mb-1"><?php echo $row["title"]; ?></h1>
                            <!-- Post meta content-->
                            <div class="text-muted fst-italic mb-2"><?php echo $row['time']; ?></div>
                            <!-- Post categories-->
                            <ul><?php 
                
                $tags_list = explode(";", $tags);
                echo "<ul>";
                foreach ($tags_list as $tags) {
                    echo '<li><a class="badge bg-secondary text-decoration-none link-light" href="">' . trim($tags) . '</a></li>';
                }
                echo "</ul>";
            ?></ul>
                        </header>
                        <!-- Preview image figure-->
                         <?php
                         $res
                         ?>
                        <figure class="mb-4"><img class="img-fluid rounded" src="blog/<?php  echo$row['image']?>" alt="..." /></figure>
                        <!-- Post content-->
                        <section class="mb-5">
                            <p class="fs-5 mb-4"><?php echo $row['article']; ?></p>
                        </section>
                    </article>
                </div>

                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="formlabel" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="searchbtn" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>

                    <!-- Categories widget-->
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">
                        <div class="catebody">
                            <div class="row">
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Quick & Easy</a></li>
                                        <li><a href="#!">Under 30 Minutes</a></li>
                                        <li><a href="#!">Kid-Friendly</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6">
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="#!">Comfort Food</a></li>
                                        <li><a href="#!">Party Food</a></li>
                                        <li><a href="#!">Fitness</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- Side widget-->
                    <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>

