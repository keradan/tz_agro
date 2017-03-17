@if (count($errors))
	<div class="alert alert-error">
		<ul> <strong>Errors:</strong>
			@foreach ($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif