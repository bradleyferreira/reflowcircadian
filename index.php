<?php

?>
<head>
<!--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA4huLY3redGRrT2_s-Mng8gNIIosFJDww&libraries=places"></script>-->
    <script src="assets/js/suncalc.js"></script>
    <script src="assets/js/inputProcessing.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/jquery.min.js"></script>
<!--    //disabled because of api key issues-->
<!--    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/20625/jquery.geocomplete.min.js"></script>-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<html>
<div class="container">
<h1>Reflow Circadian</h1>
    <div class="mySubtitle">Calculate sunrise and sunset times based on your current location.</br></div>
        <div class="mySubtitle2">(You may be prompted for location access by your browser.)</div>
<body>
<form id="property">
    <button class ="mySetLocationButton" onclick="getLocation();return false;">Set Location</button><br>
<!--    <div class="form-group">-->
<!--        <input type="text" name="name" class="form-control" id="address" placeholder="Address">-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <input type="text" name="lat" class="form-control" placeholder="Latitude" readonly>-->
<!--    </div>-->
<!--    <div class="form-group">-->
<!--        <input type="text" name="lng" class="form-control" placeholder="Longitude" readonly>-->
<!--    </div>-->
<!--</form>-->
Latitude:<input class="form-control myInput" type="text" id="lat" value="-" readonly>
Longitude:<input class="form-control myInput" type="text" id="long" value="-" readonly>

<div id="myResults"></div>


<script>
    //disabled because of api key issues
    // $(document).ready(function(){
    //     // Call Geo Complete
    //     $("#address").geocomplete({details:"form#property"});
    // });

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        $("#long").val(position.coords.longitude);
        $("#lat").val(position.coords.latitude);
        getSunTimes();

    }
</script>

</div>
</body>
</html>
