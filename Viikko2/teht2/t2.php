<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(isset($_POST['remember-me'])) {
        setcookie('username', $_POST['username']);

    }else {
    setcookie('username', '', time() -3600);
    }
 header ('Location: ' . $_SERVER['PHP_SELF']);
}
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <br> <label for="name">Give Username</label><br>
    <input <?php
    if (isset($_COOKIES ['username'] )) {
        echo 'value = " '. $_COOKIE['username'] . '"';
    }
    ?>
            type="text" name="username" id="username" />
    <label for="remember-me">Remember me</label>
    <input <?php
            if (isset($_COOKIES ['username'] )) {
    echo 'value = " '. $_COOKIE['username'] . '"';
    }
    ?>
    type="checkbox" name="remember-me" id="remember-me"> <br>
    <input type="submit" />
</form>
