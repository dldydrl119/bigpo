$(document).ready(function() {
    $('.ask_comp').click(function (){
		var phone = $('#phone').val();
		var name = $('#name').val();
		var birth = $('#birth').val();
		var gender = $('#gender').val();
		var address = $('#address').val();
		var agree1 = $('#agree1').is(':checked');
		var agree2 = $('#agree2').is(':checked');

		if(!name) {
			alert('성함을 입력해 주세요');
			return false;
		}

		if(!phone) {
			alert('연락처를 입력해 주세요');
			return false;
		}
		if(!birth) {
			alert('생년월일을 입력해 주세요');
			return false;
		}
		if(!gender) {
			alert('성별을 입력해 주세요');
			return false;
		}
		if(!address) {
			alert('주소를 입력해 주세요');
			return false;
		}

		if(!agree1) {
			alert('개인정보취급방침에 동의해 주세요.');
			return false;
		}

		if(!agree2) {
			alert('제3자정보제공에 동의해 주세요.');
			return false;
		}

		var option = {
			url : '/rental/cuckoo/index/adkin',
			async : false,
			type : "post",
			data : {'name':name, 'phone':phone, 'birth':birth,'gender':gender,'address':address}
		};

		$.ajax(
			option
		).done(function(data){
			if(data.result == 'true') {
				alert('신청이 완료되었습니다.')
				$('#phone').val('');
				$('#name').val('');
				$('#birth').val('');
				$('#gender').val('');
				$('#address').val('');
			} else {
				alert('데이터 처리에 실패 했습니다. 조금 있다가 다시 시도해 주세요')
			}
		});
    })

	$(document).ready(function() {
		$(".pdata_up, .subs_event").click(function() {
			$(".pdata_up").toggleClass("active");
			$(".sect_4 .form").toggleClass("active");
			$(".sect_3").toggleClass("position");
		});
	});

	const modal = document.querySelector(".modal");
	const btnOpenPopup = document.querySelector(".btn-open-popup");
	const btnOpenPopupclose = document.querySelector(".modalclose");

	btnOpenPopup.addEventListener("click", () => {
		modal.style.display = "block";
	});
	btnOpenPopupclose.addEventListener("click", () => {
		modal.style.display = "none";
	});
});