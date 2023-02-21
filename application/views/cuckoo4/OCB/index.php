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
	<link href="/assets/css/bigpostyle.css" rel="stylesheet" type="text/css">
	<link href="/assets/css/bigpostyle.css" rel="stylesheet" type="text/css">

	<script src="/assets/js/button.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
	
</head>

<body>
	<div class="sect_1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/cuckoo4/main.jpg" alt="메인이미지">
			</div>
		</div>
	</div>
	<div class="sect_2">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="video-bgcuckoo4 add_bg_01">
					<div class="video-container">
						<iframe width="100%" src="https://www.youtube.com/embed/heMFjB-pT8I" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="sect_1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/cuckoo4/body.jpg" alt="메인이미지">
			</div>
		</div>
	</div>
	<div class="sect_3 web1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="get_area_m">
					<button id="button" class="cuckoo4_01" onclick="location.href='tel:080-077-0119'">
						<p style="color: white; font-size :13px;">365일 24시간 가능</p>상담 예약하기<br>
				</div>
				</button>
			</div>
		</div>
	</div>
	<div id="list" name="list" class="sect_3 mobile1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div id="list" style="margin: 20px;">
					<button id="button" class="cuckoo4" onclick="location.href='tel:080-077-0119'">
						<p style="color: #fff; font-size :13px; margin:0px;"></p>상담 예약하기<br>
					</button>
				</div>
			</div>
		</div>

		<!-- 팝업 -->
		<div id="pop">
			<article>
				<div class="info_call">상담안내</div>
				<div class="infoDetail">
					<!-- <img class="infoimg" src="/assets/uploads/<?= $data->product_thumb ?>" alt=""> -->
					<div style="height: 30px;"></div>
					<!-- <p><strong>[ <?= $data->product_name ?> ]</strong>를 받으시기 위해 상담예약이 필수 입니다. </p>  -->
					<p>상담을 받으시기 위해 상담예약이 필수 입니다. </p>
					<p><strong>[ 080-077-0119 ]</strong>으로 지금바로 전화주세요.</p><br>
					<p>365일,24시간 상담예약 가능 </p>
				</div>
				<button class="infobutton" type="button">확인</button>
			</article>
		</div>

		<div class="floating">
			<div><a href="#list"><img src="/assets/images/winix/side.png"></a> </div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/cuckoo4/footer.jpg" alt="푸터이미지">
			</div>
		</div>
		<div style="height: 50px;"></div>
	</footer>
</body>

</html>