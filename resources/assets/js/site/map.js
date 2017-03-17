function initMap() {
	setTimeout(function() {
		vm.map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 50.44028798, lng: 30.52993298},
			zoom: 12
		});
	}, 2); 
}
window.initMap = initMap;
const scriptElement = document.createElement('script');
scriptElement.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBqC-sK24BXVEslyKm16cly5d9PMpzN9dI&callback=initMap&signed_in=true&libraries=places,visualization';
setTimeout(function() {
	document.body.appendChild(scriptElement);
}, 1);