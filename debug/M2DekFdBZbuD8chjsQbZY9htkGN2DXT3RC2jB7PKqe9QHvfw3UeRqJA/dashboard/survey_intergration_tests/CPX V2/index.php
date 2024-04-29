<iframe width="75%" height="75%" src="https://offers.cpx-research.com/index.php?app_id=22570&amp;ext_user_id=234722352&amp;secure_hash=VU5dHPYlcIUTcM8EEzLEu60gSOioWCmt&amp;username=shayden1061"></iframe>
<?php

// Handles the auth for the debug dashboard
if (isset($_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH']) && $_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH'] === 'true') {
    $_SESSION['loggedin'] = true;
} else {
    header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/");
    exit;
}
?>