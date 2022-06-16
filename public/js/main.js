function initMap() {
    const aicom={lat: 39.469014013904555, lng: -0.37696269465679483};
    const map = new google.maps.Map(document.getElementById('map'), {
        center: aicom,
        zoom: 13
    });
    const marker = new google.maps.Marker({
        position: aicom,
        map: map,
      });
        
}