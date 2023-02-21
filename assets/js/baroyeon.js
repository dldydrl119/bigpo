$(document).ready(function () {
  $(".ask_comp").click(function () {
    var phone = $("#phone").val();
    var name = $("#name").val();
    var age = $("#age").val();
    var gender = $("#gender").val();
    var live = $("#live").val();
    // var height = $("#height").val();
    var education = $("#education").val();
    var marriage = $("#marriage").val();
    var agree1 = $("#agree1").is(":checked");
    var agree2 = $("#agree2").is(":checked");
    // var DSTADDR = $("#DSTADDR").val();
    var marketing_agreement = $("#marketing_agreement").is(":checked")
      ? "agreed"
      : "";

    if (!name) {
      alert("성함을 입력해 주세요");
      return false;
    }

    if (!phone) {
      alert("연락처를 입력해 주세요");
      return false;
    }
    if (!age) {
      alert("나이를 입력해 주세요");
      return false;
    }
    if (!gender) {
      alert("성별을 선택해 주세요");
      return false;
    }
    if (!live) {
      alert("지역을 선택해 주세요");
      return false;
    }
    // if (!height) {
    //   alert("신장을 입력해 주세요");
    //   return false;
    // }
    if (!education) {
      alert("학력을 입력해 주세요");
      return false;
    }
    if (!marriage) {
      alert("결혼여부를 입력해 주세요");
      return false;
    }

    if (!agree1) {
      alert("개인정보취급방침에 동의해 주세요.");
      return false;
    }

    if (!agree2) {
      alert("제3자정보제공에 동의해 주세요.");
      return false;
    }

    var option = {
      url: "/baroyeon/index/adkin",
      async: false,
      type: "post",
      data: {
        name: name,
        phone: phone,
        age: age,
        gender: gender,
        live: live,
        // height: height,
        education: education,
        marriage: marriage,
        marketing_agreement: marketing_agreement,
        // DSTADDR: DSTADDR,
      },
    };

    $.ajax(option).done(function (data) {
      if (data.result == "true") {
        alert("신청이 완료되었습니다.");
        $("#phone").val("");
        $("#name").val("");
        $("#age").val("");
        $("#gender").val("");
        $("#live").val("");
        $("#height").val("");
        $("#education").val("");
        $("#marriage").val("");
        $("#marketing_agreement").val("");
      } else {
        alert("데이터 처리에 실패 했습니다. 조금 있다가 다시 시도해 주세요");
      }
    });
  });
});
// 모달 버튼 클릭시 모달 열기
		const modalBtn = document.getElementById("modal-btn");
		const modal = document.getElementById("modal");
		const closeBtn = document.getElementsByClassName("close")[0];

		modalBtn.addEventListener("click", function() {
			modal.style.display = "block";
		});

		// 모달 닫기
		closeBtn.addEventListener("click", function() {
			modal.style.display = "none";
		});

		// 모달 외부 클릭시 모달 닫기
		window.addEventListener("click", function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		});

		var gender = document.getElementById("gender").value;
		
