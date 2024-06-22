(function($) {

    "use strict";

    //Responsive Menu
    $('.slimmenu').slimmenu({
        resizeWidth: '991',
        collapserTitle: 'Main Menu',
        animSpeed: 'medium',
        indentChildren: true,
    });

    // Wow
    var wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();

    // Company Slider
    $('.company-carousel').owlCarousel({
        autoplay: true,
        margin: 30,
        nav: false,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });

    // Services Slider

    $('.services-carousel').owlCarousel({
        autoplay: true,
        animateOut: 'slideOutDown',
        animateIn: 'flipInX',
        margin: 30,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 2,
                nav: true,
                loop: false
            }
        }
    });

    // Skew section

    function skew_position() {

        var windos = $(window);
        var window_width = windos.width();
        var skew_square_height = (window_width / 18.5);
        $(".skew_appended").height(skew_square_height + "px").css("bottom", "-" + skew_square_height / 2 + "px").css("-webkit-backface-visibility", "hidden !important");
        $(".skew_prepended").height(skew_square_height + "px").css("top", "-" + (skew_square_height / 2 + 1) + "px").css("-webkit-backface-visibility", "hidden !important");
    }


    $(".skew").not(".module_google_map").append('<div class="skew_appended"></div>');
    $(".skew, .module_google_map .skew, .pre_footer.skew").not(".remove-top-skew").append('<div class="skew_prepended"></div>');

    skew_position();


    var windos = $(window);

    windos.resize(function() {

        skew_position();
    });


    // Google Map
    var Mapzone = function initMap() {

        if ($("#contact-map").length > 0) {

            var map = new google.maps.Map(document.getElementById('contact-map'), {
                center: {
                    lat: 40.674,
                    lng: -73.945
                },
                zoom: 16,
                styles: [{
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#f5f5f5"
                        }]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [{
                            "visibility": "off"
                        }]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [{
                            "color": "#f5f5f5"
                        }]
                    },
                    {
                        "featureType": "administrative.land_parcel",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#bdbdbd"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#ffffff"
                        }]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#757575"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#dadada"
                        }]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#616161"
                        }]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    },
                    {
                        "featureType": "transit.line",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#e5e5e5"
                        }]
                    },
                    {
                        "featureType": "transit.station",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#eeeeee"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{
                            "color": "#c9c9c9"
                        }]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [{
                            "color": "#9e9e9e"
                        }]
                    }
                ]
            });

        }
    }

    Mapzone();

    function fixed_top_menu() {

        var windows = $(window);

        windows.on("scroll", function() {

            var header_height = $(".header-area").height();

            var scrollTop = windows.scrollTop();

            if (scrollTop > header_height) {

                $(".header-area").addClass("sticky");

            } else {

                $(".header-area").removeClass("sticky");

            }
        });

    }

    fixed_top_menu();

    // Scroll Top

    function scrolltop() {

        var wind = $(window);

        wind.on("scroll", function() {

            var scrollTop = wind.scrollTop();

            if (scrollTop >= 500) {

                $(".scroll-top").fadeIn("slow");

            } else {

                $(".scroll-top").fadeOut("slow");
            }

        });

        $(".scroll-top").on("click", function() {

            var bodyTop = $("html, body");

            bodyTop.animate({
                scrollTop: 0
            }, 800, "easeOutCubic");
        });
    }

    scrolltop();

})(jQuery);

function SelectTab(evt, tabname) {
	var i, x, tablinks;
	x = document.getElementsByClassName("city");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablink");
	for (i = 0; i < x.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	}
	document.getElementById(tabname).style.display = "block";
	evt.currentTarget.className += " w3-red";
	/*&if($("#"+tabname+" > .row .row")[0].childElementCount == 0){
		loadshop(parseInt($("#shop .w3-red").attr("cid")));
	}*/
}
var hasmore = [true,true,true];
var loading = false;
function loadshop(){
	if(loading) { return false; }
	$.ajax({
		url:"shop.html",
		type:"GET",
		beforeSend: function(xhr){
			loading = true;
			$(".category0 > .row > .col-lg-12 > .post-container > .row").append("<div class='loader' align='center'></div>");
		}
	}).done(function(html){
		$(".loader").remove();
		$(".category0 > .row > .col-lg-12 > .post-container > .row").append(html);
		loading = false;
	});
}
onscroll = loadmore;
function loadmore(){
	var current_category = parseInt($("#shop .w3-red").attr("cid"));
	if((getScrollTop()+500) < getDocumentHeight() - window.innerHeight == false && hasmore[current_category]){
		loadshop(current_category);
	}
}
function showprice(){
	if($("body").has("#logcount").length == 1){
		$("#logcount").keyup(function(){
			var price = (parseFloat($("#logcount").val()) * parseFloat($("#price").html())).toFixed(2);
			if(!isNaN(price)){
				$("#price-total").html(price);
			} else {
				$("#price-total").html("0");
			}
		});
	}
}
function getScrollTop() { return (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop; }
function getDocumentHeight() {
	const body = document.body;
	const html = document.documentElement;
	return Math.max(
		body.scrollHeight, body.offsetHeight,
		html.clientHeight, html.scrollHeight, html.offsetHeight
	);
}