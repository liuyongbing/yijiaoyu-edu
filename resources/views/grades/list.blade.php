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
            <!--div class="container" id="imageFlow">
                <div class="bank">
                    @foreach($items as $item)
                    <label>{{ $item['title'] }}</label>
                    <a rel="{{ $item['image_url'] }}" href="{{ route('courses.index', ['grade_id' => $item['id']]) }}"></a>
                    @endforeach
                </div-->
                <!--div class="text">
                    <div class="title"></div>
                    <div class="legend"></div>
                </div>
                <div class="scrollbar">
                    <img class="arrow-left" src="/images/left-jt.png" alt="">
                    <img class="arrow-right" src="/images/right-jt.png" alt="">
                </div-->
            <!--/div-->
            
            <div class="container">
                <ul class="vmcarousel-centered vmc-centered">
                    @foreach($items as $item)
                    <li>
                        <label>入门活动</label>
                        <img class="reflect" src="{{ $item['image_url'] }}" >
                        <img class="undis reflect" src="{{ $item['image_url'] }}" >
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
<script type="text/javascript" src="{{ asset(elixir('js/reflection01.js')) }}{{ $STATIC_VERSION }}"></script>
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