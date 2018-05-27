@extends('layouts.main')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset(elixir('css/jquery.vm-carousel.css')) }}{{ $STATIC_VERSION }}">
@endsection

@section('title', '卡牌列表')

@section('body')
<body class="body-bg03">
	<div class="kp">
		<div class="center prel">
			<div class="logo pabs"></div>
		</div>
		
		<div class="htmleaf-container">
            <div class="container">
                <ul class="vmcarousel-centered vmc-centered">
                    @foreach($items as $item)
                    <li>
                        <label>入门活动</label>
                        <img class="reflect" src="{{ $item['image_url'] }}" >
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset(elixir('js/modernizr.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript" src="{{ asset(elixir('js/reflection.js')) }}{{ $STATIC_VERSION }}"></script>
<script src="{{ asset(elixir('js/jquery.vm-carousel.js')) }}{{ $STATIC_VERSION }}"></script>
<script type="text/javascript">
	jQuery(function($){
            $('.vmcarousel-centered').vmcarousel({
                centered: true,
                start_item: 2,
                autoplay: false,
                infinite: true
            });
        });
</script>
@endsection