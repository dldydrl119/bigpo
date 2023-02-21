<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=720, user-scalable=no" />
    <title>AIA_슈퍼암</title>
    <link rel="stylesheet" href="/assets/css/addward.css">
    <link rel="shortcut icon" href="/assets/images/icon.jpg" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
        })(window, document, 'script', 'dataLayer', 'GTM-TKWF6HS');
    </script>
    <!-- End Google Tag Manager -->
    <?php

    if (!isset($_SERVER["HTTPS"])) {

        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

        exit;
    }

    ?>
</head>

<body>
    <div class="main_area">
        <div class="main_img">
            <img src="/assets/images/addward/main.jpg">
        </div>
        <div class="btn_area">
            <div class="btn_area_text">
                <p>365일 24시간 가능</p>
            </div>
            <div class="btn_area_btn">
                <a href="tel:080-865-4040" class="callBtn">
                    <img src="/assets/images/addward/btn.png" />
                </a>
            </div>
        </div>
        <div class="video_area">
            <iframe width="100%" src="https://www.youtube.com/embed/D__o_A9wcTM" frameborder="0"></iframe>
            <p>위 영상 시청 후 상담예약 버튼을 클릭하여 <b>상담예약을 남기면 끝!</b></p>
        </div>
    </div>
    <footer>
        <div class="footer_title01">
            <div class="footer_list_title">
                <p>유의사항</p>
            </div>
            <ul>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>이미 원스톱슈퍼암보험을 유지하고 계신 고객은 이벤트 대상에서 제외됩니다.</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>본 이벤트는 3개월 이내 재상담 접수 고객 및 사은품 다수 수령자에게는 지급이 제한됩니다.</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>해당 이벤트의 혜택 및 내용은 당사 또는 제휴사의 사정으로 변경될 수 있습니다.</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>본 이벤트 페이지를 통한 상담신청접수 및 상담 5분 완료 시 혜택이 제공됩니다.</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>사은품 발송은 상담완료기준 4주~8주 후 진행됩니다.</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>이벤트 관련문의 : <a href="mailto:info@sbggroup.co.kr">info@sbggroup.co.kr</a></span>
                </li>
            </ul>
        </div>
        <div class="footer_title02">
            <div class="footer_list_title">
                <p>※ 가입 시 알아두실 사항</p>
            </div>
            <ul>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>보험계약 체결 전 상품설명서 및 약관을 읽어 보시기 바랍니다.</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>
                        이 계약은 예금자보호법에 따라 예금보험공사가 보호하되, 보호한도는 본 보험회사에 있는 귀하의 모든<br />
                        예금보호대상 금융상품의 해약환급금(또는 만기 시 보험금이나 사고 보험금)에 기타 지급금을 한하여<br />
                        1인당 “최고 5천만원”이며, 5천만원을 초과하는 나머지 금액은 보호하지 않습니다.
                    </span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>
                        보험계약자가 기존에 체결했던 보험계약을 해지하고 다른 보험계약을 체결하면 보험계약이 거절될 수<br />
                        있으며 보험료가 인상되거나 보장내용이 달라질 수 있습니다.
                    </span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>지급한도, 면책사항, 감액지급 사항 등 보험금 지급제한 조건은 반드시 약관 내용을 확인하시기 바랍니다.</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>가입 후 91일부터 보장됩니다. (소액암 제외)</span>
                </li>
                <li class="footer_list_text">
                    <p>-</p>
                    <span>2년 이내 진단 시 50% 지급되며, 최초 1회한 하여 지급됩니다.</span>
                </li>
            </ul>
        </div>
        <div class="insu_number clearfix">
            <p>생명보험협회 심의필 제2020-03627호(2020-12-08)</p>
        </div>
    </footer>
    <div class="popup">
        <div class="popup_bg"></div>
        <div class="popup_contents">
            <div class="popup_contents_header">
                <h3>상담안내</h3>
            </div>
            <div class="popup_contents_text">
                <p>
                    상담을 받으시기 위해 상담예약이 필수입니다<br />
                    <a href="tel:080-865-4040">080-865-4040</a>으로 지금바로 전화주세요
                </p>
                <span>
                    365일, 24시간 상담예약 가능
                </span>
            </div>
            <div class="popup_contents_close">
                <button type="button">확인</button>
            </div>
        </div>
    </div>


    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TKWF6HS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Addward Tracker -->
    <div id="aw_cts" style="display:none"></div>
    <script type="text/javascript">
        try {
            var t = 'awc_code';
            (0 < p(t).length && "" != p(t) && "undefined" != typeof p(t) && p(t) + "" != "0" && 12 == p(t).length) ?
            (function(a, w, c, t, s) {
                a[t] = a[t] || [];
                a[t].push((function() {
                    return {
                        ac: "10001",
                        ap: "Home"
                    };
                }));
                var f = w.getElementsByTagName(c)[0],
                    j = w.createElement(c),
                    dl = t != 'awDataSet' ? '&t=' + t : '';
                j.async = !0;
                j.src = 'https://alice.addward.com/js/aw_cts.js?v=1.0&id=' + a[t][0]().ac + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'awDataSet') : '';

            function p(e) {
                e = e.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
                var c = new RegExp("[\\?&]" + e + "=([^&#]*)").exec(location.search);
                return null === c ? '' : decodeURIComponent(c[1].replace(/\+/g, " "))
            }
        } catch (e) {
            console.log(e);
        }
    </script>
    <!-- End Addward Tracker -->

    <!-- ADN Tracker[공통] start -->
    <script type="text/javascript">
        var adn_param = adn_param || [];
        adn_param.push([{
            ui: '100518',
            ut: 'Home'
        }]);
    </script>
    <script type="text/javascript" defer="" src="//fin.rainbownine.net/js/adn_tags_2.1.3.js"></script>
    <!-- ADN Tracker[공통] end -->



    <script>
        $(document).ready(function() {
            $('.popup').hide();

            $('.popup_bg').click(function() {
                $('.popup').hide();
            })

            $('.close_btn').click(function() {
                $('.popup').hide();
            })

            $('.popup_contents_close button').click(function() {
                $('.popup').hide();
            })

            $('.popup').on('scroll touchmove mousewheel', function(event) {
                event.preventDefault();
                event.stopPropagation();
                return false;
            });

            $('.callBtn').click(function() {
                if ("object" == typeof awcn_tagscript) awcn_tagscript.send('event', 'click', 'call_button');
                $('.popup').show();
            });

        })
    </script>
</body>

</html>