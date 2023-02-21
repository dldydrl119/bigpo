'use strict';

$(document).on('click', 'a[href="#"]', function(e){
    e.preventDefault();
});

// textAni
$(function() { Splitting(); });

// scrolla
$(function() {
	$('.animate').scrolla({
		mobile: true, 
		once: false 
	});    
}); 

//scroll
$(function() {            
    $('.scroll').on('click', function() {
        var scroll = $('#scroll').offset().top; // #scroll의 끝나는 지점으로 스크롤바 이동
        $('html, body').animate( { scrollTop : (scroll + 100) }, 400 );  //그위치로 부드럽게 스크롤
    });     
}); 

//count
$(function() {
    scrollCounting('.count', 657, 700);     

function scrollCounting(selector, step, duration) {
    $(selector).each(function() {
        var scrollTop = $(document).scrollTop();
        var $selector = $(this);
        var target = Number($selector.text());
        var numNow = 0;
        var numNowComma = '';
        var countStep = step;
        var timerSpeed = Math.round(duration / (target / countStep));
        var isCounting = false;
        
        checkVisibility();
        
        $(window).on('scroll resize', function() {
            scrollTop = $(document).scrollTop();
            checkVisibility();
        });
        
        function checkVisibility() {
            var minShow = $selector.offset().top - $(window).height();
            var maxShow = $selector.offset().top + $selector.outerHeight();
            if (scrollTop >= minShow && scrollTop <= maxShow) {
                if (isCounting === false) {
                    isCounting = true;
                    addNumber();
                }
            } else {
                numNow = 0;
            }
        }
        
        function addNumber() {
            numNow += countStep;
            if (numNow >= target) {
                numNow = target;
                numNowComma = numNow.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $selector.text(numNowComma);
                isCounting = false;
            } else {
                numNowComma = numNow.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $selector.text(numNowComma);
                setTimeout(function() {addNumber();}, timerSpeed);
            }
        }
    });
}
});

//animation

$(function() {
var numSlide = $('section.b ul li').length;
var slideNow = 0;
var slidePrev = 0;
var slideNext = 0;
var timerId = null;
var isTimerOn = true;
var timerSpeed = 1000;

showSlide(1);
	
function showSlide(n) {
    clearTimeout(timerId);
    $('section.b ul li').removeClass('on');
    $('section.b ul li:eq(' + (n - 1) + ')').addClass('on');
    slideNow = n;
    slidePrev = (n - 1) < 1 ? numSlide : n - 1;
    slideNext = (n + 1) > numSlide ? 1 : n + 1;
    if (isTimerOn === true) {
        timerId = setTimeout(function() {showSlide(slideNext);}, timerSpeed);
    }
}
	
});
//float
$(function(){
    
    $(".floatArea .footer>h3, .visualBtn").click(function(){
        $(".footer").animate({'bottom':0},200);
        $(".deem").show();
        $(".btn_close").show();
        $(".trans").hide();
		$('body').bind('touchmove', function(e){e.preventDefault()});

    });
    $(".btn_close, .deem").click(function(){
        $(".footer").animate({'bottom':'-349px'},200);
        $(".deem").hide();
        $(".btn_close").hide();
        $(".trans").show();
		$('body').unbind('touchmove');
    });

});


//Parallax

function castParallax() {
	
	window.addEventListener("scroll", function(event){

		var top = this.pageYOffset;

		var layers = document.getElementsByClassName("parallax");
		var layer, speed, yPos;
		for (var i = 0; i < layers.length; i++) {
			layer = layers[i];
			speed = layer.getAttribute('data-speed');
			var yPos = -(top * speed / 100);
			layer.setAttribute('style', 'transform: translate3d(0px, ' + yPos + 'px, 0px)');

		}
	});
}

castParallax();


$(function() {
var numSlide = $('section.c .img span').length;
var slideNow = 0;
var slidePrev = 0;
var slideNext = 0;
var timerId = null;
var isTimerOn = true;
var timerSpeed = 1100;

showSlide(1);
	
function showSlide(n) {
    clearTimeout(timerId);
    $('section.c .img span').removeClass('on');
    $('section.c .img span:eq(' + (n - 1) + ')').addClass('on');
    slideNow = n;
    slidePrev = (n - 1) < 1 ? numSlide : n - 1;
    slideNext = (n + 1) > numSlide ? 1 : n + 1;
    if (isTimerOn === true) {
        timerId = setTimeout(function() {showSlide(slideNext);}, timerSpeed);
    }
}
	
});