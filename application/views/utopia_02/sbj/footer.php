<script type="text/javascript" src="../asset/front/js/formValidator.js"></script>
<script type="text/javascript">
	landingFormObj = function() {
		this.form = null;
		this.inputName = null;
		this.inputPhone = null;
		this.agreebtn = null;
		this.agreebtn2 = null;
	}

	landingFormObj.prototype = {
		validator: null

			,
		init: function(formId) {
				this.validator = new FormValidator();
				this.form = $(formId);
				this.inputName = this.form.find("input[name=name]");
				this.inputPhone = this.form.find("input[name=phones]");
				this.agreebtn = this.form.find("input[name=agmtYn]"); //취급방침
				this.agreebtn2 = this.form.find("input[name=agmtYn2]"); //수집이용안내

				this.registEvent();
			}

			,
		registEvent: function() {
				var _this = this;
				_this.keyUpEvent();
				_this.setCheckBoxProp();
			}

			,
		onSubmit: function() {
				var _this = this;

				if (_this.validCheck()) {
					var _data = _this.form.serialize();


					dataLayer.push({
						'event': 'ga_lead',
						'eventCategory': '상담신청',
						'eventAction': '123'
					});

					$.ajax({
						type: 'POST',
						url: '/front/dreamok/form_ok',
						data: _data,
						success: function(data) {
							var obj = $.parseJSON(data);
							if (obj.is_valid == "1") {
								alert("신청 진행중입니다.");
							} else {
								alert("신청 완료되었습니다. 신청기준 1~5일 이내 담당상담원이 해피콜 드릴 예정입니다.");
								// location.href="/landing/hiddenpage";
								location.href = "/sub/pc_complete_landing";
							}
							//location.href = "/";
							//location.reload()
						}
					});
				}
			}

			,
		validCheck: function() {
				var _this = this;

				if (!_this.validator.nullCheck(_this.inputName, "이름을 입력해주세요.")) return false;
				if (!_this.validator.lenCheck(_this.inputName, 1, "올바른 이름을 입력해주세요")) return false;
				if (!_this.validator.nullCheck(_this.inputPhone, "연락처를 입력해주세요.")) return false;
				if (!_this.validator.lenCheck(_this.inputPhone, 8, "올바른 연락처를 입력해주세요")) return false;
				if (!_this.validator.isPhoneNumber($(_this.inputPhone).val(), "올바른 형식의 연락처를 입력해주세요")) return false;

				if (!_this.validator.isChecked(_this.agreebtn) && !_this.validator.isChecked(_this.agreebtn2)) {
					if (!confirm("개인정보 수집 및 이용안내,개인정보의 제공에 관한 사항을 모두 읽어보았고 동의하시겠습니까?")) return false;
					_this.form.find('input[name=termsdf]').prop('checked', true);
					_this.form.find('.btm input[type=checkbox]').prop('checked', true);
				}

				return true;
			}

			,
		keyUpEvent: function() {
				var _this = this;
				var delay = 100;
				var t = null;

				//이름 keyup
				$(_this.inputName).on('keyup', function(e) {
					clearTimeout(t);
					t = setTimeout(function() {
						if (!_this.validator.isOnlyKr($(e.target).val())) {
							alert("한글로 입력해주세요.");
							$(e.target).val('');
						}
					}, delay)
				})

				//연락처 keyup
				$(_this.inputPhone).on('keyup', function(e) {
					if (!_this.validator.isOnlyNum($(e.target).val())) {
						$(e.target).val('');
					}
				})

			}

			,
		setCheckBoxProp: function() {
			var _this = this;
			var allAgreeBtn = _this.form.find('input[name=termsdf]');
			var boxLen = _this.form.find('.btm input[type=checkbox]').length;

			// 전체 선택
			allAgreeBtn.on('click', function() {
				var chk = $(this).is(":checked");
				_this.form.find('.btm input[type=checkbox]').prop('checked', chk);
			});

			// 개별 선택
			_this.form.find('.btm input[type=checkbox]').change(function() {
				var checkLen = _this.form.find('.btm input[type=checkbox]:checked').length;
				var isSelectAll = (boxLen == checkLen);
				allAgreeBtn.prop('checked', isSelectAll);
			})

		}
	}


	$(document).ready(function() {
		var footerFormObj = new landingFormObj();
		footerFormObj.init('#footer_form');
		var quickFormObj = new landingFormObj();
		quickFormObj.init('#subs_form');

		window.footerFormObj = footerFormObj;
		window.quickFormObj = quickFormObj;
	});
</script>



<!-- <script>
        (function() {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;

            let birthday = "3/30/2021 20:00:00",

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
    </script> -->


<script type="text/javascript">
	$(function() {

		// 동의하기 체크박스 클릭 시 개인정보 박스 노출
		$(".input_1, .input_2, .input_3").click(function() {
			$(".footer .agree").show();
		});
		$(".input_4, .input_5, .input_6").click(function() {
			$(".quick .agree").show();
		});
		$(".footer .btn_close").click(function() {
			$(".footer .agree").hide();
		});

		$(".quick .btn_close").click(function() {
			$(".quick .agree").hide();
		});
	});

	$(function() {
		$('.goTop').click(function() {
			$('html, body').animate({
				scrollTop: 0
			}, 200);
			return false;
		});
	});

	//sideBar
	var scrollTop = 0;
	sideBar();

	$(window).on('scroll', function() {
		sideBar();
	});

	function sideBar() {
		scrollTop = $(document).scrollTop();
		$('.quick').addClass('on');
		if (scrollTop < 120) {
			$('.quick').removeClass('on');
		}
	}
</script>
<script type="text/javascript">
	var mobileKeyWords = new Array('iPhone', 'iPod', 'BlackBerry', 'Android', 'Windows CE', 'LG', 'MOT', 'SAMSUNG', 'SonyEricsson', 'MeeGo');
	for (var word in mobileKeyWords) {
		if (navigator.userAgent.match(mobileKeyWords[word]) != null) {
			location.href = "http://bigpo.co.kr/sbj_06_m";
			break;
		}
	}
</script>


</body>

</html>