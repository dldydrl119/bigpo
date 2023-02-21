$(document).ready(function() {
    $('.ask_comp').click(function (){
		var phone = $('#phone').val();
		var name = $('#name').val();
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

		if(!agree1) {
			alert('개인정보취급방침에 동의해 주세요.');
			return false;
		}

		if(!agree2) {
			alert('제3자정보제공에 동의해 주세요.');
			return false;
		}

		var option = {
			url : '/hyowon/syrup/index/adkin',
			async : false,
			type : "post",
			data : {'name':name, 'phone':phone}
		};

		$.ajax(
			option
		).done(function(data){
			if(data.result == 'true') {
				alert('신청이 완료되었습니다.')
				$('#phone').val('');
				$('#name').val('');
			} else {
				alert('데이터 처리에 실패 했습니다. 조금 있다가 다시 시도해 주세요')
			}
		});
    })

});