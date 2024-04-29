<?php

// Handles the auth for the debug dashboard
if (isset($_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH']) && $_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH'] === 'true') {
    $_SESSION['loggedin'] = true;
} else {
    header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/");
    exit;
}
?>