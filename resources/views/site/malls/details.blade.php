@extends('layouts.master')

@section ('content')
    <div>
    	current mall details:
    	<p>Название: {{ $mall->name }}</p>
    	<p>Ближайшее метро: {{ $mall->subway }}</p>
    	<p>Класс ТЦ: {{ $mall->status }}</p>
    	<p>Координаты: {{ $mall->polygon_coords }}</p>
    </div>
@endsection
