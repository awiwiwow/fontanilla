// Content Fading in at scroll
(function($) {
    $.fn.visible = function(partial) {
      
        var $t            = $(this),
            $w            = $(window),
            viewTop       = $w.scrollTop(),
            viewBottom    = viewTop + $w.height(),
            _top          = $t.offset().top,
            _bottom       = _top + $t.height(),
            compareTop    = partial === true ? _bottom : _top,
            compareBottom = partial === true ? _top : _bottom;
      
      return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
  
    };
      
  })(jQuery);
  
  var win = $(window);
  
  var allMods = $(".appearOnScroll");
  
  allMods.each(function(i, el) {
    var el = $(el);
    if (el.visible(true)) {
      el.addClass("already-visible"); 
    } 
  });
  
  win.scroll(function(event) {
    
    allMods.each(function(i, el) {
      var el = $(el);
      if (el.visible(true)) {
        el.addClass("come-in"); 
      } 
    });
    
});

// Scroll Snapping

(function($) {
    var selector = ".section";
  
    var $slides = $(selector);
  
    var currentSlide = 0;
    var isAnimating = false;
  
    var stopAnimation = function() {
      setTimeout(function() {
        isAnimating = false;
      }, 300);
    };
  
    var bottomIsReached = function($elem) {
      var rect = $elem[0].getBoundingClientRect();
      return rect.bottom <= $(window).height();
    };
  
    var topIsReached = function($elem) {
      var rect = $elem[0].getBoundingClientRect();
      return rect.top >= 0;
    };
  
    document.addEventListener(
      "wheel",
      function(event) {
        var $currentSlide = $($slides[currentSlide]);
  
        if (isAnimating) {
          event.preventDefault();
          return;
        }
  
        var direction = -event.deltaY;
  
        if (direction < 0) {
          // next
          if (currentSlide + 1 >= $slides.length) return;
          if (!bottomIsReached($currentSlide)) return;
          event.preventDefault();
          currentSlide++;
          var $slide = $($slides[currentSlide]);
          var offsetTop = $slide.offset().top;
          isAnimating = true;
          $("html, body").animate(
            {
              scrollTop: offsetTop
            },
            1000,
            stopAnimation
          );
        } else {
          // back
          if (currentSlide - 1 < 0) return;
          if (!topIsReached($currentSlide)) return;
          event.preventDefault();
          currentSlide--;
          var $slide = $($slides[currentSlide]);
          var offsetTop = $slide.offset().top;
          isAnimating = true;
          $("html, body").animate(
            {
              scrollTop: offsetTop
            },
            1000,
            stopAnimation
          );
        }
      },
      { passive: false }
    );
})(jQuery);
  
// Page Indicator

$(document).ready(function($){
    var parPosition = [];
  $('.par').each(function() {
      parPosition.push($(this).offset().top);
  });

  $('a').click(function(){
  $('html, body').animate({
  scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
  return false;
  });

    $('.vNav ul li a').click(function () {
  $('.vNav ul li a').removeClass('active');
  $(this).addClass('active');
  }); 

  $('.vNav a').hover(function() {
    $(this).find('.label').show();
    }, function() {
    $(this).find('.label').hide();
  });

    $(document).scroll(function(){
  var position = $(document).scrollTop(),
          index; 
          for (var i=0; i<parPosition.length; i++) {
          if (position <= parPosition[i]) {
              index = i;
              break;
          }
      }
  $('.vNav ul li a').removeClass('active');
      $('.vNav ul li a:eq('+index+')').addClass('active');
  });

    $('.vNav ul li a').click(function () {
  $('.vNav ul li a').removeClass('active');
  $(this).addClass('active');
  });   
});

// Services Parallax

$(document).ready(function() {
  //parallax scroll
  $(window).on("load scroll", function() {
    var parallaxElement = $(".parallaxScroll"),
      parallaxQuantity = parallaxElement.length;
    window.requestAnimationFrame(function() {
      for (var i = 0; i < parallaxQuantity; i++) {
        var currentElement = parallaxElement.eq(i),
          windowTop = $(window).scrollTop(),
          elementTop = currentElement.offset().top,
          elementHeight = currentElement.height(),
          viewPortHeight = window.innerHeight * 0.5 - elementHeight * 0.5,
          scrolled = windowTop - elementTop + viewPortHeight;
        currentElement.css({
          transform: "translate3d(0," + scrolled * -0.15 + "px, 0)"
        });
      }
    });
  });
});

// Dentist grid image



//Carousel Captions

// /* Demo Scripts for Bootstrap Carousel and Animate.css article
// * on SitePoint by Maria Antonietta Perna
// */
// (function($) {
//     //Function to animate slider captions
//     function doAnimations(elems) {
//       //Cache the animationend event in a variable
//       var animEndEv = "webkitAnimationEnd animationend";
  
//       elems.each(function() {
//         var $this = $(this),
//           $animationType = $this.data("animation");
//         $this.addClass($animationType).one(animEndEv, function() {
//           $this.removeClass($animationType);
//         });
//       });
//     }
  
//     //Variables on page load
//     var $myCarousel = $("#carouselExampleIndicators"),
//       $firstAnimatingElems = $myCarousel
//         .find(".carousel-item:first")
//         .find("[data-animation ^= 'animated']");
  
//     //Initialize carousel
//     $myCarousel.carousel();
  
//     //Animate captions in first slide on page load
//     doAnimations($firstAnimatingElems);
  
//     //Other slides to be animated on carousel slide event
//     $myCarousel.on("slide.bs.carousel", function(e) {
//       var $animatingElems = $(e.relatedTarget).find(
//         "[data-animation ^= 'animated']"
//       );
//       doAnimations($animatingElems);
//     });
//   })(jQuery);
/*-------------------------------------------*/



$(function(){
$(window).scroll(function() {
   if($(window).scrollTop() >= 10) {
     $('.Header-title').addClass('scrolled');

   }
  else{
    $('.Header-title').removeClass('scrolled');

  }
});
});

// Fade in Animtion for elements with hideme class
$(document).ready(function() {
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                $('.hideme').animate({'opacity':'1'},300);
            }
        });
    });
});

if ($('#back-to-top').length) {
    var scrollTrigger = 500, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}

/*------------------- Slider ------------------------*/

var myIndex = 0;
carousel();

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
showDivs(slideIndex += n);
}



function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 6000); // Change image every 2 seconds
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  x[slideIndex-1].style.display = "block";
}

/*-------------------------------------------------*/

jQuery(document).ready(function($)
    {

$("#wrap-toggle").click(function()
{

$("#wrap").slideToggle( "slow");
$("#wrap-1").hide( "slow");
$("#wrap-2").hide( "slow");

if ($("#wrap-toggle").text() == "General Dentistry")
{
$("#wrap-toggle").html("General Dentistry")
}
else
{
$("#wrap-toggle").text("General Dentistry")
}

});

$("#wrap-toggle-1").click(function()
{
$("#wrap-1").slideToggle( "slow");
$("#wrap").hide( "slow");
$("#wrap-2").hide( "slow");

if ($("#wrap-toggle-1").text() == "Dental Implants")
{
$("#wrap-toggle-1").html("Dental Implants")
}
else
{
$("#wrap-toggle-1").text("Dental Implants")
}

});

$("#wrap-toggle-2").click(function()
{
$("#wrap-2").slideToggle( "slow");
$("#wrap").hide( "slow");
$("#wrap-1").hide( "slow");

if ($("#wrap-toggle-2").text() == "Invisalign")
{
$("#wrap-toggle-2").html("Invisalign")
}
else
{
$("#wrap-toggle-2").text("Invisalign")
}

});

});

/*---------------------------------------------------------*/

function openPage(pageName,elmnt) {
var i, tabcontent, tablinks;
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
  tabcontent[i].style.display = "none";
}
tablinks = document.getElementsByClassName("tablink");
for (i = 0; i < tablinks.length; i++) {
  tablinks[i].style.backgroundColor = "";
}
document.getElementById(pageName).style.display = "block";
elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


/*----------------------------------------------------*/


function initialize() {
    var latlng = new google.maps.LatLng(14.2938631,120.9383363);
    var latlng2 = new google.maps.LatLng(14.4490886,120.9209076);
    var latlng3 = new google.maps.LatLng(14.3259859,120.935851);
    var myOptions = {
        zoom: 19,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var myOptions2 =  {
        zoom: 19,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var myOptions3 =  {
        zoom: 19,
        center: latlng3,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    var map2 = new google.maps.Map(document.getElementById("map_canvas_2"), myOptions2);

    var map3 = new google.maps.Map(document.getElementById("map_canvas_3"), myOptions3);

    var myMarker = new google.maps.Marker(
    {
        position: uluru,
        map: map,
        title:"Pune"
   });

    var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,
        title:"Noida"
    });

    var myMarker3 = new google.maps.Marker(
    {
        position: latlng3,
        map: map3,
        title:"Nida"
    });
}

  google.maps.event.addDomListener(window, 'load', initialize);


/*----------------------------------------------------*/

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
