<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">

    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">

    <title>싱크퓨어</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/sbj_landing.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/rental_db.css" rel="stylesheet" type="text/css">
    <?php

    if (!isset($_SERVER["HTTPS"])) {

        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

        exit;
    }

    ?>

</head>