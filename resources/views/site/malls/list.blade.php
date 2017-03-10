@extends('layouts.master')

@section ('content')
    <h2>Тут у нас список торговых центров из БД:</h2>
    <div>
    	@foreach ($malls as $mall)	
			<p>place_id: {{ $mall->place_id }}</p>
			<p>name: {{ $mall->name }}</p>
			<p>subway: {{ $mall->subway }}</p>
			<p>status: {{ $mall->status }}</p>
			<p>polygon_coords: {{ $mall->polygon_coords }}</p>
			<hr>
    	@endforeach
    </div>
@endsection
