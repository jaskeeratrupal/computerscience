<?php
    unset($_SESSION['email']);
    if (!isset($_SESSION['email'])){
        echo "A user_name session variable is not found!";
    }session_destroy();    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), ' ', time() - 2000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }

?>