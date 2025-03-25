
<?php
require 'config.php';
session_start();

if (!isset(_SESSION["user_id"])) 
    die("Önce giriş yapmalısınız!");


if (_SERVER["REQUEST_METHOD"] == "POST") {
    title =_POST["title"];
    description =_POST["description"];
    category =_POST["category"];
    user_id =_SESSION["user_id"];

    file =_FILES["modFile"];
    file_path = "uploads/" . basename(file["name"]);
    move_uploaded_file(file["tmp_name"],file_path);

    stmt =conn->prepare("INSERT INTO mods (user_id, title, description, category, file_url) VALUES (?, ?, ?, ?, ?)");
    stmt->bind_param("issss",user_id, title,description, category,file_path);
    
    if ($stmt->execute()) {
        echo "Mod başarıyla yüklendi!";
    } else {
        echo "Hata oluştu!";
    }
}
?>
