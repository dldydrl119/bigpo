<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">

    <link href="/assets/images/favicon/favicon.png" rel="shortcut icon" type="image/x-icon">

    <title>유토피아퓨처 이룸 | 유토피아 멤버십</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        body {

            color: #fff;

        }

        .ok {
            width: 250px;
            height: 5%;

        }

        @media (max-width:550px) {
            .ok {
                width: 40%;
                height: 10%;
            }
        }

        .yap {
            width: 100%;
            left: 20%;

        }

        .first {
            border: 1.5px solid #b9b7b8;
            background-color: #181818;
            color: #f4f4f4;
            width: 20%;
            height: auto;
            text-align: center;
            font-size: 1.3vw;
            line-height: 300%;
            box-sizing: border-box;
            float: left;
        }

        @media (max-width : 640px) {
            .yap {
                width: 130%;
                left: 10%;
            }
        }

        .fu {
            height: 200px;
        }

        @media (max-width:376px) {
            .fu {
                height: 35px;
            }
        }
    </style>
    <?php

    if (!isset($_SERVER["HTTPS"])) {

        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

        exit;
    }

    ?>


</head>