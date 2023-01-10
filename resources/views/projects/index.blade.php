@extends('layout')

@section('title')
Portfolio
@endsection

@section('content')
Portfolio



<ul>
	@isset ($projects)
		@foreach ($projects as $projectItem)
			<li>
				<a href="{{ route('portfolio.show', $projectItem) }}">
                {{ $projectItem->title }}
                </a>
                <br>
                {{ $projectItem->description }}<br>
                {{ $projectItem->created_at->diffForHumans() }}<br>
                <!--<pre>
					{{ $loop->first ? 'Es el primero' : '' }}
					{{ $loop->last ? 'Es el último' : '' }}
					{{ var_dump($loop) }}
				</pre>-->
			</li>
		@endforeach
        {{ $projects->links() }}
    @else
		<li>No datos</li>
	@endisset
</ul>





@endsection
