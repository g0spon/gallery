<?php
require_once "init.php";

if ($session->is_signed_in())
{
    redirect("index.php");
}

if (isset($_POST['submit']))
{
    $username = trim($_POST['username']);
    $password = trim($_POST['username']);

    if ($user_found)
    {
        $session->login($user_found);
        redirect("index.php");
    } else {
        $the_message = "Your password of username are incorrect";
    }
} else {
    $username = "";
    $password = "";
}

