function initMap() {
	setTimeout(function() {
		vm.map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 50.44028798, lng: 30.52993298},
			zoom: 12
		});
	}, 0); 
}

var vm;
vm = new Vue({
	el: '#app',

	data: {
		is_load_data: 0,
		progress: 0,

		malls_data: null,
		infoWindow: null,
		placesService: null,
		map: null,
		map_start_config: {},

		markers: {},

		search: '',
		found_items: {},
		show_found_list: false,

		subway_filter: '',
		status_filter: [],
		filters: {
			subway: '',
			status: [],
		},
	},

	watch: {
		is_load_data: function () {
			if (this.is_load_data == 1) {
				this.showMarkers(this.getFullMallsIdList());
			}
		},
		malls_data: function () {
			this.is_load_data += 0.50;
			this.progress += 0.25;
		},
		map: function () {
			this.map_start_config = {
				center: this.map.getCenter(),
				zoom: this.map.getZoom()
			}
			this.infoWindow = new google.maps.InfoWindow();
			this.placesService = new google.maps.places.PlacesService(this.map);
			this.is_load_data += 0.50;
			this.progress += 0.25;
		},
		search: function() {
			this.show_found_list = false;
			
			if (this.search.trim().length < 3) return false;

			this.placesService.radarSearch({
				location: this.map_start_config.center,
				radius: '10000',
				keyword: this.search
			}, function (places, status) {
				if (status == google.maps.places.PlacesServiceStatus.OK){
					console.log('find something');

					this.vm.show_found_list = true;
					this.vm.found_items = {};
					places.forEach(function(place, i, arr) {
						if(this.malls_data[place.place_id] && !this.found_items[place.place_id])
							this.found_items[place.place_id] = this.malls_data[place.place_id].name;
					}, this.vm);
				} else {
					console.log('did not find nothing');
				}
			});		
		},
		progress: function() {

			if (this.progress >= 0.99) this.progress = 1;
		},
	},

	methods: {
		getFullMallsIdList: function() {
			var malls_id_list = [];
			for (var place_id in this.malls_data) {
				malls_id_list.push(place_id);
			}
			return malls_id_list;
		},
		filterMarkers: function() {
			console.log('filter markers:');
			console.log(this.filters.subway);
			console.log(this.filters.status.join(';'));

			axios.get('/tz_agro/public/api/malls/filters', {
				params: {
					status: this.filters.status.join(';'),
					subway: this.filters.subway,
				}
			}).then(function (response) {
				console.log(response.data);
				this.vm.showMarkers(response.data);
			})
			.catch(function (error) {
				console.log('axios error');
			});

		},
		addMarker: function (place_id, location) {
			// Create new marker on map and add it in vm
			this.markers[place_id] = new google.maps.Marker({
				map: this.map,
				position: location,
				icon: {
					url: 'http://maps.gstatic.com/mapfiles/circle.png',
					anchor: new google.maps.Point(10, 10),
					scaledSize: new google.maps.Size(10, 17)
				}
			});

			// click on marker toggles the listener that will show block with info aboute place
			google.maps.event.addListener(this.markers[place_id], 'click', function() {
				axios.get('/tz_agro/public/api/malls/' + place_id)
				.then(function (response) {
					var name   = '<h3>' + response.data.name + '</h3>';
					var subway = '<p>subway: ' + response.data.subway + '</p>';
					var status = '<p>status: ' + response.data.status + '</p>';
					this.vm.infoWindow.setContent(name+subway+status);
					this.vm.infoWindow.open(this.vm.map, this.vm.markers[place_id]);
				})
				.catch(function (error) {
					this.vm.infoWindow.setContent('some error with axios');
					this.vm.infoWindow.open(this.vm.map, this.vm.markers[place_id]);
				});
			});
		},
		clearMarkers: function() {
			if (this.markers == {}) return false;
			for (var id in this.markers) {
				this.markers[id].setMap(null);
			}
			this.markers = {};
		},
		showMarkers: function (malls_id_list) {
			if (malls_id_list.length == 0) {
				malls_id_list = this.getFullMallsIdList();
				this.filters.subway = '';
				this.filters.status = [];
			}
			console.log('###run map - update markers on map');
			
			this.clearMarkers();
			// var last_marker_location;
			
			malls_id_list.forEach(function(id, i, arr) {
				// last_marker_location = this.malls_data[id].location;
				this.addMarker(id, this.malls_data[id].location);
				this.progress += 0.5 / arr.length;
			}, this);

			// if we have only 1 marker so focus map on it, else turn to base config	
			// this.map.panTo((malls_id_list.length == 1)? last_marker_location : this.map_start_config.center);
			this.map.panTo((malls_id_list.length == 1)? this.malls_data[malls_id_list[0]].location : this.map_start_config.center);
			this.map.setZoom((malls_id_list.length == 1)? 15 : this.map_start_config.zoom);
		}
	},

	created() {
		axios.get('/tz_agro/public/api/malls').then(response => this.malls_data = response.data);
	},
});