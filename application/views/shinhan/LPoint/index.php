<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="keywords" content="Callget">
	<meta name="description" content="Callget">

	<link href="/assets/images/utopia_sbj/favicon.png" rel="shortcut icon" type="image/x-icon">
	<link href="/assets/images/utopia_sbj/favicon.png" rel="icon" type="image/x-icon">

	<title>신한라이프</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js?ver=1"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js?ver=1"></script>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css?ver=1" rel="stylesheet">

	<link href="/assets/css/sbj_landing.css?ver=1" rel="stylesheet" type="text/css">




	<script language="JavaScript">
		var ck_click = false;

		function checkIt() {
			if (ck_click == true) {
				location = 'tel:080-740-5555';
				
				return;
			} else {
				alert('영상 시청 후 눌러주세요.');
				javascript:setTimeout('changeColor(0)',3000);
				ck_click = true;
			}
		}
		//
	</script>
</head>

<body>
	<div class="sect_1">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/shinhan/main.jpg" alt="메인이미지">
			</div>
		</div>
	</div>


	<div class="sect_2">
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div class="video-bg bg_02">
					<div class="video-container">
						<iframe width="100%" src="https://www.youtube.com/embed/UpEbVWXZFxM" frameborder="0" allowfullscreen="true"></iframe>

					</div>
				</div>
			</div>
		</div>
	</div>

	
	<div class="sect_3 mobile1">
		<div class="container">
			<div style="background:#dbd6f4;" class="col-sm-offset-3 col-sm-6 col-xs-12">
				<div style="margin: 20px; ">
					<button id="button" class="shinhan_tmon circle button" style="width : 80%;" onclick="location.href='javascript:checkIt()'">상담 예약하기<br>
						<p style="color: white; font-size :13px;">365일 24시간 가능</p>
					</button>
				</div>
			</div>
		</div>
	</div>


	


	<footer>
		<div class="container">
			<div class="col-sm-offset-3 col-sm-6 col-xs-12">
				<img src="/assets/images/shinhan/tmon/footer.jpg" alt="푸터이미지">
			</div>
		</div>
	</footer>

	<!-- <div style="background-color: #5c8542;" class="sect_4 utopia">
        <div class="container">


            <div class="sect_3" style="padding-top: 0px;">
                <div class="container">
                    <div class="col-sm-offset-3 col-sm-6 col-xs-12">
                        <img src="/assets/images/sbj_04/sub.jpg">
                         <button style="background-color: #fff; box-shadow: 5px 5px #a6d3a4; color: #5c8542;" class="sbj_02" onclick="location.href='tel:0800199900'">상담 예약하기</button> 
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>