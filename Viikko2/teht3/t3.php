<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($POST['remember-me'])){
        $_SESSION['username'] = $_POST['username'];
    } else {
        unset($_SESSION['username']);
    }

}

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <br> <label for="name">Give Username</label><br>
    <input <?php
    if (isset($_SESSION ['username'] )) {
        echo 'value = " '. $_SESSION['username'] . '"';
    }
    ?>
            type="text" name="username" id="username" />
    <label for="remember-me">Remember me</label>
    <input <?php
            if (isset($_SESSION ['username'] )) {
    echo 'value = " '. $_SESSION['username'] . '"';
    }
    ?>
    type="checkbox" name="remember-me" id="remember-me"> <br>
    <input type="submit" />
</form>