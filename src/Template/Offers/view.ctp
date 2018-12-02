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
                <div class = "col-md-8">
                    <div class = "row">
                        <div class = "col-md-4">
                            <?php 
                                        if(!file_exists(WWW_ROOT . 'img/users/profile/'.$session_user['id'].'/profile.jpg'))
                                    { ?>
                                        <img width="150px" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" class="rounded-circle z-depth-1-half avatar-pic" alt="example placeholder avatar">
                                    <?php $text = "Add Photo";
                                    } 
                                    else { ?>
                                        <img width="200px" src="<?php echo '../../img/users/profile/'.$session_user['id'].'/profile.jpg?'?>"/>
                            <?php }?>
                        </div>
                        <div class = "col-md-8">
                            <ul class = "list-group">
                                <li class = "list-group-item">Start Date: <?= $offer['startdate']?></li>
                                <li class = "list-group-item">End Date: <?= $offer['enddate']?></li>
                            </ul>
                        </div>
          
                    </div>
                </div>
                <div class = "col-md-4">
                    <div id="map"></div>
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
</div>

<script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  let longitude = parseFloat("<?= $address['lng'] ?>");
  let latitude = parseFloat("<?= $address['lat'] ?>");
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
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7Lod_FvDhDW_yN4WEb0CQRH4rgtKQHHo&callback=initMap">
    </script>
  </body>
</html>