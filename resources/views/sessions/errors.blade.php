@if (count($errors))
	<div class="alert alert-error">
		<button class="close" data-dismiss="alert">×</button>
		<ul> <strong>Errors:</strong>
			@foreach ($errors->all() as $error)
				<li> {{ $error }} </li>
			@endforeach
		</ul>
	</div>
@endif