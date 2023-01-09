@extends('layout')

@section('title')
Portfolio
@endsection

@section('content')
Portfolio



<ul>
	@isset ($portfolio)
		@foreach ($portfolio as $portfolioItem)
			<li>
				{{ $portfolioItem['title'] }}
				<pre>
					{{ $loop->first ? 'Es el primero' : '' }}
					{{ $loop->last ? 'Es el último' : '' }}
					{{ var_dump($loop) }}
				</pre>
			</li>
		@endforeach
	@else
		<li>No datos</li>
	@endisset
</ul>





@endsection