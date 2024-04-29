one

user: jamesthebest_003
password: G2d87z9rkxL5WE4RywTmJdgmKz26QEVSt7Ts5LR3ufJUrw76LsHVapRCEx8gtJbv6MVP7mDG5c9ujWkskSpH79RYt6GceM5BQnry

<?php

// Handles the auth for the debug dashboard
if (isset($_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH']) && $_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH'] === 'true') {
    $_SESSION['loggedin'] = true;
} else {
    header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/");
    exit;
}
?>