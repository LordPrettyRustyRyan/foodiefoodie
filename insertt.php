

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $prep_time = $_POST['prep_time'];
    $cook_time = $_POST['cook_time'];
    $total_time = $_POST['total_time'];
    $yields = $_POST['yields'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $tags = $_POST['tags'];
    $category = $_POST['category'];

    $sql = "INSERT INTO recipes (title, prep_time, cook_time, total_time, yields, ingredients, instructions, tags, category) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssssss", $title, $prep_time, $cook_time, $total_time, $yields, $ingredients, $instructions, $tags, $category);

    if ($stmt->execute()) {
       $_SESSION['alert'] = ["type" => "success", "msg" => "Successfully added to draft!, wanna add new one?"];
       header("Location: loginn.php");
       exit;
    } else {
        $_SESSION['alert'] = ["type" => "danger", "msg" => "inalid inputs! try again"];
        header("Location: loginn.php");
       exit;
    }

    $stmt->close();

}
$conn->close();
?>
