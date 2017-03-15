/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 7);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(4);
__webpack_require__(5);

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 3 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),
/* 4 */
/***/ (function(module, exports) {

function getPolygon(coords) {
    return {
        paths: coords,
        strokeColor: '#FF6633',
        strokeOpacity: 0.7,
        strokeWeight: 2,
        fillColor: '#FF6633',
        fillOpacity: 0.3
    };
}

function loadJSON(path, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                if (success) success(JSON.parse(xhr.responseText));
            } else {
                if (error) error(xhr);
            }
        }
    };
    xhr.open("GET", path, true);
    xhr.send();
}

/***/ }),
/* 5 */
/***/ (function(module, exports) {

var map;
var markers = [];
var polygons = [];
var filters = {};
var infoWindow;
var placesService;
var partners;
var show_partners;

function initMap() {

	map = new google.maps.Map(document.getElementById('map'), {
		center: { lat: 50.44028798, lng: 30.52993298 },
		zoom: 12
	});

	infoWindow = new google.maps.InfoWindow();
	placesService = new google.maps.places.PlacesService(map);

	loadJSON('https://tzagro.000webhostapp.com/db.json?sdf=sdf', function (json) {
		partners = json;
		show_partners = Object.keys(partners);
		runMap();
	}, function (xhr) {
		console.error(xhr);
	});
}

function textSearch() {
	if (!document.getElementById('text_query').value) return false;
	document.getElementById('search_list').innerHTML = '';
	hideSearchList();
	placesService.radarSearch({
		location: { lat: 50.44028798, lng: 30.52993298 },
		radius: '10000',
		keyword: document.getElementById('text_query').value
	}, function (places, status) {
		if (status == google.maps.places.PlacesServiceStatus.OK) {
			search_partners = [];
			places.forEach(function (place, i, places) {
				if (partners[place.place_id]) search_partners[i] = place.place_id;
			});

			if (search_partners.length > 0) {
				var search_list_inner = '';
				search_partners.forEach(function (place_id, i, show_partners) {
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
	if (first_search_item) first_search_item.click();
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
	if (Object.keys(filters).length == 0) {
		alert('Вы ниче не указали');
		return false;
	}

	show_partners = Object.keys(partners);
	for (var i = 0; i < show_partners.length; i++) {
		place_id = show_partners[i];
		for (var filter_name in filters) {
			if (show_partners[i] && partners[place_id][filter_name] != filters[filter_name]) {
				show_partners.splice(i, 1);
				i--;
				break;
			}
		}
	}
	if (show_partners.length == 0) {
		alert('Таких нет');
		show_partners = Object.keys(partners);
	}
	runMap();
}

function resetMap() {
	show_partners = Object.keys(partners);
	runMap();
	map.panTo({ lat: 50.44028798, lng: 30.52993298 });
	map.setZoom(12);
}

function runMap() {

	for (var place_id in partners) {
		if (markers[place_id]) markers[place_id].setMap(null);
		if (polygons[place_id]) polygons[place_id].setMap(null);
	}
	markers = [];
	polygons = [];

	show_partners.forEach(function (place_id, i, show_partners) {
		var partner = partners[place_id];

		if (partner.polygon_coords) {

			polygons[place_id] = new google.maps.Polygon(getPolygon(partner.polygon_coords));
			polygons[place_id].setMap(map);
		}

		placesService.getDetails({ placeId: place_id }, function (details, status) {
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

	google.maps.event.addListener(markers[place_data.place_id], 'click', function () {
		var icon = '<img src="' + place_data.icon + '" style="width:30px;">';
		var partner_data1 = '<h3><pre> subway: ' + partner_data.subway + ' </pre></h3>';
		var partner_data2 = '<h3><pre> status: ' + partner_data.status + ' </pre></h3>';
		var name1 = '<h3><pre> ' + place_data.place_id + ' </pre></h3>';
		var name = '<h3><pre> ' + place_data.name + ' </pre></h3>';
		var photo = place_data.photos ? '<img src="' + place_data.photos[0].getUrl({ 'maxWidth': 300, 'maxHeight': 300 }) + '">' : '';
		var adress = '<p>' + place_data.adr_address + '</p>';
		var custom_info = '<p>Сюда например попадут данные из бд.</p>';
		var phone = '<p> ' + place_data.international_phone_number + ' </p>';
		var website = '<p><a target="_blank" href="' + place_data.website + '"> Перейти на сайт компании </a></p>';
		var custom_info1 = '<p style="color:#999999;"> * Весь этот информационный блок можна юзать переюзать верстать как угодно.</p>';

		infoWindow.setContent(icon + partner_data1 + partner_data2 + name1 + name + photo + adress + custom_info + phone + website + custom_info1);
		infoWindow.open(map, markers[place_data.place_id]);
	});
}

/***/ }),
/* 6 */,
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
__webpack_require__(2);
module.exports = __webpack_require__(3);


/***/ })
/******/ ]);