<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surv</title>
</head>
<body>
    <h1>Dashboard</h1>
    <h2>This is mainly here for debuging purposes, testing new versions of the website before it goes live, configuring the website etc.</h2>

    <ul>
        <?php
        $currentDir = __DIR__;
        $directories = array_filter(glob('*'), 'is_dir');

        foreach ($directories as $directory) {
            if ($directory == '.' || $directory == '..' || $directory == 'dashboard' ) {
                continue;
            }
            echo "<li><a href='$directory'>$directory</a></li>";
        }
        ?>
    </ul>

    <div class="nav-items">
</div>
</body>
</html>

<?php

// Handles the auth for the debug dashboard

if (isset($_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH']) && $_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH'] === 'true') {
    $_SESSION['loggedin'] = true;
} else {
    header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/");
    exit;
}
?>