@extends('layout')

@section('titulo')
	<h1>Mi Section</h1>
@endsection

@section('content')
	<h2>notes</h2>
	<ul>
		@foreach($notes as $note)
		<li>
			<?=$note->note?>
			{{$note->note}}
		</li>
		@endforeach
	</ul>
	<form method="POST">
		{!! csrf_field()!!}
		<textarea></textarea>
		<button type="submit">Crear nota</button>
	</form>
@endsection

@section('footer')
	<div>
		<p>@putos me la pelan</p>
	</div>
@endsection