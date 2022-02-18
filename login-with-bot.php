<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$botUsername = $_ENV['YOUR_BOT_USERNAME'];
$botStartCode = $_ENV['START'];

define('BOT_USERNAME', $botUsername); // place username of your bot here
define('BOT_START_CODE', $botStartCode);

$botLoginUrl = 'https://t.me/' . constant('BOT_USERNAME') . '?start='. constant('BOT_START_CODE');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo $botLoginUrl; ?>">Login with telegram</a>
</body>
</html>