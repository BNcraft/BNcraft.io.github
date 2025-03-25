
<?php
require 'config.php';

result =conn->query("SELECT * FROM mods ORDER BY id DESC");
mods = [];

while (row = result->fetch_assoc())mods[] = row;


echo json_encode(mods);
?>
