

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
    $tag = $_POST['tag'];
    $article = $_POST['article'];

   

    $sql = "INSERT INTO blog (title, tag, article) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $title, $tag, $article);

    if ($stmt->execute()) {
       $_SESSION['alert'] = ["type" => "success", "msg" => "Successfully added to blog!, wanna add new one?"];
       header("Location: login.php");
       exit;
    } else {
        $_SESSION['alert'] = ["type" => "danger", "msg" => "inalid inputs! try again"];
        header("Location: login.php");
       exit;
    }

    $stmt->close();

}
$conn->close();
?>
