function setcCountryCookie() {
  fetch('https://ipinfo.io/json')
      .then(response => response.json())
      .then(data => {
          const country = data.country;
          document.cookie = `country=${country}; path=/`;
          const expirationDate = new Date();
          expirationDate.setDate(expirationDate.getDate() + 1);
          document.cookie = `country=${country}; expires=${expirationDate.toUTCString()}; path=/`;
      })
      .catch(error => console.error('error fetching country', error));
}

setcCountryCookie();

document.addEventListener('DOMContentLoaded', function() {
    var video = document.getElementById('module-video');
    
    if(video) {
        video.addEventListener('canplay', function() {
          video.play();
        });
        
        video.addEventListener('canplaythrough', function() {
          
        });
    } else {
        console.error("Element with ID 'myVideo' not found.");
    }
});
