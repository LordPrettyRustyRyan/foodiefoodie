<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Delete a Recipe</title>
  <link rel="stylesheet" href="css/delete.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="container">
    <div class="wrapper">
      <section class="delete-box">
        <header>Delete a Recipe</header>
        <form method="POST" action="delete.php">
          <div class="content">
            <img src="images/profile.jpg" alt="logo" />
            <div class="details">
              <p>Admin</p>
              <div class="delete-info">
                <i class="fas fa-trash-alt"></i>
                <span>Deletion Mode</span>
              </div>
            </div>
          </div>

          <input
            type="text"
            name="title"
            placeholder="Enter recipe title..."
            required
          />

          <button type="submit">Delete</button>
        </form>
      </section>
    </div>
  </div>

<!-- Confirmation Modal -->
<div class="modal-overlay" id="confirmationModal">
    <div class="modal-box">
        <p>Are you sure you want to delete this recipe?</p>
        <div class="modal-buttons">
            <button id="confirmDelete">Yes, Delete</button>
            <button id="cancelDelete">Cancel</button>
        </div>
    </div>
</div>

<script src="js/delete.js"></script>

</body>
</html>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_foodie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['title'])) {
    $title = $_POST['title'];
    
    $sql = "DELETE FROM recipes WHERE title = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $title);
    
    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            echo "Recipe deleted successfully.";
        } else {
            echo "No recipe found with that title.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}

$conn->close();
?>

