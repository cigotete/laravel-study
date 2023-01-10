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
				{{ $portfolioItem->title }}<br>
                {{ $portfolioItem->description }}<br>
                {{ $portfolioItem->created_at->diffForHumans() }}<br>
                <!--<pre>
					{{ $loop->first ? 'Es el primero' : '' }}
					{{ $loop->last ? 'Es el último' : '' }}
					{{ var_dump($loop) }}
				</pre>-->
			</li>
		@endforeach
        {{ $portfolio->links() }}
    @else
		<li>No datos</li>
	@endisset
</ul>





@endsection
