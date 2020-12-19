
/*-------------------------------------------------*/
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
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


var $black_white1 = $('.black_white1'),
		img_width1 = $('.black_white1 img').width(),
		init_split1 = Math.round(img_width1/2);

  $black_white1.width(init_split1);

		$('.white1').mousemove(function(e){
		var offX  = (e.offsetX || e.clientX - $black_white1.offset().left);
			$black_white1.width(offX);
		});

		$('.white1').mouseleave(function(e){
		$black_white1.stop().animate({
		width: init_split1
		},1000)
		});

    var $black_white2 = $('.black_white2'),
    		img_width2 = $('.black_white2 img').width(),
    		init_split2 = Math.round(img_width2/2);

      $black_white2.width(init_split2);

    		$('.white2').mousemove(function(e){
    		var offX  = (e.offsetX || e.clientX - $black_white2.offset().left);
    			$black_white2.width(offX);
    		});

    		$('.white2').mouseleave(function(e){
    		$black_white2.stop().animate({
    		width: init_split2
    		},1000)
    		});

        var $black_white3 = $('.black_white3'),
        		img_width3 = $('.black_white3 img').width(),
        		init_split3 = Math.round(img_width3/2);

          $black_white3.width(init_split3);

        		$('.white3').mousemove(function(e){
        		var offX  = (e.offsetX || e.clientX - $black_white3.offset().left);
        			$black_white3.width(offX);
        		});

        		$('.white3').mouseleave(function(e){
        		$black_white3.stop().animate({
        		width: init_split3
        		},1000)
        		});

/*---------------------------------------------------*/






/*------------------- Slider ------------------------*/



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

var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" img-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " img-opacity-off";
}


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
    var latlng2 = new google.maps.LatLng(28.579943,77.330006);
    var latlng2 = new google.maps.LatLng(28.579943,77.330006);
    var myOptions = {
        zoom: 19,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var myOptions2 =  {
        zoom: 15,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.SATELLITE
    };

    var myOptions3 =  {
        zoom: 18,
        center: latlng2,
        mapTypeId: google.maps.MapTypeId.SATELLITE
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
