<?php
$username = "SURVEYBLOX_w3arVzZcfKRGrB8TaubhXESAV5R7CuDc6YSMdcR83PCMy5Ggwr3qQsNM6zuP";
$hashedPassword = "$2y$10$8yAZm2KtcweuOWR1AZ80ieNwC5z7YaetGAUaq7AAm36t5o5xLnGSa";

if (isset($_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH']) && $_COOKIE['SURVEYBLOX_DEBUG_DASHBOARD_AUTH'] === 'true') {
    header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/dashboard");
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/dashboard");
} else {
    if (isset($_POST['username']) && isset($_POST['password'])) {

        if ($_POST['username'] === $username && password_verify($_POST['password'], $hashedPassword)) {
            setcookie("SURVEYBLOX_DEBUG_DASHBOARD_AUTH", "true", time() + (86400 * 30), "/");
            $_SESSION['loggedin'] = true;
            header("Location: /debug/M2DekFdBZbuD8chjsQbZY9htkGN2DXT3RC2jB7PKqe9QHvfw3UeRqJA/dashboard");
        } else {
            ?>
            <p>By accessing this page you agree and acknowledge that your ip, pages you vist, login time, incorrect logins changes you make will be recorded. You also agree that you are authorized to access this page</p>
            <p>You also agree and acknowledge to the <a href="/terms-and-conditions">terms and conditions</a>
            <form method="post" action="">
                <label for="username">username:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">password:</label>
                <input type="password" id="password" name="password" required><br>
                <input type="submit" value="login">
            </form>
            <p style="color: red">Incorrect details</p>
            <?php
        }
    } else {
        ?>
        <p>By accessing this page you agree and acknowledge that your ip, pages you vist, login time, incorrect logins changes you make will be recorded. You also agree that you are authorized to access this page</p>
        <p>You also agree and acknowledge to the <a href="/terms-and-conditions">terms and conditions</a>
        <form method="post" action="">
            <label for="username">username:</label>
            <input type="text" id="username" name="username" required><br>
            <label for="password">password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="login">
        </form>
        <?php
    }
}
?>