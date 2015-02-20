<?php

    require_once "../infra/DAO.php";
    session_start();
    $_SESSION['from'] = "login";

    DAO::connect();

    if (DAO::validaLogin($_POST["email"], $_POST["senha"])) {
        $_SESSION['email'] = $_POST["email"];
        unset($_SESSION['from']);
        header("Location: ../gui/main.php");
    } else {
        header("Location: ../index.php");
    }

?>