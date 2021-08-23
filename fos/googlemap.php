<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Contact Us</h2>
<div class = "formdiv">
<form action="" method="post" class="formcls" novalidate="novalidate">
<p><label> Your Name (required)<br>
    <input name="your-name" value="" type="text"></label></p>
<p><label> Your Email (required)<br>
    <input name="your-email" value="" type="email"></label></p>
<p><label> Subject<br>
    <input name="your-subject" value="" type="text"></label></p>
<p><label> Your Message<br>
    <textarea name="your-message" cols="20" rows="5" ></textarea></label></p>
<p><input id="submitbutton" value="Send" type="submit"></p>
<address> Address: Ahuja No. 1 Dhaba, Murthal </address>
</div>
<div id="map"></div>
    <script>      
      function initMap() {
        var demomap = {lat: 29.036208437356745, lng: 77.07058900737673};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: demomap
         });
        var marker = new google.maps.Marker({
          position: demomap,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfwo7C7-WLO8GU-bc6WmvqmsF8FKipzuE&callback=initMap">
    </script>
</body>
</html>