<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script src="https://raw.githack.com/SochavaAG/example-mycode/master/pens/1_plugins/fancybox-3.1.25/jquery.fancybox.min.js"></script>    



  <script type="text/javascript">

//===========Count Slider===================//
      $(function() {
  // Owl Carousel
  var owl = $("#slider-1");
  owl.owlCarousel({
    items: 5,
    margin: 25,
    loop: true,
   autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
     autoWidth:false,
     dots:false,
      responsive:{
           0:{
            items:1
        },
        600:{
            items:2
        },            
        960:{
            items:3
        },
        1200:{
            items:3
        },

         1500:{
            items:4
        }

        }
  });

    var owl = $("#slider-2");
  owl.owlCarousel({
    items: 5,
    margin: 25,
    loop: true,
   autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
     autoWidth:false,
     dots:false,
      responsive:{
           0:{
            items:1
        },
        600:{
            items:2
        },            
        960:{
            items:3
        },
        1200:{
            items:3
        },

         1500:{
            items:4
        }

        }
  });


 //===========Count Function===================


$('.count').each(function () {
            var targetCount = parseInt($(this).text());
            targetCount = isNaN(targetCount) ? 0 : targetCount;
            var startCount = 0;
            $(this).prop('Counter', startCount).animate({
                Counter: targetCount
            }, {
                duration: 3000,
                easing: 'swing',
                step: function (now) {
                    var currentCount = Math.ceil(now);
                    $(this).text(currentCount.toLocaleString());
                    if (currentCount >= targetCount) {
                        $(this).stop();
                    }
                }
            });
        });   


/////////////////////////////////////////////////////

   const slider = document.querySelector('.scroll-x');
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 3; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
  console.log(walk);
});


////////////////////////////////////////////////


$('#slide').on('click', function () {
    var container = $('.scroll-x');
    sideScroll(container, 'right', 25, 100, 10);
});

$('#slideBack').on('click', function () {
    var container = $('.scroll-x');
    sideScroll(container, 'left', 25, 100, 10);
});

function sideScroll(element, direction, speed, distance, step) {
    var scrollAmount = 0;
    var slideTimer = setInterval(function () {
        if (direction === 'left') {
            element.scrollLeft(element.scrollLeft() - step);
        } else {
            element.scrollLeft(element.scrollLeft() + step);
        }
        scrollAmount += step;
        if (scrollAmount >= distance) {
            clearInterval(slideTimer);
        }
    }, speed);
}


/////////////////////////////////////


    $(".toggle-1").click(function(){
        $(".filter-1").toggle();
    });

     $(".toggle-2").click(function(){
        $(".filter-2").toggle();
    });

/////////////////////////////////////////////////
     const rangeInput = $('.range-input input'),
        priceInput = $('.year-input input'),
        range = $('.slider .progress');
  let priceGap = 1000;

  priceInput.on('input', function(e) {
    let minPrice = parseInt(priceInput.eq(0).val()),
        maxPrice = parseInt(priceInput.eq(1).val());

    if (maxPrice - minPrice >= priceGap && maxPrice <= rangeInput.eq(1).attr('max')) {
      if ($(e.target).hasClass("input-min")) {
        rangeInput.eq(0).val(minPrice);
        range.css('left', (minPrice / rangeInput.eq(0).attr('max')) * 100 + "%");
      } else {
        rangeInput.eq(1).val(maxPrice);
        range.css('right', 100 - (maxPrice / rangeInput.eq(1).attr('max')) * 100 + "%");
      }
    }
  });

  rangeInput.on('input', function(e) {
    let minVal = parseInt(rangeInput.eq(0).val()),
        maxVal = parseInt(rangeInput.eq(1).val());

    if (maxVal - minVal < priceGap) {
      if ($(e.target).hasClass("range-min")) {
        rangeInput.eq(0).val(maxVal - priceGap);
      } else {
        rangeInput.eq(1).val(minVal + priceGap);
      }
    } else {
      priceInput.eq(0).val(minVal);
      priceInput.eq(1).val(maxVal);
      range.css('left', (minVal / rangeInput.eq(0).attr('max')) * 100 + "%");
      range.css('right', 100 - (maxVal / rangeInput.eq(1).attr('max')) * 100 + "%");
    }
  });

////////////////////////////////////////////

/*=======Onscroll fixed Section==========*/


var elementPosition = $('.onscroll-fixed').offset();
var howItSection = $('.scroll-none').offset().top + $('.scroll-none').outerHeight();
$(window).scroll(function(){
    var scrollPosition = $(window).scrollTop();
    if(scrollPosition > elementPosition.top && scrollPosition < howItSection){
        $('.onscroll-fixed').css({'position':'fixed', 'top':'0'});
    } else {
        $('.onscroll-fixed').css('position', 'static');
    }
});


});

 new WOW().init();


   var owl = $("#slider-4");
  owl.owlCarousel({
    items: 5,
    margin: 25,
    loop: true,
   autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
     autoWidth:false,
     dots:false,
      responsive:{
           0:{
            items:1
        },
        600:{
            items:2
        },            
        960:{
            items:3
        },
        1200:{
            items:3
        },
         1400:{
            items:4
        }
        }
  });

  ///////////////////////////////////////

  function getTimeRemaining(endtime) {
    var t = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((t / 1000) % 60);
    var minutes = Math.floor((t / 1000 / 60) % 60);
    var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
    var days = Math.floor(t / (1000 * 60 * 60 * 24));
    return {
      total: t,
      days: days,
      hours: hours,
      minutes: minutes,
      seconds: seconds
    };
  }

  /////////////////////////////////////

  function initializeClock(id, endtime) {
    var clock = document.getElementById(id);
    var daysSpan = clock.querySelector(".days");
    var hoursSpan = clock.querySelector(".hours");
    var minutesSpan = clock.querySelector(".minutes");
    var secondsSpan = clock.querySelector(".seconds");

    function updateClock() {
      var t = getTimeRemaining(endtime);

      if (t.total <= 0) {
        clearInterval(timeinterval);

        var newTime = Date.parse(endtime);
        var nowTime = Date.parse(new Date());

        while (newTime <= nowTime) {
          newTime = newTime + 1 * 24 * 60 * 60 * 1000; // add 24hours
        }

        var deadline = new Date(newTime);
        initializeClock('countdown', deadline);
      } else {
        daysSpan.innerHTML = t.days;
        hoursSpan.innerHTML = ("0" + t.hours).slice(-2);
        minutesSpan.innerHTML = ("0" + t.minutes).slice(-2);
        secondsSpan.innerHTML = ("0" + t.seconds).slice(-2);
      }
    }

    updateClock();
    var timeinterval = setInterval(updateClock, 1000);
  }

  var deadline = "February 22 2024 00:00:00 GMT+0200";
  initializeClock("countdown", deadline);


/*=================skill-per==========*/



var skillPers = document.querySelectorAll(".skill-per");

skillPers.forEach(function (skillPer) {
  var per = parseFloat(skillPer.getAttribute("per"));
  skillPer.style.width = per + "%";

  var animatedValue = 0;
  var startTime = null;

  function animate(timestamp) {
    if (!startTime) startTime = timestamp;
    var progress = timestamp - startTime;
    var stepPercentage = progress / 1000; // Dividing by duration in milliseconds (1000ms = 1s)

    if (stepPercentage < 1) {
      animatedValue = per * stepPercentage;
      skillPer.setAttribute("per", formatPercentage(animatedValue));
      requestAnimationFrame(animate);
    } else {
      animatedValue = per;
      skillPer.setAttribute("per", formatPercentage(animatedValue));
    }
  }

  function formatPercentage(value) {
    // Append a decimal point if the value is a decimal
    return Number.isInteger(value) ? Math.floor(value) + "%" : value.toFixed(1) + "%";
  }

  requestAnimationFrame(animate);
});


//   var elementPosition = $('#fixed').offset();

// $(window).scroll(function(){
//         if($(window).scrollTop() > elementPosition.top){
//               $('#fixed').css('position','fixed').css('top','50');
//         } else {
//             $('#fixed').css('position','static');
//         }    
// });

var Fx = $("#Fx");

    var myScrollFunc = function() {
        var y = $(window).scrollTop();
        if (y >= 80) {
            Fx.addClass("countdown-bg fixed").removeClass("countdown-bg unset");
        } else {
            Fx.addClass("countdown-bg unset").removeClass("countdown-bg fixed");
        }
    };

    $(window).scroll(myScrollFunc);

/*=======Onscroll fixed Section==========*/

  

</script>








