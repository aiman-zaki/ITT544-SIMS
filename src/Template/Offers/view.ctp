<style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 300px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>


<div class = "container">
    
    <div class = "card card-cascade">
        <div class = "view view-cascade gradient-card-header blue-gradient">
            <h3 class="h2-responsive"><strong><?= $offer['title'] ?></strong></h3>
        </div>
        <div class="mask rgba-white-slight"></div>
        <div class="card-body rounded-bottom">
            <div class = "row">
                <div class = "col-md-4">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </div>
    <div class = "card card-cascade">
        <div class = "view view-cascade gradient-card-header peach-gradient">
            <h4 class="card-header-title h4-responsive"><strong>Requirements</strong></h4>
        </div>
        <div class="mask rgba-white-slight"></div>
        <div class="card-body rounded-bottom">
        <div id="map"></div>
        </div>
    </div>
</div>

<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  let longitude = parseFloat("<?= $company['address_longitude'] ?>");
  let latitude = parseFloat("<?= $company['address_latitude'] ?>");
  console.log(longitude);
  console.log(latitude);
  var uluru = {lat: latitude, lng: longitude};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkdllsFHEY2fZ8IEvG4QfPijcar3KU1Tk&callback=initMap">
    </script>
  </body>
</html>