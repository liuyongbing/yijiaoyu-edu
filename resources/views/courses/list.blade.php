@extends('layouts.main')

@section('title', '色带列表')

@section('body')
<body class="body-bg">

<div class="stage">
	<div class="center prel">
		<div class="logo logo-add logo-dm pabs"></div>
		<div class="stage-list stage-list-add prel">
        @if (!empty($items))
            @foreach($items as $key => $item)
			<a class="a0{{ $key+1 }} @if(($key+1) == count($items)) pabs @endif" href="{{ route('courses.show', ['id' => $item['id']]) }}">
				<span>
					<label>{{ $item['title'] }}</label>
					<img src="{{ $item['image_url'] }}" class="reflect" />
				</span>
			</a>
            @endforeach
        @else
            <h1 style="color:#FFF">即将上线</h1>
        @endif
		</div>
	</div>
</div>
</body>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('js/reflection01.js')) }}{{ $STATIC_VERSION }}"></script>
@endscript
