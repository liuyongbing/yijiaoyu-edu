@extends('layouts.main')

@section('title', '色带列表')

@section('body')
<body class="body-bg">

<div class="stage">
	
	<div class="center prel">
		
		<div class="logo pabs"></div>
		
		<div class="stage-list prel">
        @foreach($items as $key => $item)
			<a class="a0{{ $key+1 }} @if(($key+1) == count($items)) pabs @endif" href="{{ route('courses.show', ['id' => $item['id']]) }}">
				<span>
					<label>{{ $item['title'] }}</label>
					<img src="{{ $item['image_url'] }}" />
				</span>
			</a>
        @endforeach
		</div>
		
	</div>
	
</div>

</body>
@endsection