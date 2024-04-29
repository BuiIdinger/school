<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>
<body>
    <h1>To Do List</h1>
    
    <ul>
        <h2>Current To Do List:</h2>
        <!-- PHP code to display existing to-do items -->
        <?php
        // Array to store to-do items
        $todos = array(
            "Add more language support to the website, this is very dependent on the survey providers as they will have to have the survey in their translated language. This most likely will not become a feature because of survey providers.",
            "Auto payout feature, for example, paying out the user by buying their private server."
        );
        
        // Display existing to-do items
        foreach ($todos as $todo) {
            echo "<li>$todo</li>";
        }
        ?>
    </ul>

    <hr>
</body>
</html>

<!-- Handles the auth for the debug dashboard -->

<?php
if (isset($_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH']) && $_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH'] === 'true') {
    $_SESSION['loggedin'] = true;
} else {
    header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/");
    exit;
}
?>