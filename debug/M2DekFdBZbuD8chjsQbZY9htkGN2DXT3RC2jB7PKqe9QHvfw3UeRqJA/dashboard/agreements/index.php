<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="https://dash.adgatemedia.com/terms">ADGATEMEDIA TERMS AND CONDITIONS</a></li>
        <li><a href="https://cpx-research.com/main/en/terms.php">CPX RESEARCH TERMS AND CONDITIONS</a></li>
    </ul>
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