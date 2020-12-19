


/*-------------------------------------------------*/
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}


var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
showDivs(slideIndex += n);
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

    $('.hidemesec').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){

            $('.hidemesec').animate({'opacity':'1'},1300);

        }


    });

    $('.hidemethir').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){

            $('.hidemethir').animate({'opacity':'1'},1000);

        }


    });

    $('.hidemefour').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){

            $('.hidemefour').animate({'opacity':'1'});

        }


    });

    $('.hidemefive').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){

            $('.hidemefive').animate({'opacity':'1'});

        }


    });

    $('.hidemesix').each( function(i){

        var bottom_of_object = $(this).offset().top + $(this).outerHeight();
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        /* If the object is completely visible in the window, fade it it */
        if( bottom_of_window > bottom_of_object ){

            $('.hidemesix').animate({'opacity':'1'});

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





/*---------------------------------------------------*/






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

/*-------------------------------------------------*/



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

/*----------------------------------------------------*/
