<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/login.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>        <!--https://boxicons.com/ -->

    <title>Just Post It</title>
</head>

<body>

<header class="header_section">
    <nav class="customnavcontainer">
        <a class="navbar-brand" href="home.php">
             <span>Foodie Foodie </span>
        </a>

        <div class="nav-right"> <!-- New wrapper for alignment -->
            <div class="User_option">
		<input type="text" class="search-bar" placeholder="Search Foodie....">

                <a href="n.php" class="post-link">
                <img id="noti" src="images/icons/icon4.png" alt="Notifications"></a>
		</a>

                <a href="login.php" class="post-link">
		<img id="post" src="images/icons/icon5.png" alt="Post">
 		<span class="post-text">Post</span>
		</a>

                <button id="profile-btn" class="profile-btn" onclick="toggleDropdown()">
		<img src="images/profile.jpg" alt="Profile">
		</button>
<!-- Dropdown Menu -->
<div class="profile-dropdown" id="profileDropdown">
  <div class="dropdown-top">
    <img src="images/profile.jpg" alt="User" class="user-pic-lg">
    <div>
      <p class="profile-name">View Profile</p>
      <a href="#" class="username" class="none">u/imagine</a>
    </div>
  </div>
  <a href="#" class="one">🧑‍🎨 Edit Profile</a>
  <a href="#" class="one">🔔 Notifications</a>
  <a href="#" class="one">🍲 Saved Recipes</a>
  <a href="#" class="one">🔍 Search</a>
  <a href="#" class="one">⛉ Saved Blog</a>
  <a href="#" class="one">🚪 Log Out</a>
  <hr />
  <a href="#" class="one">🎯 Advertise on Site</a>
  <a href="#" class="one">📊 Try Pro <span class="beta">BETA</span></a>
  <a href="#" class="one">⚙️ Settings</a>
  <a href="#" class="one">💎 Premium</a>
</div>
            </div>
        </div>
    </nav>

</header>

<div class="contentbody">
<div class="sidebar" id="sidebar">
  <button id="toggleBtn" class="toggle-btn">☰</button>

  <div class="sidebar-section">
    <a href="home.php"><span class="icon">🏠</span> <span class="label">Home</span></a>
    <a href="bt.php"><span class="icon">📃</span> <span class="label">Blogs</span></a>
    <a href="recipe.php"><span class="icon">🍲</span> <span class="label">Explore Recipes</span></a>
    <a href="recipe.php"><span class="icon">🥗</span> <span class="label">All Recipes</span></a>
    <a href="delete.php"><span class="icon">🍖</span> <span class="label">Delete Recipes</span></a>
    <a href="n.php"><span class="icon">🔔</span> <span class="label">Notifications</span></a>
    <a href="crud/index.php"><span class="icon">👨🏻‍💻</span> <span class="label">User Management</span></a>
    <a href="s.php"><span class="icon">🔍</span> <span class="label">Search</span></a>
    <a href="#"><span class="icon">🚪</span> <span class="label">Log Out</span></a>
  </div>
<!--
  <hr>

  <div class="sidebar-section">
    <div class="section-title">CUSTOM FEEDS</div>
    <a href="#"><span class="icon">📰</span> <span class="label">My Feed</span></a>
  </div>

  <hr>

  <div class="sidebar-section">
    <div class="section-title">RECENT</div>
    <a href="#"><img src="images/img1.jpg" class="avatar"><span class="label">r/Foodie</span></a>
    <a href="#"><img src="images/img2.jpg" class="avatar"><span class="label">r/FitnessFoddies</span></a>
    <a href="#"><img src="images/img3.jpg" class="avatar"><span class="label">r/Brunchers</span></a>
  </div>

  <hr>

  <div class="sidebar-section">
    <div class="section-title">COMMUNITIES</div>
    <a href="#"><span class="icon">➕</span> <span class="label">Create a community</span></a>
  </div>
-->
</div>

<div class="maincontent" id="mainContent">

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="inn.php" method="post">
                <h1>Post a Blog</h1><br><br>
                <span>What you got today?</span>
                <input type="text" name="title" class="formlabel" placeholder="Title">
		<input name="tag" class="tad" rows="4" placeholder="Mention all suitable tags here..."></textarea>
                <textarea row="6" name="article" class="tab" placeholder="Your Article goes here...."></textarea>
		
                <div class="upload-area" id="uploadArea">
                  <input type="file" name="image" id="fileInput" accept="image/*" hidden />
                   <p>Drop a image or <span onclick="fileInput.click()">click here</span></p>
                    </div>
                     <div class="preview-container" id="previewContainer"></div><br>
                <button>Submit</button>
            </form>
        </div>


        <div class="form-container sign-in">
            <form action="insert.php" method="post" >
                <h1>Create a Foodie Recipe</h1><br>

                <span>What's Cooking Today?</span>
                <input type="text" name="title" class="formlabel" placeholder="Title">

                <span>Timings</span>
<div class="horizontal-group">
                <input type="text" name="prep_time" class="formlabel" placeholder="Prep">
                <input type="text" name="cook_time" class="formlabel" placeholder="Cooking">
                <input type="text" name="total_time" class="formlabel" placeholder="Total">
</div>

<div class="horizontal-group">
                <input type="text" name="yields" class="formlabel" placeholder="How many servings?">
		<select id="category" name="category" class="formlabel">
                <option value="">Choose a Category</option>
                <option value="breakfast">Breakfast</option>
                <option value="lunch">Lunch</option>
                <option value="dinner">Dinner</option>
                <option value="dessert">Dessert</option>
                <option value="snack">Snack</option>
                <option value="beverage">Beverage</option>
		</select>
</div>            

	<textarea name="ingredients" class="tad" rows="4" placeholder="List all your ingredients here..."></textarea>
        
	<textarea name="instructions" class="tab" rows="6" placeholder="Step-by-step how to cook it up..."></textarea>

	<textarea name="tags" class="tad" rows="4" placeholder="Mention all suitable tags here..."></textarea>

<div class="horizontal-group">
                <div class="upload-area" id="uploadArea">
                  <input type="file" name="step_1" id="fileInput" accept="image/*" hidden />
                   <p><span onclick="fileInput.click()">Step 1 image</span></p>
                     <div class="preview-container" id="previewContainer"></div>
                    </div>
                <div class="upload-area" id="uploadArea">
                  <input type="file" name="step_2" id="fileInput" accept="image/*" hidden />
                   <p><span onclick="fileInput.click()">Step 2 image</span></p>
                     <div class="preview-container" id="previewContainer"></div>
                    </div>
                <div class="upload-area" id="uploadArea">
                  <input type="file" name="step_3" id="fileInput" accept="image/*" hidden />
                   <p><span onclick="fileInput.click()">Step 3 image</span></p>
                     <div class="preview-container" id="previewContainer"></div>
                    </div>
                <div class="upload-area" id="uploadArea">
                  <input type="file" name="step_4" id="fileInput" accept="image/*" hidden />
                   <p><span onclick="fileInput.click()">Step 4 image</span></p>
                     <div class="preview-container" id="previewContainer"></div>
                    </div>
</div>

                <button>Submit</button>
            </form>
        </div>


        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hi Foodies</h1>
                    <p>Got a Recipe to share?</p>
                    <button class="hidden" id="login">Go Post A Recipe</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h1>Hi Foodies</h1>
                    <p>Got a Blog to share, Post it on our Website!</p>
                    <button class="hidden" id="register">Go Post A Blog</button>
                </div>
            </div>
        </div>
    </div>

</div>

    <script src="js/login.js"></script>
</body>

</html>