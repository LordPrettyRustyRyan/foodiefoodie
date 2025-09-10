<?php
session_start();
$conn = new mysqli("localhost", "root", "", "db_foodie");


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['value'])) {
    $id = intval($_POST['value']);

   
    $result = $conn->query("SELECT * FROM draft WHERE id = $id");
    $draft = $result->fetch_assoc();

    

    
    if (isset($_POST['accept'])) {
        $stmt = $conn->prepare("INSERT INTO recipes (title, tags, yields, prep_time, cook_time, total_time, ingredients, instructions) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssss", $draft['title'], $draft['tags'], $draft['yields'], $draft['prep_time'], $draft['cook_time'], $draft['total_time'], $draft['ingredients'], $draft['instructions']);
        $stmt->execute();

        
        $conn->query("DELETE FROM draft WHERE id = $id");

        $_SESSION['alert'] = ["type" => "success", "msg" => "Recipe approved and published!"];
        header("Location: ../website/recipe.php"); 
        exit;

        
    }

    
    elseif (isset($_POST['reject'])) {
        $conn->query("DELETE FROM draft WHERE id = $id");
        $_SESSION['alert'] = ["type" => "warning", "msg" => "Recipe rejected and removed!"];
        header("Location: ../website/recipe.php"); 
        exit;
    }

    
} else {
    
    $conn->query("DELETE FROM draft WHERE id = $id");
    $_SESSION['alert'] = ["type" => "danger", "msg" => "Invalid access to the publish page."];
    
}
?>