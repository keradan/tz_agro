@extends('layouts.master')

@section ('map')
	<div id="map" style="position: absolute; width: 100vw; height: 100vh; overflow: hidden;"></div>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqC-sK24BXVEslyKm16cly5d9PMpzN9dI&callback=initMap&signed_in=true&libraries=places,visualization" async defer></script>
@endsection
@section ('content')
		<!-- banner -->
		<div class="banner" style="margin-left: 10px; padding: 10px; border:2px solid rgba(0,150,0,0.5); background: rgba(0,150,0,0.15); width: 200px; position: absolute; top: 50px; z-index: 2;" onclick="hideSearchList();">
			<div class="container">
				<div class="banner-right">
					<h3><span>Найти ТЦ</span></h3>
					<div class="reservation">
						<div class="section_room">
							<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<select onchange="setFilter('subway', this.value)" class="frm-field">
								<option value="">Метро</option>       
								<option value="chern">Черниговская</option>
								<option value="palac_sportu">Палац спорта</option>
								<option value="levober">Левобережная</option>
								<option value="maydan">Майдан</option>
								<option value="hark">Харек</option>
							</select>
						</div>	
						<div class="section_room">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							<select onchange="setFilter('status', this.value)" class="frm-field">
								<option value="">Класс ТЦ</option>        
								<option value="1">Эконом</option>
								<option value="2">Бизнес</option>
								<option value="3">Элит</option>
							</select>
						</div>
						<div class="keywords">
							<form action="#" method="post">
								<!-- <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> -->
								<input type="text" name="Key Words" placeholder="Бюджет"><br>
								<input type="text" name="Key Words" placeholder="Квадратура"><br>
								<input type="button" onclick="filterMap()" value="Искать">
							</form>
						</div>
					</div>
					<h3><span>Поиск по строке</span></h3>
					<div class="reservation">
						<input type="text" id="text_query" onkeyup="textSearch()" onkeypress="runFirstSearchItem(event.keyCode)"  name="query" placeholder="Введите название ТЦ"><br>	
						<div id="search_list" style="background: rgba(255,255,255,0.8); display: none;"></div>
					<!--	<input type="button" onclick="textSearch()" value="Искать"> -->
					</div>
					<h3><span>Сброс</span></h3>
					<div class="reservation">
						<input type="button" onclick="resetMap()" value="сбросить">
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //banner -->
@endsection