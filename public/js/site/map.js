var map;
var markers = [];
var polygons = [];
var filters = {};
var infoWindow;
var placesService;
var partners;
var show_partners;


loadJSON('http://localhost/tz_agro/public/map_data', function(json) {
	partners = json;
	show_partners = Object.keys(partners);
	runMap();
},function(xhr) {
	console.error(xhr);
});

function initMap() {
	map = new google.maps.Map(document.getElementById('map'), {
		center: {lat: 50.44028798, lng: 30.52993298},
		zoom: 12,
	});

	infoWindow = new google.maps.InfoWindow();
	placesService = new google.maps.places.PlacesService(map);
}

function textSearch (){
	if (!document.getElementById('text_query').value) return false;
	document.getElementById('search_list').innerHTML = '';
	hideSearchList();
	placesService.radarSearch({
		location: {lat: 50.44028798, lng: 30.52993298},
		radius: '10000',
		keyword: document.getElementById('text_query').value
	}, function (places, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK){
			search_partners = [];
			places.forEach(function(place, i, places) {
				if(partners[place.place_id]) search_partners[i] = place.place_id
			});

			if(search_partners.length > 0) {
				var search_list_inner = '';
				search_partners.forEach(function(place_id, i, show_partners) {
					search_list_inner += '<p class="search_list_item" onclick="setSearchItem(\'' + place_id + '\'); return false;">' + partners[place_id].name + '</p>';
				});
				document.getElementById('search_list').innerHTML = search_list_inner;
				document.getElementById('search_list').style.display = "block";
			}
		}
	});
}

function hideSearchList() {
	document.getElementById('search_list').style.display = "none";
}

function runFirstSearchItem(keyCode) {
    if (keyCode != 13) return false;
    first_search_item = document.getElementsByClassName('search_list_item')[0];
    if(first_search_item) first_search_item.click();
    hideSearchList();
}

function setSearchItem(place_id) {
	show_partners = [place_id];
	runMap();
	hideSearchList();
}

function setFilter(name, value) {
	delete filters[name];
	if (value) filters[name] = value;
}

function filterMap() {
	if(Object.keys(filters).length == 0) {
		alert('Вы ниче не указали');
		return false;
	}
	
	show_partners = Object.keys(partners);
	for (var i = 0; i < show_partners.length; i++) {
		place_id = show_partners[i];
		for (var filter_name in filters) {
			if(show_partners[i] && partners[place_id][filter_name] != filters[filter_name]) {
				show_partners.splice(i, 1);
				i--;
				break;
			}
		}
	}
	if(show_partners.length == 0){
		alert('Таких нет');
		show_partners = Object.keys(partners);
	}
	runMap();
}

function resetMap() {
	show_partners = Object.keys(partners);
	runMap();
	map.panTo({lat: 50.44028798, lng: 30.52993298});
	map.setZoom(12);
}

function runMap() {
	
	for (var place_id in partners) {
		if(markers[place_id]) markers[place_id].setMap(null);
		if(polygons[place_id]) polygons[place_id].setMap(null);
	}
	markers = [];
	polygons = [];
	
	show_partners.forEach(function(place_id, i, show_partners) {
		var partner = partners[place_id];
		
		if (partner.polygon_coords){
			
			polygons[place_id] = new google.maps.Polygon(getPolygon(partner.polygon_coords));
			polygons[place_id].setMap(map);
		}

		placesService.getDetails({placeId: place_id}, function (details, status) {
			if (status === google.maps.places.PlacesServiceStatus.OK) addMarker(details, partner);
		});
	});
}

function addMarker(place_data, partner_data) {
	markers[place_data.place_id] = new google.maps.Marker({
		map: map,
		position: place_data.geometry.location,
		icon: {
			url: 'http://maps.gstatic.com/mapfiles/circle.png',
			anchor: new google.maps.Point(10, 10),
			scaledSize: new google.maps.Size(10, 17)
		}
	});

	if (show_partners.length == 1) {
		map.panTo(place_data.geometry.location);
		map.setZoom(15);
	}

	google.maps.event.addListener(markers[place_data.place_id], 'click', function() {
		var icon = '<img src="' + place_data.icon + '" style="width:30px;">';
		var partner_data1 = '<h3><pre> subway: ' + partner_data.subway + ' </pre></h3>';
		var partner_data2 = '<h3><pre> status: ' + partner_data.status + ' </pre></h3>';
		var name1 = '<h3><pre> ' + place_data.place_id + ' </pre></h3>';
		var name = '<h3><pre> ' + place_data.name + ' </pre></h3>';
		var photo = (place_data.photos)? '<img src="' + place_data.photos[0].getUrl({'maxWidth': 300, 'maxHeight': 300}) + '">' : '';
		var adress = '<p>' + place_data.adr_address + '</p>';
		var custom_info = '<p>Сюда например попадут данные из бд.</p>';
		var phone = '<p> ' + place_data.international_phone_number + ' </p>';
		var website = '<p><a target="_blank" href="' + place_data.website + '"> Перейти на сайт компании </a></p>';
		var custom_info1 = '<p style="color:#999999;"> * Весь этот информационный блок можна юзать переюзать верстать как угодно.</p>';

		infoWindow.setContent(icon + partner_data1 + partner_data2 + name1 + name + photo + adress + custom_info + phone + website + custom_info1);
		infoWindow.open(map, markers[place_data.place_id]);
	});
}