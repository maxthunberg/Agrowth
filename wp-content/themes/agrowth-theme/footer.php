
<?php wp_footer(); ?>

<?php include( get_template_directory() . '/phtml-components/widgets/widgets.phtml');?>

<?php include( get_template_directory() . '/phtml-components/footer/footer.phtml');?>

  </div>

</div>

<?php if (is_front_page() || is_page(1213) ):?>
<script type="text/javascript">

      function initMap() {

        var mapPin =  new google.maps.MarkerImage('/wp-content/uploads/2018/03/pin.png',
                      new google.maps.Size(26, 32),
                      new google.maps.Point(0, 0),
                      new google.maps.Point(13, 32));

        // Postions
        var gothenburgLoc = {lat: 57.7006811, lng: 11.6129726};
        var stockholmLoc = {lat: 59.3260664, lng: 17.8416272};
        var osloLoc = {lat: 59.9138688, lng: 10.752245399999993};
        var copenhagenLoc = {lat: 55.6760968, lng: 12.568337199999974};
        var helsingforsLoc = {lat: 60.16985569999999, lng: 24.93837910000002};
        var hamburgLoc = {lat: 53.5510846, lng: 9.993681899999956};
        var londonLoc = {lat: 51.5073509, lng: -0.12775829999998223};
        var tallinLoc = {lat: 59.43696079999999, lng: 24.753574699999945};
        var lyonLoc = {lat: 45.764043, lng: 4.835658999999964};
        var turinLoc = {lat: 45.070312, lng: 7.686856499999976};
        var barcelonaLoc = {lat: 41.3850639, lng: 2.1734034999999494};
        var liverpoolLoc = {lat: 53.4083714, lng: -2.9915726000000404};
        var warszawaLoc = {lat: 52.2296756, lng: 21.012228700000037};

        // Map styling and rules
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 4,
           center: gothenburgLoc,
           disableDefaultUI: true,
           zoomControl: false,
           scaleControl: false,
           gestureHandling: 'greedy',
           scrollwheel: false,
           disableDoubleClickZoom: true,

           styles: [
      {
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#E5F1F4"
          }
        ]
      },
      {
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [
          {
            "color": "#E5F1F4"
          }
        ]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#bdbdbd"
          }
        ]
      },
      {
        "featureType": "administrative.neighborhood",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "road",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#757575"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#dadada"
          }
        ]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      },
      {
        "featureType": "transit",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#e5e5e5"
          }
        ]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#eeeeee"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
          {
            "color": "#ffffff"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
          {
            "color": "#9e9e9e"
          }
        ]
      }
    ]
        });

        // Markers
        var gothenburg = new google.maps.Marker({
          position: gothenburgLoc,
          icon: mapPin,
          map: map,
          title: 'Göteborg'
        });

        var stockholm = new google.maps.Marker({
          position: stockholmLoc,
          icon: mapPin,
          map: map,
          title: 'Stockholm'
        });

        var oslo = new google.maps.Marker({
          position: osloLoc,
          icon: mapPin,
          map: map,
          title: 'Oslo'
        });

        var copenhagen = new google.maps.Marker({
          position: copenhagenLoc,
          icon: mapPin,
          map: map,
          title: 'Köpenhamn'
        });

        var helsingfors = new google.maps.Marker({
          position: helsingforsLoc,
          icon: mapPin,
          map: map,
          title: 'Helsingfors'
        });

        var hamburg = new google.maps.Marker({
          position: hamburgLoc,
          icon: mapPin,
          map: map,
          title: 'Hamburg'
        });

        var london = new google.maps.Marker({
          position: londonLoc,
          icon: mapPin,
          map: map,
          title: 'London'
        });

        var tallin = new google.maps.Marker({
          position: tallinLoc,
          icon: mapPin,
          map: map,
          title: 'Tallin'
        });

        var lyon = new google.maps.Marker({
          position: lyonLoc,
          icon: mapPin,
          map: map,
          title: 'Lyon'
        });

        var turin = new google.maps.Marker({
          position: turinLoc,
          icon: mapPin,
          map: map,
          title: 'Turin'
        });

        var barcelona = new google.maps.Marker({
          position: barcelonaLoc,
          icon: mapPin,
          map: map,
          title: 'Barcelona'
        });

        var liverpool = new google.maps.Marker({
          position: liverpoolLoc,
          icon: mapPin,
          map: map,
          title: 'Liverpool'
        });

        var warszawa = new google.maps.Marker({
          position: warszawaLoc,
          icon: mapPin,
          map: map,
          title: 'Warszawa'
        });

        // // Info boxes
        // var contentGothenburg =
        // '<div id="map-infocontent">'+
        //   '<div id="siteNotice">'+
        //   '</div>'+
        //   '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //   '<div id="address">'+
        //     '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //   '</div>'+
        //   '<div id="phone-email">'+
        //     '<p>Telefon: +46 070 000 00 00</p>'+
        //     '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //   '</div>'+
        // '</div>';
        //
        //   var contentStockholm =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentOslo =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentCopenhagen =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentHelsingfors =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentHamburg =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentLondon =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentTallin =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentLyon =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentTurin =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //   var contentBarcelona =
        //   '<div id="map-infocontent">'+
        //     '<div id="siteNotice">'+
        //     '</div>'+
        //     '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //     '<div id="address">'+
        //       '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //     '</div>'+
        //     '<div id="phone-email">'+
        //       '<p>Telefon: +46 070 000 00 00</p>'+
        //       '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //     '</div>'+
        //   '</div>';
        //
        //     var contentLiverpool =
        //     '<div id="map-infocontent">'+
        //       '<div id="siteNotice">'+
        //       '</div>'+
        //       '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //       '<div id="address">'+
        //         '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //       '</div>'+
        //       '<div id="phone-email">'+
        //         '<p>Telefon: +46 070 000 00 00</p>'+
        //         '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //       '</div>'+
        //     '</div>';
        //
        //     var contentWarszawa =
        //     '<div id="map-infocontent">'+
        //       '<div id="siteNotice">'+
        //       '</div>'+
        //       '<h3 id="firstHeading" class="firstHeading">Express Delivery, Liverpool</h3>'+
        //       '<div id="address">'+
        //         '<p>Adress: Namngatan 12<br />123 12<br /> Göteborg</p><br />'+
        //       '</div>'+
        //       '<div id="phone-email">'+
        //         '<p>Telefon: +46 070 000 00 00</p>'+
        //         '<p>Mailadress: namn.namnsson@mail.se</p>'+
        //       '</div>'+
        //     '</div>';
        //
        // var infoGothenburg = new google.maps.InfoWindow({
        //   content: contentGothenburg,
        // });
        //
        // var infoStockholm = new google.maps.InfoWindow({
        //   content: contentStockholm,
        // });
        //
        // var infoOslo = new google.maps.InfoWindow({
        //   content: contentOslo,
        // });
        //
        // var infoCopenhagen = new google.maps.InfoWindow({
        //   content: contentCopenhagen,
        // });
        //
        // var infoHelsingfors = new google.maps.InfoWindow({
        //   content: contentHelsingfors,
        // });
        //
        // var infoHamburg = new google.maps.InfoWindow({
        //   content: contentHamburg,
        // });
        //
        // var infoLondon = new google.maps.InfoWindow({
        //   content: contentLondon,
        // });
        //
        // var infoTallin = new google.maps.InfoWindow({
        //   content: contentTallin,
        // });
        //
        // var infoLyon = new google.maps.InfoWindow({
        //   content: contentLyon,
        // });
        //
        // var infoTurin = new google.maps.InfoWindow({
        //   content: contentTurin,
        // });
        //
        // var infoBarcelona = new google.maps.InfoWindow({
        //   content: contentBarcelona,
        // });
        //
        // var infoLiverpool = new google.maps.InfoWindow({
        //   content: contentLiverpool,
        // });
        //
        // var infoWarszawa = new google.maps.InfoWindow({
        //   content: contentWarszawa,
        // });
        //
        //
        //
        // // Click event to activate info boxes
        // gothenburg.addListener('click', function() {
        //   infoGothenburg.open(map, gothenburg);
        // });
        //
        // stockholm.addListener('click', function() {
        //   infoStockholm.open(map, stockholm);
        // });
        //
        // oslo.addListener('click', function() {
        //   infoOslo.open(map, oslo);
        // });
        //
        // copenhagen.addListener('click', function() {
        //   infoCopenhagen.open(map, copenhagen);
        // });
        //
        // helsingfors.addListener('click', function() {
        //   infoHelsingfors.open(map, helsingfors);
        // });
        //
        // hamburg.addListener('click', function() {
        //   infoHamburg.open(map, hamburg);
        // });
        //
        // london.addListener('click', function() {
        //   infoLondon.open(map, london);
        // });
        //
        // tallin.addListener('click', function() {
        //   infoTallin.open(map, tallin);
        // });
        //
        // lyon.addListener('click', function() {
        //   infoLyon.open(map, lyon);
        // });
        //
        // turin.addListener('click', function() {
        //   infoTurin.open(map, turin);
        // });
        //
        // barcelona.addListener('click', function() {
        //   infoBarcelona.open(map, barcelona);
        // });
        //
        // liverpool.addListener('click', function() {
        //   infoLiverpool.open(map, liverpool);
        // });
        //
        // warszawa.addListener('click', function() {
        //   infoWarszawa.open(map, warszawa);
        // });
      }


</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBF_ye6XsvHZt6HXB6EKnV4ey6YNYP6JQM&callback=initMap">
</script>
<?php endif;?>

<script>
// Scroll Reveal

// Changing the defaults
window.sr = ScrollReveal({
 origin: 'bottom',
 distance: '32px',
 scale: 1,
 reset: false,
 easing:'cubic-bezier(0.5, 0, 0.1, 1)',
 viewFactor: 0,
 viewOffset: { top: 0, right: 0, bottom: 100, left: 0 }
});

// Customizing a reveal set
sr.reveal('.revealer-0', { duration: 300, delay: 0 });
sr.reveal('.revealer-100', { duration: 300, delay: 100 });
sr.reveal('.revealer-200', { duration: 300, delay: 200 });
sr.reveal('.revealer-300', { duration: 300, delay: 300 });

// swiper slider
var blogSwiper = new Swiper ('.swiper-container', {
  speed: 300,
  loop : true,
  grabCursor: true,
  keyboard: true,
  navigation: {
    nextEl: '.blog-btn-next',
    prevEl: '.blog-btn-prev',
  },
 })

</script>
</body>
</html>
