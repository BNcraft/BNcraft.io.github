<?php
require 'config.php';

if (_SERVER["REQUEST_METHOD"] == "POST")username = _POST["username"];email = _POST["email"];password = password_hash(_POST["password"], PASSWORD_BCRYPT);stmt = conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");stmt->bind_param("sss", username,email, password);

    if (stmt->execute()) {
        echo "Kayıt başarılı!";
    } else {
        echo "Hata oluştu!";
    }
}
?>
