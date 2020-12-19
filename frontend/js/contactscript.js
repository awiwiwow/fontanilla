
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
        position: latlng,
        map: map,
   });

    var myMarker2 = new google.maps.Marker(
    {
        position: latlng2,
        map: map2,

    });

    var myMarker3 = new google.maps.Marker(
    {
        position: latlng3,
        map: map3,

    });
}

  google.maps.event.addDomListener(window, 'load', initialize);
  
  
  
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