<?php
    session_start();

    if ($_SESSION['Tipo_Usuario']) {
        $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header("Location:../Html/login2.php");
        } else {
            header("Location:../Html/login2.php");
        }
?>
