<?php
require_once "lib/session.php";
require_once "lib/utils.php";

startSession()

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include './inc/head_content.php'; ?>
    <title>Success</title>
</head>
<body>
    <div class="back-link">
        <a href="index.php">&larr; Back to Form Handling </a>
    </div>
    <?php require 'inc/flash_message.php'; ?>
    <div class="back-link">
        <a href="index.php">&larr; Back to form handling</a>
    </div>

    <h1>Success</h1>

    <!-- Display form data and errors for debugging purposes                 -->
    <?php dd(getFormData()); ?>
    <?php dd(getFormErrors()); ?>

   <?php

   ?>
</body>
</html>