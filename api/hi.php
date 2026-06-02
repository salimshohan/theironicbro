<?php
$json_path = __DIR__ . '/../vercel.json';
$config = json_decode(file_get_contents($json_path), true);

echo "PHP is running!<br>";
echo "Runtime: " . $config['functions']['api/**/*.php']['runtime'];
?>