$(document).ready(function () {
  $(".ask_comp").click(function () {
    var phone = $("#phone1").val();
    var name = $("#name1").val();
    var birth = $("#birth").val();
    var gender = $("#gender").val();
    var address = $("#address").val();
    var agree1 = $("#agree1").is(":checked");
    var agree2 = $("#agree2").is(":checked");
    var DSTADDR = $("#DSTADDR1").val();

    if (!name) {
      alert("성함을 입력해 주세요");
      return false;
    }

    if (!phone) {
      alert("연락처를 입력해 주세요");
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
      url: "/daoninternet/index/adkin",
      async: false,
      type: "post",
      data: {
        name: name,
        phone: phone,
        birth: birth,
        gender: gender,
        address: address,
        DSTADDR: DSTADDR,
      },
    };

    $.ajax(option).done(function (data) {
      if (data.result == "true") {
        alert("신청이 완료되었습니다.");
        $("#phone1").val("");
        $("#name1").val("");
      } else {
        alert("데이터 처리에 실패 했습니다. 조금 있다가 다시 시도해 주세요");
      }
    });
  });

  $(".ask_comp1").click(function () {
    var chekVal = $("input[name=Q1]:checked").val();
    var chekVal2 = $("input[name=Q2]:checked").val();
    var name = $("#name").val();
    var phone = $("#phone").val();
    var address = $("#address").val();
    var agree11 = $("#agree11").is(":checked");
    var agree22 = $("#agree22").is(":checked");
    var DSTADDR = $("#DSTADDR").val();

    if (!chekVal) {
      alert("통신사를 선택해 주세요");
      return false;
    }

    if (!chekVal2) {
      alert("변경을 원하시는 통신사를 선택해 주세요");
      return false;
    }

    if (!name) {
      alert("성함을 입력해 주세요");
      return false;
    }

    if (!phone) {
      alert("연락처를 입력해 주세요");
      return false;
    }

    if (!agree11) {
      alert("개인정보취급방침에 동의해 주세요.");
      return false;
    }
    if (!agree22) {
      alert("개인정보취급방침에 동의해 주세요.");
      return false;
    }

    var option = {
      url: "/daoninternet/index/adkin",
      async: false,
      type: "post",
      data: {
        chekVal: chekVal,
        chekVal2: chekVal2,
        name: name,
        phone: phone,
        DSTADDR: DSTADDR,
      },
    };

    $.ajax(option).done(function (data) {
      if (data.result == "true") {
        alert("신청이 완료되었습니다.");
        $("input[name=Q1]:checked").val("");
        $("input[name=Q2]:checked").val("");
      } else {
        alert("데이터 처리에 실패 했습니다. 조금 있다가 다시 시도해 주세요");
      }
    });
  });

  $(function () {
    $(".tabcontent > div").hide();
    $(".tabnav a")
      .click(function () {
        $(".tabcontent > div").hide().filter(this.hash).fadeIn();
        $(".tabnav a").removeClass("active");
        $(this).addClass("active");
        return false;
      })
      .filter(":eq(0)")
      .click();
  });
  $(function () {
    $(".tabcontent2 > div").hide();
    $(".tabnav2 a")
      .click(function () {
        $(".tabcontent2 > div").hide().filter(this.hash).fadeIn();
        $(".tabnav2 a").removeClass("active");
        $(this).addClass("active");
        return false;
      })
      .filter(":eq(0)")
      .click();
  });
  $(function () {
    $(".tabcontent3 > div").hide();
    $(".tabnav3 a")
      .click(function () {
        $(".tabcontent3 > div").hide().filter(this.hash).fadeIn();
        $(".tabnav3 a").removeClass("active");
        $(this).addClass("active");
        return false;
      })
      .filter(":eq(0)")
      .click();
  });

  $(document).ready(function () {
    $(".pdata_up, .subs_event").click(function () {
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

  //카운트다운
  const countDownTimer = function (id, date) {
    var _vDate = new Date(date); // 전달 받은 일자
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
      var now = new Date();
      var distDt = _vDate - now;

      if (distDt < 0) {
        clearInterval(timer);
        document.getElementById(id).textContent =
          "해당 이벤트가 종료 되었습니다!";
        return;
      }

      var days = Math.floor(distDt / _day);
      var hours = Math.floor((distDt % _day) / _hour);
      var minutes = Math.floor((distDt % _hour) / _minute);
      var seconds = Math.floor((distDt % _minute) / _second);

      //document.getElementById(id).textContent = date.toLocaleString() + "까지 : ";
      document.getElementById(id).textContent = days + "일 ";
      document.getElementById(id).textContent += hours + "시 ";
      document.getElementById(id).textContent += minutes + "분 ";
      document.getElementById(id).textContent += seconds + "초 ";
    }

    timer = setInterval(showRemaining, 1000);
  };

  var dateObj = new Date();
  dateObj.setDate(dateObj.getDate() + 1);

  countDownTimer("eventtime", "02/10/2023 02:46 PM"); // 2024년 4월 1일까지, 시간을 표시하려면 01:00 AM과 같은 형식을 사용한다.
});
