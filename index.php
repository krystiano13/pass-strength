<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Strength</title>
    <link rel="stylesheet" href="./styles/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <?php echo ""; ?>
    <form action="verify.php" method="post">
        <input type="password" name="password" />
        <div class="strenght">
            <div id="left" class="bar"></div>
            <div class="bar"></div>
            <div id="right" class="bar"></div>
        </div>
        <button type="submit">Check</button>
    </form>
</body>
</html>