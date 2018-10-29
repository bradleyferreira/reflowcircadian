function getSunTimes() {

    var lat=$("#lat").val();
    var long=$("#long").val();
    var testDate = new Date();
    var times = SunCalc.getTimes(new Date(), lat, long);
    var sunriseStr = times.sunrise.getHours() + ':' + times.sunrise.getMinutes();
    var sunriseEnd = times.sunriseEnd.getHours() + ':' + times.sunriseEnd.getMinutes();
    var goldenHourEnd = times.goldenHourEnd.getHours() + ':' + times.goldenHourEnd.getMinutes();
    var nadirTime = times.nadir.getHours() + ':' + times.nadir.getMinutes();
    var sunsetTime = times.sunset.getHours() + ':' + times.sunset.getMinutes();

    timesString = JSON.stringify(times);
    var outputString = "Sunrise:"+ "<br>" + sunriseStr + "<br>"
        + "Golden Hour Ends:"+ "<br>" + goldenHourEnd + "<br>"
        + "Sunset:"+ "<br>" + sunsetTime+ "<br>";
    $("#myResults").html(outputString);

}