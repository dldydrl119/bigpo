<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">

    <link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">

    <title>라이프앤플러스</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/lifenplus/common.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/set.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <?php

    if (!isset($_SERVER["HTTPS"])) {

        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

        exit;
    }

    ?>
    <script type="text/javascript">
        var mobile_keys = new Array('iPhone', 'iPod', 'Android', 'BlackBerry', 'Windows Phone', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson', 'Nokia');
        if (document.URL.match('move_pc_screen')) mobile_keys = null; // URL 파라메타에 'move_pc_screen' 가 포함되어 있을땐 적용안함
        for (i in mobile_keys) {
            if (navigator.userAgent.match(mobile_keys[i]) != null) {
                location.href = "https://bigpo.co.kr/lifenplus/m";
                break;
            }
        }
    </script>
   
</head>
