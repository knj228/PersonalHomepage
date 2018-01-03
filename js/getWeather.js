if(window.location.protocol != 'https:') {
  location.href = location.href.replace("http://", "https://");
}
var latitude = 40.7308;
var longitude = -73.9973;
function getLocation() {
  if (navigator.geolocation) {
    document.querySelector('#content').textContent = 'Accessing Your Location . . . ';
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    document.querySelector('#content').textContent = 'Unable to determine your location.';
  }
}


function showPosition(position) {
 latitude = position.coords.latitude;
  console.log('Latitude: ' + latitude);
  longitude = position.coords.longitude;
  console.log('Longitude: ' + longitude);
  loadContent(latitude, longitude);
}


function loadContent(latitude, longitude) {
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      var response = xhr.responseText;
      if (response == 'error') {
        document.querySelector('#content').textContent = 'Currently unable to access weather data.';
      } else {
        applyData(response);
      }
    }
  };

  var apiRequest = '../homepage/php/geolocate.php?lat=' + latitude + '&lon=' + longitude;

  xhr.open('GET', apiRequest, true);
  xhr.send();
}

function applyData(weatherData) {
  try {
    var currentWeather = JSON.parse(weatherData);
    console.log(currentWeather);
    var temperature = currentWeather.main.temp;
    var condition = currentWeather.weather[0].description;
    if(condition.includes("clouds")){
      $('#about').css({"background":"linear-gradient(rgba(0, 0, 0, 0.40),rgba(0, 0, 0, 0.40)), url(../homepage/img/cloudy.jpg) center center no-repeat #000"});
      $('#about').css({"-webkit-background-size":"cover"});
      $('#about').css({"-moz-background-size":"cover"});
      $('#about').css({"background-size":"cover"});
      $('#about').css({"-o-background-size":"cover"});
      $("#icon").attr("src","../homepage/img/cloudIcon.png");
    }
    if(condition.includes("sunny")){
      $('#about').css({"background":"linear-gradient(rgba(0, 0, 0, 0.40),rgba(0, 0, 0, 0.40)), url(../homepage/img/sunny.jpg) center center no-repeat #000"});
      $('#about').css({"-webkit-background-size":"cover"});
      $('#about').css({"-moz-background-size":"cover"});
      $('#about').css({"background-size":"cover"});
      $('#about').css({"-o-background-size":"cover"});
      $("#icon").attr("src","../homepage/img/sunnyIcon.png");
    }
    if(condition.includes("rain")){
      $('#about').css({"background":"linear-gradient(rgba(0, 0, 0, 0.40),rgba(0, 0, 0, 0.40)), url(../homepage/img/rain.jpg) center center no-repeat #000"});
      $('#about').css({"-webkit-background-size":"cover"});
      $('#about').css({"-moz-background-size":"cover"});
      $('#about').css({"background-size":"cover"});
      $('#about').css({"-o-background-size":"cover"});
      $("#icon").attr("src","../homepage/img/rainIcon.png");
    }
    if(condition.includes("thunder")){
      $('#about').css({"background":"linear-gradient(rgba(0, 0, 0, 0.40),rgba(0, 0, 0, 0.40)), url(../homepage/img/thunder.jpg) center center no-repeat #000"});
      $('#about').css({"-webkit-background-size":"cover"});
      $('#about').css({"-moz-background-size":"cover"});
      $('#about').css({"background-size":"cover"});
      $('#about').css({"-o-background-size":"cover"});
      $("#icon").attr("src","../homepage/img/thunderIcon.png");
    }
    var tempFormatted = Math.round(temperature);
    var location = currentWeather.name;
    document.querySelector('#city').textContent = location;
    document.querySelector('#content').textContent = tempFormatted + 'F°' + " and " + condition + " " ;
  } catch(e) {
    var errorMessage = e.name + ' ' + e.message;
    console.log(errorMessage);
    document.querySelector('#content').textContent = 'Weather Data Unavailable.';
  }
}

window.addEventListener('load', getLocation, false);
