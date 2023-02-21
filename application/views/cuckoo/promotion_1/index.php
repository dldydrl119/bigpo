<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/utopia_sbj/favicon.png" rel="icon" type="image/x-icon">

	<title>쿠쿠</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">

	<link href="/assets/css/sbj_landing.css" rel="stylesheet" type="text/css">
	<script type="text/javascript">
		var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson', 'MeeGo');
		for (var word in mobileKeyWords) {
			if (navigator.userAgent.match(mobileKeyWords[word]) != null) {
				location.href = "http://bigpo.co.kr/cuckoo/promotion_1_m";
				break;
			}
		}
	</script>
	<?php

	if (!isset($_SERVER["HTTPS"])) {

		header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);

		exit;
	}

	?>

</head>

<body>
	<div class="sect_1">
		<div class="container">
			<div class="col col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/cuckoo/TMON_special/main_w.jpg" alt="메인이미지">
			</div>
		</div>
	</div>
	<div class="special_sect_2">
		<div class="container">
			<div class="col col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="bg_01">

					<div class="bg_011">
						<img src="/assets/images/cuckoo/TMON_special/special1.png" alt="메인이미지">
						<div class="video-container">
							<iframe width="100%" src="https://www.youtube.com/embed/usuobY3P6hk" frameborder="0"></iframe>
						</div>
						<div class="button">
							<button id="AIA_OCB01" class="sbj_01" onclick="location.href='tel:080-845-2000'">24시간, 365일! 언제든지<br>
								<p style="color: white; ">상담예약 하러가기</p>
							</button>
						</div>

						<img src="/assets/images/cuckoo/TMON_special/special2.png" alt="메인이미지">
						<div class="video-container">
							<iframe width="100%" src="https://www.youtube.com/embed/rEmE4vYlv0Y" frameborder="0"></iframe>
						</div>
						<div class="button">
							<button id="AIA_OCB01" class="sbj_01" onclick="location.href='tel:080-972-2000'">24시간, 365일! 언제든지<br>
								<p style="color: white; ">상담예약 하러가기</p>
							</button>
						</div>

						<img src="/assets/images/cuckoo/TMON_special/special3.png" alt="메인이미지">
						<div class="video-container">
							<iframe width="100%" src="https://www.youtube.com/embed/GO78aRy4EY8" frameborder="0"></iframe>
						</div>
						<div class="button">
							<button id="AIA_OCB01" class="sbj_01" onclick="location.href='tel:080-835-2222'">24시간, 365일! 언제든지<br>
								<p style="color: white;">상담예약 하러가기</p>
							</button>
						</div>
						<img src="/assets/images/cuckoo/TMON_special/special4.png" alt="메인이미지">
						<div class="video-container">
							<iframe width="100%" src="https://www.youtube.com/embed/g39iZ4SIx8Q" frameborder="0"></iframe>
						</div>
						<div class="button">
							<button id="AIA_OCB01" class="sbj_01" onclick="location.href='tel:080-605-5000'">24시간, 365일! 언제든지<br>
								<p style="color: white; ">상담예약 하러가기</p>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="container">
			<div class="col col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/cuckoo/TMON_special/footer_w.jpg" alt="푸터이미지">
			</div>
		</div>
	</footer>
</body>

</html>