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
  }, 800);
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

  // init Masonry
var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});

  // layout Masonry after each image loads
$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});

/*-------------------------------------------------*/


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
