@extends('layouts.master')

@section ('map')
	<div id="map" style="position: absolute; width: 100vw; height: 100vh; overflow: hidden;"></div>
@endsection

@section ('map_script')
	<script src="{{ url('js/map.js?no_cache=' . time()) }}"></script>
@endsection


@section ('content')
		<div class="banner" style="margin-left: 10px; padding: 10px; border:2px solid rgba(0,150,0,0.5); background: rgba(0,150,0,0.15); width: 200px; position: absolute; top: 50px; z-index: 2;">
			<h3>Найти ТЦ</h3>
			<hr>
			<div style="margin: 10px;">
				<p>Фильтры:</p>
				<span>Ближайшее метро:</span><br>
				<select v-model="filters.subway">
					<option value=""></option>       
					<option value="chern">Черниговская</option>
					<option value="palac_sportu">Палац спорта</option>
					<option value="levober">Левобережная</option>
					<option value="maydan">Майдан</option>
					<option value="hark">Харек</option>
				</select>
				<br>
				<span>Класс ТЦ:</span><br>
				<input type="checkbox" value="1" v-model="filters.status">
				<label for="jack">Эконом</label><br>
				<input type="checkbox" value="2" v-model="filters.status">
				<label for="john">Бизнес</label><br>
				<input type="checkbox" value="3" v-model="filters.status">
				<label for="mike">Элит</label><br>
				<br>

				<input type="text" name="Key Words" placeholder="Бюджет">
				<br>
				<input type="text" name="Key Words" placeholder="Квадратура">
				<br>
				<br>
				<input type="button" value="Применить" v-on:click="filterMarkers">
			</div>
			<hr>
			<div>
				<p>Поиск по строке:</p>
				<input type="text" placeholder="Введите название ТЦ" v-model="search">
				<div id="search_list" style="background: rgba(255,255,255,0.8);" v-if="show_found_list">
					<p v-for="(name, place_id) in found_items"><a href="!#" v-on:click.prevent="showMarkers([place_id])" v-text="name"></a></p>
				</div>
			</div>
			<hr>
			<div>
				<p>Сброс:</p>
				<input type="button" value="Сбросить" v-on:click="showMarkers([])">
			</div>
		</div>
@endsection