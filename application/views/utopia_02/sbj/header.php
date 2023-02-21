<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ko" dir="ltr" lang="ko">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=1.0">

    <meta property="og:type" content="website">
    <meta property="og:title" content="유토피아퓨처 이룸">
    <meta property="og:description" content="유토피아퓨처 이룸">
    <meta property="og:image" content="http://utopiaeloom.com../asset/front/image/pc/landimg/land.png">
    <meta property="og:url" content="http://utopiaeloom.com/landing/landing_2">
    <meta name="description" content="유토피아퓨처 이룸">

    <title>유토피아퓨처 이룸</title>

    <link rel="icon" href="../asset/front/image/pc/main/u.ico" sizes="72x72">
    <link rel="stylesheet" type="text/css" href="/assets/css/landing.css">
    <link rel="stylesheet" type="text/css" href="/asset/front/css/landing_font.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&display=swap" rel="stylesheet">

    <script type="text/javascript" src="../asset/front/js/jquery-1.9.1.min.js"></script>
    <script language="javascript" src="../asset/front/js/jquery.maskedinput.min.js"></script>
    <script src="/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/scrolla.jquery.min.js"></script>
    <script src="/assets/js/splitting.min.js"></script>
    <script src="/assets/js/script_landing.js"></script>

    <!-- 시간 타이머 자바스크립트 (오류 : 서버터짐 주의) -->
    <!-- <SCRIPT language=JavaScript>
        function getTime() {
            now = new Date();
            // 한달 밀림
            dday = new Date(2021, 4, 01, 18, 00, 00);
            // 원하는 날짜, 시간 정확하게 초단위까지 기입.
            days = (dday - now) / 1000 / 60 / 60 / 24;
            daysRound = Math.floor(days);
            hours = (dday - now) / 1000 / 60 / 60 - (24 * daysRound);
            hoursRound = Math.floor(hours);
            minutes = (dday - now) / 1000 / 60 - (24 * 60 * daysRound) - (60 * hoursRound);
            minutesRound = Math.floor(minutes);
            seconds = (dday - now) / 1000 - (24 * 60 * 60 * daysRound) - (60 * 60 * hoursRound) - (60 * minutesRound);
            secondsRound = Math.round(seconds);

            document.getElementById("counter1").innerHTML = daysRound;
            document.getElementById("counter2").innerHTML = hoursRound;
            document.getElementById("counter3").innerHTML = minutesRound;
            document.getElementById("counter4").innerHTML = secondsRound;
            newtime = window.setTimeout("getTime();", 1000);
        }
    </SCRIPT> -->
    <STYLE type=text/css>
        table,
        td {
            /* border: 1px solid black; */
            background-image: url('/assets/images/sbj_06/TIMER2.png');
            background-repeat: no-repeat;
        }

        table {
            width: 86%;
            height: 100px;
            margin: auto;
            text-align: center;
        }


        #count {
            text-align: left;
            height: 140px;
            width: 120%;
            color: #000;
            padding-left: 120px;
            padding-top: 0px;

        }

        #bt {
            height: 16px;
            width: 49;
            padding-left: 100px;
            padding-top: 0px;
        }
    </STYLE>
    <?php

    if (!isset($_SERVER["HTTPS"])) {

        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

        exit;
    }

    ?>

</head>