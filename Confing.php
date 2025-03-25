<?php
servername = "localhost";username = "root"; // Veritabanı kullanıcı adı
password = ""; // Veritabanı şifresi (varsayılan boş)dbname = "minecraft_mods"; // Kullanılacak veritabanı adı

conn = new mysqli(servername, username,password, dbname);

if (conn->connect_error) {
    die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
}
?>
