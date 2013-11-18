@foreach ($films as $film)
	<h1>{{ $film->title }}</h1>
	<p>Running time in seconds {{ $film->duration }}</p>
	<p>Genre: {{ $film->genre->name }}</p>
	<p>Year: {{ $film->year }}</p>
	<p>Director: {{ $film->director->name }}</p>
	<p>{{ $film->description }}</p>


	Actors
	<ul>
		@foreach ($film->actors as $actor)
			<li>{{ $actor->name }}</li>
		@endforeach
	</ul>

@endforeach