<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no">


    <!-- 페이지 로드시마다 페이지 캐싱 취소 -->
    <meta http-equiv="Expires" content="Mon, 06 Jan 1990 00:00:01 GMT">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <!-- 페이지 캐싱 meta  -->

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://bigpo.co.kr/utopia_01/sbj">
    <meta property="og:title" content="빅포인트">
    <meta property="og:description" content="본 이벤트는 3일이 경과한 후에 다시 진행될 수 있습니다.">
    <meta property="og:image" content="http://bigpo.co.kr/assets/images/utopia_sbj/kaka.png">

    <meta name="facebook-domain-verification" content="16hfhuz1h7es99e8213aaze9t3w43s" />

    <link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Black+Han+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/demo.css" rel="stylesheet">

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NK9DGP6');
    </script>
    <!-- End Google Tag Manager -->



    <title>유토피아퓨처 이룸 | 유토피아 멤버십</title>
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        body {

            color: #fff;

        }

        .fixe {
            position: fixed;
            background-color: #00bed6;
            bottom: 10px;
            right: 20px;
            width: 90px;
            border: 3px solid #00bed6;
            border-radius: 10%;
            float: left;

        }

        @media (max-width: 960px) {
            .fixe {
                visibility: hidden;
            }
        }

        .wraps {
            position: relative;
            height: 200px;
            border: 1px solid;
        }

        .boxs {
            position: absolute;
            width: 80%;
            /* height: 30vmin; */
            left: 10%;
            /* right: 0; */
            margin-left: auto;
            margin-right: auto;
            /* border: 0.3vw solid;
            border-color: cornflowerblue;
            background: white; */
            top: 0;
            bottom: 0;
            margin-top: 70%;
            margin-bottom: auto;
            overflow: hidden;
            /* background-image: URL(/assets/images/utopia_sbj/TIMER2.png);
            background-repeat: no-repeat;
            background-position: 20px 30px;
            background-size: 50%; */
        }

        .gain {
            border: 1px solid #ffffff;
            width: 15%;
            height: 32px;
            line-height: 10px;
            color: #6067da;
            font-size: 3vw;
            font-family: 'Black Han Sans', sans-serif;
            text-align: center;
            display: inline-block;
            margin-top: 0px;
            position: relative;
            padding: 5% 5%;
            border-radius: 0.3em;
            background: linear-gradient(to top, #f7f7f8 50%, #fff 50%);
        }

        @media (max-width: 1200px) {
            .gain {
                border: 1px solid #ffffff;
                font-size: 5vw;
            }
        }

        @media (max-width: 600px) {
            .gain {
                font-size: 6vw;
            }
        }

        .small {
            float: right;
            font-size: 2vw;
        }

        .sang {
            background-color: #00bed6;
        }

        @media (max-width: 960px) {
            .sang {
                display: block;

            }
        }


        .formm {
            margin-right: 20px;
            padding-left: 10%;
            padding-top: 0px;
            padding-bottom: 10%;
            font-size: 2vw;
            text-align: left;
            font-family: 'Nanum Gothic', sans-serif;



        }

        @media (min-width : 1200px) {
            .formm {
                font-size: 1.2vw;

            }
        }

        input::placeholder {
            color: #b9b7b8;
        }

        .mu {
            font-size: 2vw;
            color: #00bed6;
            font-family: 'Do Hyeon', sans-serif;
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

        .D {
            position: absolute;
            font-size: 6vw;
            top: -9%;
            left: 0%;
            color: white;
            font-family: 'Black Han Sans', sans-serif;
        }

        @media (max-width : 1500px) {
            .D {
                top: -2%;
                left: 5%;
            }
        }

        @media (max-width : 1200px) {
            .D {
                top: 1%;
                left: 5%;
            }
        }

        @media (max-width : 695px) {
            .D {
                top: 15%;
                left: 7%;
            }
        }

        #test {
            animation: fadein 5s;
            -moz-animation: fadein 5s;
            /* Firefox */
            -webkit-animation: fadein 5s;
            /* Safari and Chrome */
            -o-animation: fadein 5s;
            /* Opera */
        }

        @keyframes fadein {
            from {
                opacity: 0;
            }

            to {
                opacity: 2;
            }
        }

        @-webkit-keyframes fadein {

            /* Safari and Chrome */
            from {
                opacity: 0;
            }

            to {
                opacity: 2;
            }
        }
    </style>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

    <link href="/assets/css/global.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/main.css" rel="stylesheet" type="text/css">
    <script>
        // const countDownTimer = function(id, date) {
        //     var _vDate = new Date(date); // 전달 받은 일자
        //     var _second = 1000;
        //     var _minute = _second * 60;
        //     var _hour = _minute * 60;
        //     var _day = _hour * 24;
        //     var timer;

        //     function showRemaining() {
        //         var now = new Date();
        //         var distDt = _vDate - now;

        //         if (distDt < 0) {
        //             clearInterval(timer);
        //             document.getElementById(id).textContent = '해당 이벤트가 종료 되었습니다!';
        //             return;
        //         }
        //         var days = Math.floor(distDt / _day);
        //         var hours = Math.floor((distDt % _day) / _hour);
        //         var minutes = Math.floor((distDt % _hour) / _minute);
        //         var seconds = Math.floor((distDt % _minute) / _second);

        //         //document.getElementById(id).textContent = date.toLocaleString() + "까지 : "; 
        //         document.getElementById(id).textContent = days + '일 ';
        //         document.getElementById(id).textContent += hours + '시간 ';
        //         document.getElementById(id).textContent += minutes + '분 ';
        //         document.getElementById(id).textContent += seconds + '초';

        //     }
        //     timer = setInterval(showRemaining, 1000);

        // }
        // var dateObj = new Date();
        // dateObj.setDate(dateObj.getDate() + 1);

        // countDownTimer('sample01', dateObj); // 내일까지 
        // countDownTimer('sample02', '04/01/2024 00:00 AM'); // 2024년 4월 1일까지, 시간을 표시하려면 01:00 AM과 같은 형식을 사용한다. 
        // countDownTimer('sample03', '04/01/2024'); // 2024년 4월 1일까지 
        // countDownTimer('sample04', '03/12/2021'); // 2024년 4월 1일s까지

        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let birthday = "5/30/2021 20:00:00",

                countDown = new Date(birthday).getTime(),
                x = setInterval(function() {

                    let now = new Date().getTime(),
                        distance = countDown - now;

                    document.getElementById("days").innerText = Math.floor(distance / (day)),
                        document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                        document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                        document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                    //do something later when date is reached
                    if (distance < 0) {
                        let headline = document.getElementById("headline"),
                            countdown = document.getElementById("countdown"),
                            content = document.getElementById("content");

                        headline.innerText = "이벤트 끝";
                        countdown.style.display = "none";
                        content.style.display = "block";

                        clearInterval(x);
                    }

                    //seconds
                }, 0)
        }());
    </script>

    <?php

    if (!isset($_SERVER["HTTPS"])) {

        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

        exit;
    }

    ?>
    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '833513587514458');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=833513587514458&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
</head>