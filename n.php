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
$sql = "SELECT id,title,description FROM draft";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/n.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>        <!--https://boxicons.com/ -->

    <title>Notifications</title>
</head>

<body>

<header class="header_section">
    <nav class="customnavcontainer">
        <a class="navbar-brand" href="home.php">
            <span>Foodie Foodie <p>admin</p></span>
        </a>

        <div class="nav-right"> <!-- New wrapper for alignment -->
            <div class="User_option">
		<input type="text" class="search-bar" placeholder="Search Foodie....">

                <img id="noti" src="images/icons/icon4.png" alt="Notifications"></a>

                <a href="login.php" class="post-link">
		<img id="post" src="images/icons/icon5.png" alt="Post">
 		<span class="post-text">Post</span>
		</a>

                <button id="profile-btn" class="profile-btn" onclick="toggleDropdown()">
		<img src="images/profile.jpg" alt="Profile">
		</button>
<!-- Dropdown Menu 
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
</div>-->
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
    <a class="active" href="n.php"><span class="icon">🔔</span> <span class="label">Notifications</span></a>
    <a href="crud/index.php"><span class="icon">👨🏻‍💻</span> <span class="label">User Management</span></a>
    <a href="s.php"><span class="icon">🔍</span> <span class="label">Search</span></a>
    <a href="#"><span class="icon">🚪</span> <span class="label">Log Out</span></a>
  </div>

</div>

<script src="css/n.js"></script>
</body>

</html>
<?php
if ($result->num_rows > 0) {
echo'<div class="maincontent" id="mainContent">';
echo '<div class ="index">';
echo '<span>Notifications</span></div>';
echo'<div class="container py-4">';
while ($row = $result->fetch_assoc()) {
  echo'<a href="../website/layoutt.php?value='.htmlspecialchars($row["id"]).'" class="notification d-block text-decoration-none text-dark border-bottom py-3">';
    echo'<div class="row">';
      echo'<div class="col-10">';
        echo'<div class="notif-title">'. htmlspecialchars($row["title"]). '</div>';
        echo'<div class="notif-desc">'. htmlspecialchars($row["description"]).'</div>';
      echo'</div>';
    echo'</div>';
 echo' </a>';
}
echo'</div>';
echo'</div>';
}
 else {
  echo "<p>No recipes found.</p>";
}

$conn->close();
 ?>

  